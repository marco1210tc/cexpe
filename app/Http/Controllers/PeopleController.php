<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreatePersonRequest;

use Intervention\Image\Laravel\Facades\Image;
use App\Events\PeopleSaved;
use App\Models\Departamento;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        // $people = Person::get();
        $people = Person::with('departamento')->latest()->paginate(5);
        return view('people', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Person $person)
    {
        return view('create', [
            'person' => new Person,	
            'departamentos' => Departamento::pluck('nombre', 'id'),
        ]);

        // return view('create', ['person' => new Person]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePersonRequest $request)
    {
        // Person::create($request->validated());
        $person = new Person($request->validated());
        $person->cPerImage = $request->file('cPerImage')->store('images'); 
        //dd($person->cPerImage);
        $person->save();
        //return dd($request->validated());

        //optimizar la imagen guardada
        $image = Image::read(Storage::get($person->cPerImage))
            ->scale(width: 600)
            ->reduceColors(255)
            ->encode();

        //sobreescribimos la imagen
        Storage::put($person->cPerImage, (string) $image);
        //disparar evento
        PeopleSaved::dispatch($person);
        // return(dd($person));
        return redirect(route('people.index'))->with('state', 'El usuario fue agregado existosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view( 'show', ['person' => Person::find($id)] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit', [
            'person' => Person::find($id),
            'departamentos' => Departamento::pluck('nombre', 'id'),
        ]);
        // return view('edit', ['person' => Person::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(CreatePersonRequest $request, string $id)
    // {
    //     $person = Person::find($id);
    //     if ($request->hasFile('cPerImage')) {
    //         Storage::delete($person->cPerImage);
    //         $person->fill( $request->validated() );
    //         $person->cPerImage = $request->file('cPerImage')->store('images');
    //         $person->save();
    //     } else {
    //         $person->update( array_filter( $request->validated() ) );
    //     }

    //     return redirect()->route('people.show', $person)
    //         ->with('state', 'Datos de usuario actualizados correctamente.');
    // }

    public function update(CreatePersonRequest $request, string $id)
    {
        $person = Person::find($id);

        // Verifica si el archivo de imagen está presente en el request
        if ($request->hasFile('cPerImage')) {
            // Elimina la imagen anterior si existe
            if ($person->cPerImage && Storage::exists($person->cPerImage)) {
                Storage::delete($person->cPerImage);
            }
            
            // Sube y guarda la nueva imagen
            $person->cPerImage = $request->file('cPerImage')->store('images');
        }

        // Actualiza el resto de los datos
        $person->fill($request->validated());
        $person->save();

        //optimizar la imagen guardada
        $image = Image::read(Storage::get($person->cPerImage))
            ->scale(width: 600)
            ->reduceColors(255)
            ->encode();

        //sobreescribimos la imagen
        Storage::put($person->cPerImage, (string) $image);
        //disparar evento
        PeopleSaved::dispatch($person);

        return redirect()->route('people.show', $person)
            ->with('state', 'Datos de usuario actualizados correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $person = Person::find($id);
        Storage::delete($person->cPerImage);
        $person->delete();
        return redirect()->route('people.index')->with('state', 'El usuario se eliminó correctamente.');        
    }
}

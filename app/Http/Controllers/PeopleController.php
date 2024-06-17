<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

use App\Http\Requests\CreatePersonRequest;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = Person::get();
        return view('people', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePersonRequest $request)
    {
        // Person::create([
        //     'cPerApellido' => request('lastname'),
        //     'cPerNombre' => request('name'),
        //     'cPerDireccion' => request('address'),
        //     'dPerFecNac' => request('birthday'),
        //     'nPerEdad' => request('age'),
        //     'nPerSueldo' => request('salary'),
        //     'nPerEstado' => request('state'),
        // ]);
        Person::create($request->validated());
        return redirect(route('people.index'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

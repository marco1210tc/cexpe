<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\PostedEmail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $email = request()->validate([
            'cContNombre' => 'required',
            'cContEmail' => 'required',
            'cContAsunto' => 'required',
            'cContMensaje' => 'required',
        ], [
            'cContNombre.required' => 'Un nombre es requerido',
            'cContrEmail.required' => 'Ingrese el email',
            'cContAsunto.required' => 'Ingrese el asunto',
            'cContMensaje.required' => 'Escriba un mensaje', 
        ]);
        Mail::to('martold1210@gmail.com')->send(new PostedEmail($email));
        // return $email; //verificando la variable
        return 'Mensaje enviado';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(string $id)
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

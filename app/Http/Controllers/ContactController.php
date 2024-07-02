<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests\CreateEmailRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostedEmail;
use App\Models\Email;

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
    public function store(CreateEmailRequest $request)
    {
        // $email = request()->validate();
        Email::create($request->validated());
        Mail::to('martold1210@gmail.com')->send(new PostedEmail($request));
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

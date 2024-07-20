@extends('layout')

@section('title', 'Home')

@section('content')
    @guest
        @include('home-guest')
    @else
        <h2> Inicio </h2>
        {{ auth()->user()->name }}     
        {{-- @include('home-auth') --}}
    @endguest
@endsection

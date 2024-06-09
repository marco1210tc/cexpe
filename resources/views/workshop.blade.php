@extends('layout')

@section('title', 'Talleres')
@section('content')
  <h1> Talleres </h1>

  @if ($list)
    <ul>
      @foreach ($list as $item)
        <li> {{ $item['item'] }} </li>
      @endforeach
    </ul>
  @else
    <h2> No existen elementos </h2>
  @endif


@endsection
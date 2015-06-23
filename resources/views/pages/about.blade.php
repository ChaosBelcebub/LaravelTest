@extends('app')

@section('content')

    <h1>About</h1>

    @if (count($people))
        <h3>People, {{$first}} {{$last}} likes</h3>
        <ul>

            @foreach($people as $person)

                <li>{{ $person }}</li>

            @endforeach

        </ul>
    @endif
    <p>Lorem Ipsum</p>

@stop
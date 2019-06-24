@extends('layout')
@section('title', 'Homepage')
@section('content')
    <h1>Homepage</h1>

    <h3>Title: {{ $title }}</h3>

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>

@endsection

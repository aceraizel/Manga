@extends('layouts.master)
@section('title')
    <title>Manga</title>
@endsection
@section('content')
    <h1>This is My Test Page</h1>

    @foreach($Songs as $song)
        {{ $song }} <br/>
    @endforeach
@endsection
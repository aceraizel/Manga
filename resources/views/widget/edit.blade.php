@extends('layouts.master')
@section('title')
    <title>Edit Widget</title>
@endsection
@section('content')

    <ol class="breadcrumb">
        <li><a href="{{ url("/") }}">Home</a></li>
        <li><a href="{{ url('/widget') }}">Widgets</a></li>
        <li><a href="{{ url('/widget/'.$widget->id) }}">{{ $widget->name }}</a></li>
        <li class="active">Edit</li>
    </ol>

    <h2>Edit Widget</h2>
    <hr/>

    <form action="{{ url('/widget/'.$widget->id) }}" method="post" role="form" class="form">
        <input type="hidden" name="_method" value="patch">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
            <label for="name" class="label-control">Widget Name</label>
            <input type="text" class="form-control" name="name" value="{{ $widget->name }}">

            @if($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif

        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-lg btn-primary" value="Edit" />
        </div>
    </form>

@endsection
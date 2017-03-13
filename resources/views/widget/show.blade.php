@extends('layouts.master')
@section('title')
    <title>{{ $widget->name }} Widget</title>
@endsection
@section('content')
    
    <ol class="breadcrumb">
        <li><a href="{{ url("/") }}">Home</a></li>
        <li><a href="{{ url("/widget") }}">Widgets</a></li>
        <li class="active">
            {{ $widget->name }}
        </li>
    </ol>

    <h2>{{ $widget->name }}</h2>
    <hr/>

    <div class="panel panel-default">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date Created</th>
                @if(Auth::user()->is_admin)
                    <th>Edit</th>
                    <th>Delete</th>
                @endif
            </tr>

            <tr>
                <td>{{ $widget->id }}</td>
                <td><a href="{{ url("/widget/".$widget->id) }}">{{ $widget->name }}</a></td>
                <td>{{ $widget->created_at }}</td>
                @if(Auth::user()->is_admin)
                    <td><a href="{{ url("/widget/".$widget->id ."/edit") }}" class="btn btn-default">Edit</a></td>
                    <td>
                        <div class="form-group">
                            <form action="{{ url('/widget/'.$widget->id) }}" method="post" role="form" class="form">
                                <input type="hidden" name="_method" value="delete">
                                {{ csrf_field() }}
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return comfirm('Are you sure you want to delete?')">
                            </form>
                        </div>
                    </td>
                @endif
            </tr>
        </table>
    </div>
    
@endsection
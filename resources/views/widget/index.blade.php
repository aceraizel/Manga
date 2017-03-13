@extends('layouts.master')
@section('title')
    <title>List of Widget</title>
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ url("/") }}">Home</a></li>
        <li class="active">Widgets</li>
    </ol>

    <h2>List of Widget</h2>
    <hr/>

    @if(count($widgets) > 0)

        <table class="table table-hover table-bordered table-striped">

            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Date created</th>
            </thead>

            <tbody>

                @foreach($widgets as $widget)
                    <tr>
                        <td>{{ $widget->id }}</td>
                        <td><a href="{{ url("/widget/".$widget->id .'-'.$widget->slug) }}">{{ $widget->name }}</a></td>
                        <td>{{ $widget->created_at }}</td>
                    </tr>
                @endforeach

            </tbody>

        </table>

    @else
        No Widget.
    @endif

    {{ $widgets->links() }}

    <div>
        <a href="{{ route("widget.create") }}" class="btn btn-lg btn-primary">Create New</a>
    </div>

@endsection
@extends('templates.admin-master')
@section('header_content')
    <title>Event List</title>
@endsection
@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title">Manage Events</h2>
            <a href="{{ url('/events/create') }}" class="btn btn-success mb-3">Create New Event</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Importance</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->priority }}</td>
                        <td>{{ $event->date }}</td>
                        <td>
                            <a href="{{ url('/events/update/'.$event->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ url('/events/delete/'.$event->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

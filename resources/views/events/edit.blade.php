@extends('templates.admin-master')\
@section('header_content')
    <title>Update Event</title>
@endsection
@section('content')
     <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title">Update Event</h2>
                    <form action="{{ url('/events/update') }}" method="POST">
                        <input type="hidden" name="id" value="{{ $event->id }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="eventName">Event Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $event->name }}" id="eventName" placeholder="Enter event name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="eventDescription">Event Description</label>
                            <textarea class="form-control" name="description" id="eventDescription" rows="3">{{$event->description}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="eventImportance">Event Importance</label>
                            <select class="form-control" id="eventImportance" name="priority">
                                <option value="High" @if($event->priority=='High')Selected @endif>High</option>
                                <option value="Medium" @if($event->priority=='Medium')Selected @endif>Medium</option>
                                <option value="Low" @if($event->priority=='Low')Selected @endif>Low</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="eventDate">Event Date</label>
                            <input type="date" class="form-control" id="eventDate" name="event_date" value="{{ $event->event_date }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
@endsection


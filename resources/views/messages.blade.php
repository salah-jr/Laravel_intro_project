@extends('layouts.app')

@section('content')
    

<h3>Messages</h3>
@if(count($messages)> 0)
    @foreach ($messages as $message)
        <ul class="list-group">
            <li class="list-group-item">Name: {{$message->name}}</li>
            <li class="list-group-item">Email: {{$message->email}}</li>
            <li class="list-group-item">Message: {{$message->message}}</li>
        </ul>
        <br>
    @endforeach
@endif

@endsection

@section('sidebar')
    @parent
    <p> Override the main sidebar </p>
@endsection
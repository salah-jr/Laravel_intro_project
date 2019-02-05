@extends('layouts.app')

@section('content')
    

<h3>Contact page</h3>
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class'=> 'form-control', 'placeholder'=> 'Enter Name'])}}
    </div>
    <div class="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '', ['class'=> 'form-control', 'placeholder'=> 'example@example.com'])}}
    </div>
    <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '', ['class'=> 'form-control', 'placeholder'=> 'Write your message'])}}
    </div>
    <div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>
    <br>
{!! Form::close() !!}
@endsection
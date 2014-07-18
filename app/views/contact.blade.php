@extends('layout')
@section('content')
  <h1>Contact US</h1>
  {{ Form::open(['url' => 'contact'])}}
  {{ Form::label('subject')}}
  {{ Form::text('subject', "enter your subject") }}
  </br>
  {{ Form::label('message') }}
  {{ Form::textarea('message', "enter your message here" )}}
  </br>
  {{ Form::submit() }}
  {{ Form::close() }}
@stop

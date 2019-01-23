@extends('layout.app')
@section('content')
    <div class="clearfix">
        <h2 class="mt-3 float-left">Edit Todo</h2>
    <a href="/todo/{{$todo->id}}" class="btn btn-secondary float-right mt-3">Back</a>
    </div>
    <hr>
    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
        {{ Form::bsText('text', $todo->text) }}
        {{ Form::bsTextArea('body', $todo->body) }}
        {{ Form::bsText('due', $todo->due) }}
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::bsSubmit('Submit') }}
    {!! Form::close() !!}
@endsection
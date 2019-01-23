@extends('layout.app')
@section('content')
    <div class="clearfix">
        <h2 class="mt-3 float-left">Create Todo</h2>
        <a href="/" class="btn btn-secondary float-right mt-3">Back</a>
    </div>
    <hr>
    {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
        {{ Form::bsText('text') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('Submit') }}
    {!! Form::close() !!}
@endsection
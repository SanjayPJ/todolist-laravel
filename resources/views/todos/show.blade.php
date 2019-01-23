@extends('layout.app')
@section('content')
<div class="clearfix">
    <h2 class="mt-3 float-left">{{ $todo->text }}</h2>
    <a href="/" class="btn btn-secondary float-right mt-3">Back</a>
    <div class="float-right mt-3 mr-2">
        {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::bsSubmit('Delete') }}
        {!! Form::close() !!}
    </div>
<a href="/todo/{{ $todo->id }}/edit" class="btn btn-secondary float-right mt-3 mr-2">Edit</a>
</div>
<h6><span class="badge badge-danger">{{ $todo->due }}</span></h6>
<div class="mt-4">{{ $todo->body }}</div>    
@endsection
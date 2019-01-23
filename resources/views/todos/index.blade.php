@extends('layout.app')
@section('content')
    <h2 class="mt-3">Your Todos</h2>
    <hr>
    @if (count($todos) > 0)
    @foreach ($todos as $todo)
    <div class="card mt-2">
        <div class="card-body">
        <h5 class="card-title m-0"><a class="text-dark" href="/todo/{{ $todo->id }}">{{ $todo->text }}</a> <span class="badge badge-danger">{{ $todo->due }}</span></h5>
        </div>
    </div>
    @endforeach
    @endif
@endsection
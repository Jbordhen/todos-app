@extends('layout.app')
@section('content')
    <h1 class='text-center my-5'>Todos page</h1>

    <div class="card card default">
        <div class="card-header">
            Todos
        </div>
        <div>
            <div class="card-body">
                <ul class="list-group">

                    @foreach($todos as $todo)
                        <li class="list-group-item">
                            {{$todo->name}}
                            @if(!$todo->completed)
                                <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm float-right" >Complete</a>
                            @endif
                            <a class="btn btn-primary btn-sm float-right mr-2" href="/todos/{{$todo->id}}">View</a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
@endsection
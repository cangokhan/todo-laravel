@extends('layouts.master')
@section('content')
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">TodoList</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('create')}}">Create Todo</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 my-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Todo List</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Todo</th>
                    <th scope="col">Description</th>
                    <th scope="col">State</th>
                    <th scope="col">Control</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($todoList as $todo)
                    <tr>
                      <th scope="row">{{$todo->id}}</th>
                      <td>{{$todo->todo}}</td>
                      <td>{{$todo->description}}</td>
                      <td>
                        <div class="form-check form-switch">
                          <input data-id="{{$todo->id}}" data-state="{{$todo->state}}" class="form-check-input flexSwitch" type="checkbox" @if ($todo->state == 1) checked @endif>
                        </div>
                      </td>
                      <td>
                        <a href="{{route('show',$todo->id)}}" class="btn btn-sm btn-info"> View </a>
                        <a href="#" class="btn btn-sm btn-danger"> Delete </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection

@section('js')
  <script type="text/javascript">
    $('.flexSwitch').change(function(){
        id = $(this).data('id');
        state = $(this).data('state');
        $.get( "{{route('state')}}",{id:id,state:state}, function( data ) {
          $( ".result" ).html( data );
          alert( "Load was performed." );
        });
    });
  </script>
@endsection

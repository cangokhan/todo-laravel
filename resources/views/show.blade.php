@extends('layouts.master')
@section('title','Todo Detail')
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
            <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
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
              <h5 class="card-title">Todo Detail</h5>
              <div class="card">
                <div class="card-header">
                   {{$todo->todo}}
                </div>
                <div class="card-body">
                  <p class="card-text">{{$todo->description}}</p>
                  <a href="{{route('index')}}" class="btn btn-primary">Go back</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection

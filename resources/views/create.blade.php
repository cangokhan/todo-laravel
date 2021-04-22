@extends('layouts.master')
@section('title','Create Todo')
@section('content')
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TodoList</a>
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
              <h5 class="card-title">Create Todo</h5>

              <form action="/create" method="post">
                @csrf
                <div class="form-group">
                    <label for="gorev">Todo</label>
                    <input type="text" class="form-control" name="todo" id="todo">
                </div>
                <div class="form-group">
                    <label for="gorev">Description</label>
                    <input type="text" class="form-control" name="description" id="description">
                </div>
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" name="button" class="btn btn-primary"> Create </button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection

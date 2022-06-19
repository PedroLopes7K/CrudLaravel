@extends('layouts.app')

@section('title', 'Create')

@section('content')
<!-- tudo aqui dentro será renderizado no template -->

<div class="container mt-5">
  <h1 class="text-center">Insert New Game</h1>

  <hr>
  <form action="{{ route('games-store') }}" method="POST">

    <!-- csrf é um metodo de segurança do laravel necessário para envio do form -->
    @csrf
    <div class="form-group">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Name of game">
      </div>
      <br>
      <div class="form-group">
        <label for="category">Category:</label>
        <input type="text" class="form-control" name="category" placeholder="Category of game">
      </div>
      <br>

      <div class="form-group">
        <label for="year">Year:</label>
        <input type="number" class="form-control" name="year" placeholder="Release year">
      </div>
      <br>

      <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" class="form-control" name="price" placeholder=" Ex: $100">
      </div>
      <br>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" name="Create" value="Create">
      </div>
    </div>

  </form>
</div>


@endsection
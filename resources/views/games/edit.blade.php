@extends('layouts.app')

@section('title', 'Edit')

@section('content')
<!-- tudo aqui dentro será renderizado no template -->

<div class="container mt-5">
  <!-- <h1 class="text-center">Insert New Game</h1> -->
  <div class="row">
    <div class="col-sm-10">
      <h1>Edit Game</h1>

    </div>
    <div class="col-sm-2">
      <a href="{{ route('games-index') }}" class="btn btn-danger px-4"> Back </a>
    </div>
  </div>

  <hr>
  <form action="{{ route('games-update', ['id'=> $game->id]) }}" method="POST">

    <!-- csrf é um metodo de segurança do laravel necessário para envio do form -->
    @csrf
    <!-- necessário para usar o metodo PUT para atualizar dados -->
    @method('PUT')
    <div class="form-group">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" value="{{ $game->name }}" placeholder="Name of game">
      </div>
      <br>
      <div class="form-group">
        <label for="category">Category:</label>
        <input type="text" class="form-control" name="category" value="{{ $game->category }}" placeholder="Category of game">
      </div>
      <br>

      <div class="form-group">
        <label for="year">Year:</label>
        <input type="number" class="form-control" name="year" value="{{ $game->year }}" placeholder="Release year">
      </div>
      <br>

      <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" class="form-control" name="price" value="{{ $game->price }}" placeholder=" Ex: $100">
      </div>
      <br>

      <div class="form-group">
        <input type="submit" class="btn btn-success" name="Create" value="Edit">
      </div>
    </div>

  </form>
</div>


@endsection
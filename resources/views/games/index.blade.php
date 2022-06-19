@extends('layouts.app')

@section('title', 'List')

@section('content')
<!-- tudo aqui dentro será renderizado no template -->
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-10">
      <h1>List Of Games</h1>

    </div>
    <div class="col-sm-2">
      <a href="{{ route('games-create') }}" class="btn btn-success"> New Game</a>
    </div>
  </div>
  <br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Year</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>

      @foreach($games as $game)
      <tr>
        <th scope="row">{{ $game->id}}</th>
        <th scope="row">{{ $game->name}}</th>
        <th scope="row">{{ $game->category}}</th>
        <th scope="row">{{ $game->year}}</th>
        <th scope="row">${{ $game->price}}</th>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection
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
        <th scope="col" cla>Name</th>
        <th scope="col">Category</th>
        <th scope="col">Year</th>
        <th scope="col">Price</th>
        <th scope="col"></th>
        <th scope="col"></th>
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
        <th scope="row"> <a href="{{ route('games-edit', ['id'=> $game->id]) }}" class="btn btn-primary ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
              <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
            </svg>

          </a> </th>
        <th scope="row"> <a href="{{ route('games-destroy', ['id'=> $game->id]) }}" class="btn btn-danger p-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
              <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
            </svg>
          </a> </th>



      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection
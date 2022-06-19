@extends('layouts.app')

@section('title', 'List')

@section('content')

<div class="container text-center mt-5">
  <h1>404 - PAGE NOT FOUND</h1>
  <a href="{{ route('games-index')}}" class="btn btn-primary mt-4">BACK TO HOME</a>
</div>



@endsection
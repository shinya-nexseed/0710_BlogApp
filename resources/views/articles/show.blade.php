@extends('layout')

@section('content')
  <h1>{{ $article['title'] }}</h1>
  <hr>
  <div>
    {{ $article['body'] }}
  </div>
@endsection
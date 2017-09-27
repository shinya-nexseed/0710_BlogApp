@extends('layout')

@section('content')
  <h1>Articles</h1>
  <hr>

  @foreach($articles as $article)
    <div>
      <h2>{{ $article['title'] }}</h2>
    </div>
    {{-- {{ $hoge }} --}}
  @endforeach
@endsection




















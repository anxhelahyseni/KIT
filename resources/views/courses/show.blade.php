@extends('main')

@section('title', ' | Shiko Kursin')

@section('content')
  <h1>{{ $course->title}}</h1>
  <p class="lead">{{ $course->body }}</p>
@endsection

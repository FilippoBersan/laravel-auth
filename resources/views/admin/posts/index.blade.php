@extends('layouts.admin')



@section('content')
  <ul>
    @foreach ($posts as $post)
    <li>{{$post->title}}</li>
        
    @endforeach
  </ul>
@endsection
@extends('layouts.admin')



@section('content')
<div class="container text-center">
<a href="{{route('admin.posts.create')}}">Crea nuovo portfolio</a>
</div>

<br>
  <ul>
    @foreach ($posts as $post)
    <li>{{$post->title}}</li>
        
    @endforeach
  </ul>
@endsection
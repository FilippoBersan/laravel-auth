@extends('layouts.admin')



@section('content')
<div class="container text-center">
<a href="{{route('admin.posts.create')}}">Crea nuovo portfolio</a>
</div>

<br>
  <ul>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">slug</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
@foreach ($posts as $post)
    

    <tr>
  
      <td>{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->slug}}</td>
      <td>
        <a rel="stylesheet" href="" role="button" class="btn btn-warning btn-sm">edit</a>

         <a rel="stylesheet" href="{{route('admin.posts.show', $post )}}" role="button" class="btn btn-primary btn-sm">show</a>

          <a rel="stylesheet" href="" role="button" class="btn btn-danger btn-sm">delete</a>
      </td>
    </tr>
    @endforeach  
  </tbody>
</table>

@endsection
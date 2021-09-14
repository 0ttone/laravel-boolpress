@extends('layouts.app')

@section('content')
<div class="container post-container">
      <table class="table">
      <thead>
      <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">content</th>
            <th scope="col">img</th>
      </tr>
      </thead>
      <tbody>
            @foreach($allPosts as $post)
            <tr>
                  <th scope="row">{{$post->id}}</th>
                  <td>{{$post->title}}</td>
                  <td>{{$post->content}}</td>
                  <td><img src="{{$post->img}}" alt="image of{{$post->title}}"/></td>
            </tr>
            @endforeach
      </tbody>
      </table>
</div>

@endsection
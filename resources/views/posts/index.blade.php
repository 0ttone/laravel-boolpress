@extends('layouts.app')

@section('content')
<div class="container post-container">
      <table class="table">
      <thead>
      <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Published</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
      </tr>
      </thead>
      <tbody>
            @foreach($allPosts as $post)
            <tr>
                  <th scope="row">{{$post->id}}</th>
                  <td>{{$post->title}}</td>
                  <td>{{$post->content}}</td>
                  <td>{{$post->created_at}}</td>
                  <td><img src="{{$post->img}}" alt="image of{{$post->title}}"/></td>
                  <td class="text-center">
                        <a href="{{ route('posts.show', $post)}}">
                              <button>
                                    <i class="fas fa-search"></i>
                              </button>
                        </a>
                  </td>

            </tr>


            @endforeach
      </tbody>
      </table>
</div>

@endsection
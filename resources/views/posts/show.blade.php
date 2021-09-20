@extends('layouts.app')

@section('content')
<div class="container post-container">
      
<!--rimanda alla route index-->
      <a href="{{ route('posts.index') }}"><i class="fas fa-arrow-left"></i></a>


      <div class="row justify-content-center">
            <div class="col-12">
                  <div class="single-post mb-3">
                        <h2>{{$singlePosts->id}} {{$singlePosts->title}} </h2>
                        <span class="">{{$singlePosts->created_at}}</span>
                        <div class="d-flex flex-wrap">
                              <div class="col-4 p-0">
                                 <img class="img-post" src="{{$singlePosts->img}}" alt="{{$singlePosts->title}}"/>
                              </div>
                              <div class="col-8">
                                  <p class="">{{$singlePosts->content}}</p>

                              </div>

                        </div>
                        
                  </div>
            </div>
      </div>
</div>



                        


@endsection
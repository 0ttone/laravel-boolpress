@extends('layouts.app')

@section('content')
<div class="container post-container">
      {{$singlePost->title}}

      <img src="{{$singlePosts->img}}" alt="image of{{$singlePosts->title}}"/>

</div>

@endsection
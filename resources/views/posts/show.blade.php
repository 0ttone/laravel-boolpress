@extends('layouts.app')

@section('content')
<div class="container post-container">
      {{$allPosts->title}}

      <img src="{{$allPosts->img}}" alt="image of{{$allPosts->title}}"/>

</div>

@endsection
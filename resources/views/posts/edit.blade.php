@extends('layouts.app')

@section('content')

<div class="container post-container">


      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif


      <form action="{{ route('posts.update', $post) }}" method='post'>
            @csrf
            @method('PUT')

            <div class="form-group">
                  <label for="title"> Titolo</label>
                  <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
            </div>

            <div class="form-group">
                  <label for="content">Contenuto</label>
                  <input class="form-control" type="text" name="content" id="content" value="{{$post->content}}">
            </div>

            <div class="form-group">
                  <label for="img"> Immagine</label>
                  <input class="form-control" type="text" name="img" id="img" value="{{$post->img}}">
            </div>

            <div class="form-group">
                  <input type="submit" value="Salva">
            </div>
                  

      </form>
      
</div>

@endsection
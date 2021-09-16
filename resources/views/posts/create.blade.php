@extends('layouts.app')

@section('content')
<div class="container post-container">
      <form action="{{ route('posts.store') }}" method='post'>
            @csrf

            <div class="form-group">
                  <label for="title"> Titolo</label>
                  <input class="form-control" type="text" name="title" id="title">
            </div>

            <div class="form-group">
                  <label for="content">Contenuto</label>
                  <input class="form-control" type="text" name="content" id="content">
            </div>

            <div class="form-group">
                  <label for="img"> Immagine</label>
                  <input class="form-control" type="text" name="img" id="img">
            </div>

            <div class="form-group">
                  <input type="submit" value="Salva">
            </div>
                  

      </form>
      
</div>

@endsection



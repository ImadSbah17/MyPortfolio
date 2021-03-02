@extends('adminlte::page')

@section('content')
<div>
    <form action="/about/{{$about->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
        <h3>Image: </h3>
        <input type="file" name="src">
        <h3>Texte: </h3>
        <input type="text" name="texte" value="{{$about->texte}}">
        <br>
        <button class="mt-3" type="submit">Modifier</button>
        </form>
</div>
@endsection
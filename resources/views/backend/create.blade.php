{{-- ça c'est pour le changement de mon texte pour la présentation --}}
@extends('adminlte::page')
@section('content')
<h1 class="text-center">changement de texte</h1>

<div class="container w-50 text-center pt-2">
    <div class="container">
    <form action="/project/{{$datas->id}}" method="post">
            @method('PUT')
            @csrf
            <input type="text" name="texte" value="{{$datas->texte}}">
            <button type="submit">modifier</button>
        </form>
    </div>
</div>  
@endsection





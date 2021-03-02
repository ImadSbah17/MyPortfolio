@extends('adminlte::page')
@section('content')

<div style="height: 200px" class="">
    @foreach ($about as $elem)
    <form action="/about/{{$elem->id}}/edit" method="GET" enctype="multipart/form-data">
    @csrf
        <h3>Image :</h3>
        <img height="200px" width="250px" src="{{asset('img/'.$elem->src)}}" alt="">
        <h3>Texte :</h3>
        <h3 class="text-dark">{{$elem->texte}}</h3>
        <button type="submit" class="mt-3">Edit</button>
    </form>
    @endforeach
</div>


@endsection
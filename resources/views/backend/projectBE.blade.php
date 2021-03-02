@extends('adminlte::page')
@section('content')
<div>
    <form action="/projectvrai/{{$datas->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Tags</th>
                <th scope="col">image</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <th scope="row">{{$datas->id}}</th>
                  <td><input type="text" name="nom" value="{{$datas->nom}}"></td>
                  <td><input style="width: 200px" name="description" type="text" value="{{$datas->description}}"></td>
                  <td><input type="text" name="tags" value="{{$datas->tag}}"></td>
                  <td><input type="file" name="src"></td>
                  <td><button type="submit" class="mt-3">modifier</button></td>
                  
                </tbody>
              </table>
            </form>
</div>
@endsection

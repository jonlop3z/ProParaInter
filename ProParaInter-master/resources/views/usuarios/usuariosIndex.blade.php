@extends('layouts.app')

@section('content')
  <div class="jumbotron">
    <h1 class="display-3">Usuarios</h1>
    <div class="col-md-10 offset-md-2">
          <table class="table" >
            <thead class="thead-inverse">
              <tr>
                <th>Nombre</th>
                <th>Correo</th>
              </tr>
            </thead>
            <tbody>
              @foreach($usuarios as $usuario);
                <tr>
                  <td><a href={{action('UserController@show',$usuario->id)}} target="_self">{{$usuario->name}}</a></td>
                  <td>{{$usuario->email}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
      </div>
  </div>
@endsection
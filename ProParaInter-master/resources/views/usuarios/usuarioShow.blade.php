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
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            </tbody>
          </table>
      </div>
  </div>
@endsection
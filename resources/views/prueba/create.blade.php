@extends('layout.layout')
@section('content')
<form action="{{route('pruebas.store')}}" method="post" class="col-7 d-flex flex-column align-items-center">
  @csrf
    <h3>Create Section</h3>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
      <input type="text" id="nombre" name="nombre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text">Descripcion</span>
      <textarea class="form-control" aria-label="With textarea" id="descripcion" name="descripcion"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-info ">Subir</button>
  </form>
@endsection
@extends('layout.layout')
@section('content')
<form action="{{ route('pruebas.update',['prueba' => $prueba->id]) }}" method="POST" class="col-7 d-flex flex-column align-items-center">
  @csrf
  @method('PUT')
  <h3>Edit Section</h3>
  <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
      <input type="text" id="nombre" value="{{ $prueba->nombre ?? 'Not found'}}" name="nombre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  </div>
  <div class="input-group mb-3">
      <span class="input-group-text">Descripcion</span>
      <textarea class="form-control" aria-label="With textarea" id="descripcion" name="descripcion" rows="3" 
      required>{{ $prueba->descripcion ?? 'Not found'}}</textarea>
  </div>
    <button type="submit" class="btn btn-outline-info">Update</button>
  </form>
@endsection
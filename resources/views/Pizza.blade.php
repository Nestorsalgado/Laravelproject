@extends('layout')
@section('contenido')
<div class="container">
    <form action="{{route('guarda')}}" method="POST">
        @csrf
    <div class="mb-3">
        <label class="form-label">Nombre cliente:</label>
        <input name="namePersona" id="namePersona" type="string" class="form-control" >
        
    </div>


    <div class="mb-3">
        <label  class="form-label">Nombre Pizza</label>
        <input name="namePizza"  id="namePizza"  type="string" class="form-control" >
    </div>

    <div class="mb-3">
        <label  class="form-label">Tamaño</label>
        <input name="Tamano"  id="Tamano" type="string" class="form-control" >
    </div>

    <div class="mb-3">
        <label  class="form-label">Nombre Pizza</label>
        <input name="direccion" id="direccion" type="string" class="form-control" >
    </div>




    <button type="submit" class="btn btn-primary">pedido</button>
    </form>
</div>

@endsection

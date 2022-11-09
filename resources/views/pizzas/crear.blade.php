@extends('layout')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <p><b>Nombre: </b>{{ $pizza->name }}</p>
                <p><b>Descripción: </b>{{ $pizza->details }}</p>
                <p><b>Precio: </b>{{ $pizza->price }}</p>
                <a href="{{ route('principal') }}" class="btn btn-outline-secondary">Regresar a la lista</a>
            </div>
        </div>
    </div>
@endsection
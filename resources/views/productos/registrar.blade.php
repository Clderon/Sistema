@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Registrar Producto</h1>
@stop

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            {{-- <strong>Hubo errores en los datos:</strong> --}}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
        

    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong> {{ Session::get('success') }}  </strong>
        </div>
    @endif


    <h1 class="text-center text-capitalize"> registrar productos</h1>
    

    <form action="{{route('productos.store')}}" method="POST" autocomplete="off">
        @csrf

        <div class="row ">
            <x-adminlte-input name="nombre" label="Nombre: " placeholder="Nombre del Producto"
                fgroup-class="col-md-6" disable-feedback />
        </div>
    
        <div class="row">
            <x-adminlte-input name="precio" label="Precio: " placeholder="Precio del Producto"
                fgroup-class="col-md-6" disable-feedback />
        </div>
    
        <x-adminlte-button class="btn-flat " type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
    </form>


@stop

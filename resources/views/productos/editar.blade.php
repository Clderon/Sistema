@extends('adminlte::page')

@section('title', 'Editar Productos')

@section('content_header')
    <h1 class="m-0 text-dark">Editar  Producto</h1>
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


    <h1 class="text-center text-capitalize"> Editar productos</h1>
    

    <form action="{{route('productos.update', $producto)}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        <div class="row ">
            <x-adminlte-input name="nombre" label="Nombre: " placeholder="Nombre del Producto"
            fgroup-class="col-md-6" disable-feedback
            value='{{$producto->nombre}}'/>
        </div>
    
        <div class="row">
            <x-adminlte-input name="precio" label="Precio: " placeholder="Precio del Producto"
                fgroup-class="col-md-6" disable-feedback
                value='{{$producto->precio}}'/>
        </div>
    
        <x-adminlte-button class="btn-flat " type="submit" label="update" theme="success" icon="fas fa-lg fa-save"/>
    </form>


@stop

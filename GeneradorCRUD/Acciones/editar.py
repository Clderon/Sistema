def generar_contenido_editar(nombre_tabla, atributos_tabla):
    # Construir el contenido del archivo editar.blade.php
    campos = ""
    for atributo in atributos_tabla:
        campos += f"            <x-adminlte-input name='{atributo}' label='{atributo.capitalize()}: ' placeholder='Ingrese {atributo.capitalize()} del Producto' fgroup-class='col-md-6' disable-feedback value='{{${nombre_tabla}->{atributo}}}'/>\n"
    
    contenido = f"""@extends('adminlte::page')

@section('title', 'Editar Productos')

@section('content_header')
    <h1 class="m-0 text-dark">Editar {nombre_tabla}</h1>
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

    <h1 class="text-center text-capitalize"> Editar {nombre_tabla}</h1>

    <form action="{{route('{nombre_tabla}.update', ${nombre_tabla})}}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        <div class="row">
{campos}
        </div>
        <x-adminlte-button class="btn-flat" type="submit" label="Actualizar" theme="success" icon="fas fa-lg fa-save"/>
    </form>

@stop
"""
    return contenido

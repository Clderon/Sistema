def generar_contenido_registrar(nombre_tabla, atributos_tabla):
    # Construir el formulario de registro basado en los atributos de la tabla
    campos = ""

    for atributo in atributos_tabla:
        campos += f"""
        <div class="row">
            <x-adminlte-input name="{atributo}" label="{atributo.capitalize()}: " placeholder="{atributo.capitalize()} del {nombre_tabla}"
                fgroup-class="col-md-6" disable-feedback />
        </div>"""

    contenido = f"""@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Registrar {nombre_tabla.capitalize()}</h1>
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

    <h1 class="text-center text-capitalize">Registrar {nombre_tabla.capitalize()}</h1>

    <form action="{{route('{nombre_tabla}.store')}}" method="POST" autocomplete="off">
        @csrf

        {campos}

        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
    </form>

@stop
"""

    return contenido

def generar_contenido_listar(nombre_tabla, atributos_tabla):
    # Construir las cabeceras de la tabla basadas en los atributos de la tabla
    cabeceras = ""
    celdas = ""

    for atributo in atributos_tabla:
        cabeceras += f"                <th scope='col' class='text-center'>{atributo}</th>\n"
        celdas += f"                <td>{{${nombre_tabla}->{atributo}}}</td>\n"
    
    contenido = f"""@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center m-4">Listar {nombre_tabla} </h1>
@stop

@section('content')

    <table class="table table-bordered container mt-4">
        <caption>Información de {nombre_tabla}</caption>
        <thead>
            <tr>
{cabeceras}
            </tr>
        </thead>
        
        <tbody>
            @foreach (${nombre_tabla}->all() as ${nombre_tabla})
            <tr>
{celdas}
                <td class="text-center" style="display: flex; justify-content: center; gap: 20px">
                    <a href="{{ route('{nombre_tabla}.edit', ${nombre_tabla}) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('{nombre_tabla}.destroy', ${nombre_tabla}) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="display: flex; justify-content: center">
        {{ ${nombre_tabla}->links()}}
    </div>
@stop
"""
    return contenido

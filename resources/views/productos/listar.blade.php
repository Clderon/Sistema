@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark text-center m-4">Listar Productos</h1>
@stop

@section('content')

    <table class="table table-bordered container mt-4">
        <caption>Información de Productos</caption>
        <thead>
            <tr>
                <th scope="col" class="text-center">Producto</th>
                <th scope="col" class="text-center">Precio</th>
                <th scope="col" class="text-center">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos->all() as $producto)
                <tr>
                
                    <td> {{$producto->nombre}} </td>
                    <td> {{$producto->precio}} </td>

                    <td class="text-center" style="display: flex; justify-content: center; gap: 20px">

                        <a href=" {{route('productos.edit', $producto)}}" class="btn btn-primary">Editar</a>

                        <form action="{{ route('productos.destroy', $producto) }}" method="POST">
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
        {{ $productos->links()}}
    </div>
@stop

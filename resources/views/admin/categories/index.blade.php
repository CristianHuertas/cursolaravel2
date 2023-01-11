@extends('adminlte::page')

@section('title', 'Listado de Categorias')

@section('content_header')
    <h1>Listado de Categorias</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    @if (session('danger'))
        <div class="alert alert-danger">
            <strong>{{ session('danger') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href="{{ route('admin.categories.create') }}">Crear Categoria</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">

                <head>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </head>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('admin.categories.edit', $category) }}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@stop

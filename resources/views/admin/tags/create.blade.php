@extends('adminlte::page')

@section('title', 'Crear Etiqueta')

@section('content_header')
    <h1>Crear Etiqueta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.tags.store']) !!}
            <div class="form-group
                    {!! $errors->has('name') ? 'has-error' : '' !!}">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta']) !!}
                {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group">
                {!! Form::label('slug', 'slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Se-muestra-el-slug-de-la-etiqueta' , 'readonly']) !!}
            </div>


            {!! Form::submit('Crear Etiqueta', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop

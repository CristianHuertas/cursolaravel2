@extends('adminlte::page')

@section('title', 'Crear Post')

@section('content_header')
    <h1>Crear Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off']) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}



            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group">

                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese el slug del post',
                    'readonly',
                ]) !!}

                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group">
                {!! Form::label('category_id', 'Categoría') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                <br>
                @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">

                {{-- {!! Form::label('tags', 'Etiquetas') !!} --}}
                <p class="font-weight-bold">Etiquetas</p>

                @foreach ($tags as $tag)
                    <label class="mr-2">
                        {!! Form::checkbox('tags[]', $tag->id, null) !!}
                        {{ $tag->name }}
                    </label>
                @endforeach
                
                @error('tags')
                <br>
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                {{-- {!! Form::select('tags', $tags, null, ['class' => 'form-control', 'multiple']) !!} --}}
            </div>


            <div class="form-group">

                {!! Form::label('extract', 'Extracto') !!}
                {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
                @error('extract')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
            </div>


            <div class="form-group">

                {!! Form::label('body', 'Cuerpo del post') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                
                @error('body')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>

            </div>

            <div class="form-group">
                <p class="font-weight-bold">Estado</p>
                <label>
                    {!! Form::radio('status', 1, true) !!}
                    Borrador
                </label>
                <label>
                    {!! Form::radio('status', 2, false) !!}
                    Publicado
                </label>

            </div>

            <div class="form-group">

                {!! Form::label('file', 'Imagen') !!}
                {!! Form::file('file', ['class' => 'form-control-file']) !!}

            </div>

            <div class="form-group">

                {{-- {!! Form::submit('Crear Post', ['class' => 'btn btn-primary']) !!} --}}
                <button type="submit" class="btn btn-primary">Crear Post</button>
            </div>

            {!! Form::close() !!}



            {{--  <form action="{{ route('admin.posts.create') }}" method="POST">
                @csrf
                <div class="form-group">

                    <label for="name">Nombre:</label>
                    <br>
                    <input type="text" name="name" id="name" placeholder="ingrese el nombre del post">
                </div>

            </form> --}}

        </div>

    </div>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#extract'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });

        // Jquery
        $(document).ready(function() {
            $('#name').keyup(function() {
                $('#slug').val($(this).val().toLowerCase());
            });
        });
    </script>
@stop

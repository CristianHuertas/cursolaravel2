<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta']) !!}

    @error('name')
        <div class="alert alert-danger mt-3">
            <strong>{{ $message }}</strong>
        </div>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('slug', 'slug') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Se-muestra-el-slug-de-la-etiqueta',
        'readonly',
    ]) !!}

    @error('slug')
        <div class="alert alert-danger mt-3">
            <strong>{{ $message }}</strong>
        </div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('color', 'Color') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}

    @error('color')
        <div class="alert alert-danger mt-3">
            <strong>{{ $message }}</strong>
        </div>
    @enderror
</div>
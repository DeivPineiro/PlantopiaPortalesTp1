@extends('layouts.admin')

@section('title', 'Crear noticia')

@section('content')

    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css') ?>">

    <h1>Crear nueva noticia.</h1>

    @if ($errors->any())
        
            <p class="text-danger m-4">Error en la carga, revise datos ingresados.</p>
        
    @endif

    <div class="container p-4">

        <form action="{{ url('/admin/noticias/crear') }}" method="POST">

            @csrf {{-- Token de seguridad para evitar peticiones de otro sitio --}}

            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" id="titulo" name="titulo" class="form-control">

            @if($errors->has('titulo'))
            <p class="text-danger">{{$errors->first('titulo')}}</p>
            @endif

            <label for="subTitulo" class="form-label">Sub titulo</label>
            <input type="text" id="subTitulo" name="subTitulo" class="form-control">

            @if($errors->has('subTitulo'))
            <p class="text-danger">{{$errors->first('subTitulo')}}</p>
            @endif

            <label for="parrafo" class="form-label">Parrafo</label>
            <textarea name="parrafo" id="parrafo" class="form-control"></textarea>

            @if($errors->has('parrafo'))
            <p class="text-danger">{{$errors->first('parrafo')}}</p>
            @endif

            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" id="imagen" name="imagen" class="form-control">

            @if($errors->has('imagen'))
            <p class="text-danger">{{$errors->first('imagen')}}</p>
            @endif

            <label for="editor" class="form-label">Editor</label>
            <input type="text" id="editor" name="editor" class="form-control">

            @if($errors->has('editor'))
            <p class="text-danger">{{$errors->first('editor')}}</p>
            @endif

            <label for="fecha_creacion" class="form-label">fecha creación</label>
            <input type="text" id="fecha_creacion" name="fecha_creacion" class="form-control">

            @if($errors->has('fecha_creacion'))
            <p class="text-danger">{{$errors->first('fecha_creacion')}}</p>
            @endif

            <label for="publicado" class="form-label">Publicado</label>
            <input type="text" id="publicado" name="publicado" class="form-control">

            @if($errors->has('publicado'))
            <p class="text-danger">{{$errors->first('publicado')}}</p>
            @endif

            <button type="submit" class="btn btn-primary my-4">Crear noticia</button>

        </form>

    </div>
@endsection

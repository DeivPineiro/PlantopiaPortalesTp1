@extends('layouts.admin')

@section('title', 'Editar: ' . $new->titulo)

@section('content')

    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css') ?>">

    <h1 class="text-center p-3">Editar noticia Id: {{ $new->news_id }}</h1>
    <h2 class="text-center p-3">titulo: {{ Str::limit($new->titulo, 20, '...') }}</h2>

    @if ($errors->any())
        <p class="text-danger m-4">Error en la carga, revise datos ingresados.</p>
    @endif

    <div class="container p-4">

        <form action="{{ url('/admin/noticias/' . $new->news_id . '/editar') }}" method="POST">

         
            @csrf {{-- Token de seguridad para evitar peticiones de otro sitio --}}

{{-- titulo --}}

            <label for="titulo" class="form-label">Titulo</label>
            <input 
            type="text" 
            id="titulo" 
            name="titulo" 
            class="form-control @error('titulo') is-invalid @enderror"
            value="{{ old('titulo', $new->titulo) }}"
            @error('titulo')
            aria-describedby="error-titulo"
            aria-invalid="true"
            @enderror
            >

            @if($errors->has('titulo'))
            <p class="text-danger" id="error-titulo">{{$errors->first('titulo')}}</p>
            @endif

{{-- Subtitulo --}}

            <label for="subTitulo" class="form-label">Sub titulo</label>
            <input 
            type="text" 
            id="subTitulo" 
            name="subTitulo" 
            class="form-control @error('subTitulo') is-invalid @enderror"
            value="{{ old('subTitulo', $new->subTitulo) }}"
            @error('subTitulo')
            aria-describedby="error-subTitulo"
            aria-invalid="true"
            @enderror
            >

            @if($errors->has('subTitulo'))
            <p class="text-danger" id="error-subTitulo">{{$errors->first('subTitulo')}}</p>
            @endif

{{-- parrafo --}}

            <label for="parrafo" class="form-label">Parrafo</label>
            <textarea 
            name="parrafo" 
            id="parrafo" 
            class="form-control @error('parrafo') is-invalid @enderror"  
            @error('parrafo')
                aria-describedby="error-parrafo"
                aria-invalid="true"
                @enderror                   
            >{{old('parrafo', $new->parrafo)}}</textarea>

            @if($errors->has('parrafo'))
            <p class="text-danger" id="error-parrafo">{{$errors->first('parrafo')}}</p>
            @endif

{{-- Imagen --}}

            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" id="imagen" name="imagen" class="form-control">

            @if($errors->has('imagen'))
            <p class="text-danger" id="error-imagen">{{$errors->first('imagen')}}</p>
            @endif

{{-- editor --}}

            <label for="editor" class="form-label">Editor</label>
            <input 
            type="text" 
            id="editor" 
            name="editor" 
            class="form-control @error('editor') is-invalid @enderror"
            value="{{old('editor', $new->editor)}}"
            @error('editor')
            aria-describedby="error-editor"
            aria-invalid="true"
            @enderror
            >

            @if($errors->has('editor'))
            <p class="text-danger" id="error-editor">{{$errors->first('editor')}}</p>
            @endif

{{-- fecha_creacion --}}

            <label for="fecha_creacion" class="form-label">fecha creación</label>
            <input 
            type="text" 
            id="fecha_creacion" 
            name="fecha_creacion" 
            class="form-control @error('fecha_creacion') is-invalid @enderror"
            value="{{old('fecha_creacion', $new->fecha_creacion)}}">

            @if($errors->has('fecha_creacion'))
            <p class="text-danger" id="error-fecha_creacion">{{$errors->first('fecha_creacion')}}</p>
            @endif

{{-- Publicado --}}

            <label for="publicado" class="form-label">Publicado</label>
            <input 
            type="text" 
            id="publicado" 
            name="publicado" 
            class="form-control"
            value="{{old('publicado', $new->publicado)}}"
            >
            
            @if($errors->has('publicado'))
            <p class="text-danger" id="error-publicado">{{$errors->first('publicado')}}</p>
            @endif

            <button type="submit" class="btn btn-primary my-4">Editar</button>

        </form>

    </div>
@endsection

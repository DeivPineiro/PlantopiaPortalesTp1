@extends('layouts.admin')

@section('title', 'Crear noticia')

@section('content')

    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css') ?>">



    <h1>Crear nueva noticia.</h1>

    @if ($errors->any())
        <p class="text-danger m-4">Error en la carga, revise datos ingresados.</p>
    @endif

    <div class="container p-4">

        <form action="{{ url('/admin/noticias/crear') }}" method="POST" enctype="multipart/form-data">

            @csrf {{-- Token de seguridad para evitar peticiones de otro sitio --}}

            {{-- titulo --}}

            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" id="titulo" name="titulo" class="form-control @error('titulo') is-invalid @enderror"
                value="{{ old('titulo') }}"
                @error('titulo')
            aria-describedby="error-titulo"
            aria-invalid="true"
            @enderror>

            @if ($errors->has('titulo'))
                <p class="text-danger" id="error-titulo">{{ $errors->first('titulo') }}</p>
            @endif

            {{-- Subtitulo --}}

            <label for="subTitulo" class="form-label">Sub titulo</label>
            <input type="text" id="subTitulo" name="subTitulo"
                class="form-control @error('subTitulo') is-invalid @enderror" value="{{ old('subTitulo') }}"
                @error('subTitulo')
            aria-describedby="error-subTitulo"
            aria-invalid="true"
            @enderror>

            @if ($errors->has('subTitulo'))
                <p class="text-danger" id="error-subTitulo">{{ $errors->first('subTitulo') }}</p>
            @endif

            {{-- parrafo --}}

            <label for="parrafo" class="form-label">Parrafo</label>
            <textarea name="parrafo" id="parrafo" class="form-control @error('parrafo') is-invalid @enderror"
                @error('parrafo')
                aria-describedby="error-parrafo"
                aria-invalid="true"
                @enderror>{{ old('parrafo') }}</textarea>

            @if ($errors->has('parrafo'))
                <p class="text-danger" id="error-parrafo">{{ $errors->first('parrafo') }}</p>
            @endif

            {{-- img --}}

            <label for="img" class="form-label">img</label>
            <input type="file" id="img" name="img" class="form-control">

            @if ($errors->has('img'))
                <p class="text-danger" id="error-img">{{ $errors->first('img') }}</p>
            @endif


            {{-- descripcion Img --}}

            <label for="descripcion_img" class="form-label">Descripción imagen</label>
            <input type="text" id="descripcion_img" name="descripcion_img"
                class="form-control @error('descripcion_img') is-invalid @enderror" value="{{ old('descripcion_img') }}"
                @error('descripcion_img')
            aria-describedby="error-descripcion_img"
            aria-invalid="true"
            @enderror>

            @if ($errors->has('descripcion_img'))
                <p class="text-danger" id="error-descripcion_img">{{ $errors->first('descripcion_img') }}</p>
            @endif

            {{-- editor --}}

            <label for="editor" class="form-label">Editor</label>
            <input type="text" id="editor" name="editor" class="form-control @error('editor') is-invalid @enderror"
                value="{{ old('editor') }}"
                @error('editor')
            aria-describedby="error-editor"
            aria-invalid="true"
            @enderror>

            @if ($errors->has('editor'))
                <p class="text-danger" id="error-editor">{{ $errors->first('editor') }}</p>
            @endif

            {{-- Topico --}}

            <label for="topico_id" class="form-label">Topico</label>
            <select name="topico_id" id="topico_id" class="form-control">

                @foreach ($topico as $t)
                    <option value="{{ $t->topico_id }}" @if (old('topico_id') == $t->topico_id) selected @endif>

                        {{ $t->nombre }}

                    </option>
                @endforeach


            </select>

          
            {{-- fecha_creacion --}}

            <label for="fecha_creacion" class="form-label">fecha creación</label>
            <input type="date" id="fecha_creacion" name="fecha_creacion"
                class="form-control @error('fecha_creacion') is-invalid @enderror" value="{{ old('fecha_creacion') }}">

            @if ($errors->has('fecha_creacion'))
                <p class="text-danger" id="error-fecha_creacion">{{ $errors->first('fecha_creacion') }}</p>
            @endif

            {{-- Publicado --}}

            <label for="publicado" class="form-label">Publicado</label>
            <input type="text" id="publicado" name="publicado" class="form-control" value="{{ old('publicado') }}">

            @if ($errors->has('publicado'))
                <p class="text-danger" id="error-publicado">{{ $errors->first('publicado') }}</p>
            @endif

            <button type="submit" class="btn btn-primary my-4">Crear noticia</button>

        </form>

    </div>
@endsection

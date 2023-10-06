@extends('layouts.admin')

@section('title', 'Crear noticia')

@section('content')

<link rel="stylesheet" href="<?= url('css/bootstrap.min.css') ?>">
<div class="container p-4">
    <form action="{{url ('/admin/noticias/crear')}}" method="POST">
        
@csrf {{-- Token de seguridad para evitar peticiones de otro sitio --}}

        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" id="titulo" name="titulo" class="form-control">

        <label for="subtitulo" class="form-label">Sub titulo</label>
        <input type="text" id="subtitulo" name="subtitulo" class="form-control">

        <label for="parrafo" class="form-label">Parrafo</label>
        <textarea name="parrafo" id="parrafo" class="form-control"></textarea>

        <label for="imagen" class="form-label">Imagen</label>
        <input type="file" id="imagen" name="imagen" class="form-control">

        <label for="editor" class="form-label">Editor</label>
        <input type="text" id="editor" name="editor" class="form-control">

        <label for="fecha" class="form-label">fecha creación</label>
        <input type="date" id="fecha" name="fecha" class="form-control">

        <button type="submit" class="btn btn-primary">Crear noticia</button>

    </form>
</div>
@endsection

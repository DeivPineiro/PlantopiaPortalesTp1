@extends('layouts.main')

@section('titulo', 'Eliminar la noticia: ' . $new->titulo)

@section('content')

<link rel="stylesheet"  href="<?= url('css/bootstrap.min.css') ?>">

<article>
    <h1 class="mb-3">Eliminar la noticia {{ $new->titulo }}</h1>

    <p class="mb-3">Estás por eliminar la siguiente noticia:</p>

    <div class="row mb-2">
        <div class="col-8">
            <dl>
                <dt>Titulo</dt>
                <dd>{{ $new->titulo }}</dd>
                <dt>Subtitulo</dt>
                <dd> {{ $new->subtitulo }}</dd>
            </dl>
        </div>
        <div class="col-4">

        </div>
    </div>

    <h2>Parrafo</h2>

    <div class="mb-3">{{ $new->parrafo }}</div>

    <hr>

    <h2>Confirmar Eliminación</h2>
    <form action="{{ url('/admin/noticias/' . $new->news_id . '/eliminar') }}" method="POST" class="form-delete">
        @csrf
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</article>
@endsection
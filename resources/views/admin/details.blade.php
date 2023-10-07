@extends('layouts.admin')
@section('title', $new->titulo)

@section('content')

<link rel="stylesheet" href="<?= url('css/bootstrap.min.css') ?>">

    <div class="container">

        <h1 class="text-center pb-5">Detalles noticia: </h1>

        <div class="row">

            <p>Editor: {{ $new->editor }}</p>

            <p>Fecha de publicación: {{ $new->fecha_creacion }}</p>

            <p>Publicado: {{ $new->publicado }}</p>

            <h2 class="text-center pb-4">{{ $new->titulo }}</h2>

            <h3 class="container p-4">{{ $new->subTitulo }}</h3>

            <p>{{ $new->parrafo }}</p>

            <div>

                {{-- php artisan storage:link  1:20:00 clase 7--}}
                @if($new->img)
                
                <img src="{{url('storage/'. $new->img)}}" alt="{{$new->descripcion_img}}">
                                    
                @else
                
                <p>Noticia no tiene imagen cargada</p>

                @endif
                {{-- image.intervention.io --}}
            </div>

        </div>

    @endsection

</div>

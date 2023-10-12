@extends('layouts.main')
@section('title', 'Noticias')

@section('content')

<div class="container">

<h1 class="text-center pb-5">Noticias</h1>

<div class="row">


@foreach ($news as $n)

<?php if($n->publicado == 1)
{?>



<h2 class="text-center pb-4">{{$n->titulo}}</h2>

<h3 class="container p-4">{{$n->subTitulo}}</h3>

<p>{{$n->parrafo}}</p>

<div>

    {{-- php artisan storage:link  1:20:00 clase 7--}}
    @if($n->img)
    
    <img src="{{url('storage/'. $n->img)}}" alt="{{$n->descripcion_img}}" class="img-fluid">
                        
    @else
    
    <p>Noticia no tiene imagen cargada</p>

    @endif
    {{-- image.intervention.io --}}
</div>

<?php } ?>
@endforeach

</div>

@endsection

</div>




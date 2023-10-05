@extends('layouts.admin')
@section('title', 'Administrar Noticias')
@section('content')

    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css') ?>">

    <h1>Administrador</h1>

    <table class="container table table-bordered table-striped p-4">
        <thead>

            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Sub Título</th>
                <th>Párrafo</th>
                <th>Img</th>
                <th>Fecha Creación</th>
                <th>Editor</th>
                <th>Publicado</th>
                <th>Acciones</th>

            </tr>

        </thead>
        <tbody>

           @foreach($news as $n)

            <tr>
                <td>{{$n->news_id  }}</td>
                <td>{{$n->titulo  }}</td>
                <td>{{$n->subTitulo  }}</td>
                <td>{{$n->parrafo  }}</td>
                <td>{{$n->img  }}</td>
                <td>{{$n->fecha_creacion  }}</td>
                <td>{{$n->editor  }}</td>
                <td>{{$n->publicado}}</td>
                <td></td>
            </tr>

           @endforeach

        </tbody>
    </table>

@endsection

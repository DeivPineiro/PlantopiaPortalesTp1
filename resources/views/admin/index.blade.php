@extends('layouts.admin')
@section('title', 'Administrar Noticias')
@section('content')

    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css') ?>">

    <h1 class="m-4">Administrador</h1>




    <table class="container table table-bordered table-striped m-5">
        <thead>

            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Sub Título</th>
                <th>Párrafo</th>
                <th>Img</th>
                <th>Topico</th>
                <th>Fecha Creación</th>
                <th>Editor</th>
                <th>Publicado</th>
                <th>Ver más</th>
                <th>Acciones</th>

            </tr>

        </thead>
        <tbody>

            @foreach ($news as $n)
                <tr>
                    <td>{{ $n->news_id }}</td>
                    <td>{{ $n->titulo }}</td>
                    <td>{{ $n->subTitulo }}</td>
                    <td>{{ Str::limit($n->parrafo, 30, '...') }}</td>
                    <td>{{ $n->img }}</td>
                    <td>{{ $n->topico->nombre }}</td>
                    <td>{{ $n->fecha_creacion }}</td>
                    <td>{{ $n->editor }}</td>
                    <td>{{ $n->publicado }}</td>
                    <td><a href="{{ url('/admin/noticias/' . $n->news_id) }}" class="btn btn-primary">...</a></td>
                    <td>

                        {{-- editar --}}

                        <a href="{{ url('/admin/noticias/' . $n->news_id . '/editar') }}"
                            class="btn btn-secondary m-1 d-block">Editar</a>

                        <a href="{{ url('/admin/noticias/' . $n->news_id . '/eliminar') }}"
                            class="btn btn-danger m-1 d-block">Eliminar</a>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <a class="m-4 " href="{{ url('/admin/noticias/crear') }}">Crear nueva noticia</a>
@endsection

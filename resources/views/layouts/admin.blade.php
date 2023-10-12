<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title> @yield('title') :: Administracion</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= url('/') ?>">Plantopía</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= url('/') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url('/noticias') ?>">Noticias</a>
                </li>

                @auth

                @if(Auth::user()->editor == 1)

                <li class="nav-item">
                    <a class="nav-link" href="<?= url('/admin/noticias') ?>">Administrador</a>
                </li>
                
                @endif
                @endauth

                @auth

                    <li class="nav-item">
                        <form action="<?= url('/logOut') ?>" method="post">
                            @csrf
                            <button type="submit" class="btn">Cerrar Sesión</button>
                        </form>
                    </li>

                @else

                    <li class="nav-item">
                        <a class="nav-link" href="<?= url('/logIn') ?>">Iniciar sesión</a>
                    </li>

                @endauth


            </ul>
        </div>
    </div>
</nav>


<main>
  @if(\Session::has('status.message'))

  <div class="alert alert-success">{!! \Session::get('status.message') !!}</div>

  @endif
  
@yield('content')

</main>


</body>
</html>
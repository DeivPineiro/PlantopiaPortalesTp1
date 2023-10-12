@extends('layouts.main')

@section('title', 'LogIn')

@section('content')

    <h1>Iniciar sesión</h1>

    <div class="container">

        <form action="{{ url('/logIn') }}" method="POST" enctype="multipart/form-data">

            @csrf {{-- Token de seguridad para evitar peticiones de otro sitio --}}

            {{-- Email usuario --}}
           

            <label for="email" class="form-label">Email usuario</label>
            <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" @error('email')
                aria-describedby="error-email"
                aria-invalid="true"
                @enderror>

            @if ($errors->has('email'))
                <p class="text-danger" id="error-email">{{ $errors->first('email') }}</p>
            @endif

            {{-- password --}}

            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password"
                class="form-control @error('password') is-invalid @enderror" 
                @error('password')
                aria-describedby="error-password"
                aria-invalid="true"
                @enderror>

            @if ($errors->has('password'))
                <p class="text-danger" id="error-password">{{ $errors->first('password') }}</p>
            @endif

            <button type="submit" class="btn btn-primary my-4">Ingresar</button>


        </form>

    </div>
@endsection

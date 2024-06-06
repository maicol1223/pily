@extends('layouts.applogin')

@section('title', 'Login')
@section('content')

<!-- Bootstrap CSS v5.2.1 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
<link rel="stylesheet" href="{{ asset('backend/dist/css/estilo.css') }}">

<style>
    .gradient-custom-2 {
    /* fallback for old browsers */
    background:  #980f00;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(
        to right,
        #1767f0,
        #3408e6,
        #f82e18d4,
        #27ddeef0
    );

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, #1767f0,#3408e6,);
}

@media (min-width: 768px) {
    .gradient-form {
        height: 100vh !important;
    }
}
@media (min-width: 769px) {
    .gradient-custom-2 {
        border-top-right-radius: 0.3rem;
        border-bottom-right-radius: 0.3rem;
    }
}
.color-on-hover:hover {
    color: red; /* Cambia "red" por el color que desees */
}
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card rounded-3 text-black">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
                            <div class="text-center">
                                <img src="{{ asset('backend/dist/img/logoimage.jpg') }}" style="width: 185px; border-radius: 50%;" alt="logo">
                            </div>
                            <br>
                            <h4 class="mt-3 mb-4 pb-1 text-center" style="font-size: 1.5em;">Iniciar Sesión</h4>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Correo</label>
                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required placeholder="Email" autocomplete="email" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password">Contraseña</label>
                                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required placeholder="Password" autocomplete="New-Password" />

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="text-center pt-1 mb-5 pb-1">
                                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Iniciar Sesión</button>
                                    <p class="mb-1">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link shadow-on-hover" href="{{ route('password.request') }}" style="color: inherit; text-decoration: none;">
                                            <span class="color-on-hover">{{ __('Olvidé mi contraseña') }}</span>
                                        </a>
                                        @endif
                                    </p>
                                </div>

                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <p class="mb-0 me-2">¿No tienes cuenta?</p>
                                    <a href="{{ route('register') }}" class="btn btn-outline-danger">Crear Cuenta</a>
                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                            <h4 class="mb-4">¡Bienvenidos a PILY 90 GRADOS !  DONDE PODRAS ENCONTRAR EL MEJOR CALZADO DE OCAÑA</h4>
                            <p class="small mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

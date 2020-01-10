@extends('layouts/main')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="shadow p-5 -form">
        @alert
            @foreach ($errors->all() as $message)
                {{ $message }}
            @endforeach
        @endalert
        <h3 class="text-center mb-3">Crea una cuenta</h3>
        <form method="POST" action="/signup">
            @csrf
             <div class="form-group">
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Nombre"
                />
            </div>
            <div class="form-group">
                <input
                    type="text"
                    name="last_name"
                    class="form-control"
                    placeholder="Apellidos"
                />
            </div>
            <div class="form-group">
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Correo electronico"
                />
            </div>
            <div class="form-group">
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Contraseña"
                />
            </div>
            <button type="submit" class="btn btn-block btn-success">
                Crear cuenta
            </button>
        </form>
        <div class="border-bottom my-4"></div>
        <div class="text-center">
            <a href="/login" class="text-decoration-none font-weight-bold">
                ¿Ya tienes una cuenta?
            </a>
        </div>
    </div>
</div>
@endsection
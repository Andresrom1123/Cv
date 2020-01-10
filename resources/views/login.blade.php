@extends('layouts/main')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="shadow p-5 -form">
        <h3 class="text-center mb-3">Inicio de sesión</h3>
        <form>
            <div class="form-group">
                <input
                    type="email"
                    class="form-control"
                    placeholder="Correo electronico"
                />
            </div>
            <div class="form-group">
                <input
                    type="password"
                    class="form-control"
                    placeholder="Contraseña"
                />
            </div>
        <button type="submit" class="btn btn-block btn-success">
            Iniciar sesion
        </button>
        </form>
        <div class="border-bottom my-4"></div>
        <div class="text-center">
            <p>¿NO ESTÁS REGISTRADO?...</p>
            <a href="/signup/create" class="text-decoration-none font-weight-bold">
                Regístrate aquí
            </a>
        </div>
    </div>
</div>
@endsection
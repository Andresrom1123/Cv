@extends('layouts/main')
@section('content')
<div class="container my-5 border shadow rounded p-3">
    <div class="d-flex">
        <div class="col-6">
            <h3>Encabezado</h3>
            <form class="row mt-3">
                <div class="form-group col-6">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group col-6">
                    <label for="lastName">Apellidos</label>
                    <input type="text" class="form-control" id="lastName">
                </div>
                <div class="form-group col-6">
                    <label for="country">Pais</label>
                    <input type="text" class="form-control" id="country">
                </div>
                <div class="form-group col-6">
                    <label for="city">Ciudad</label>
                    <input type="text" class="form-control" id="city">
                </div>
                <div class="form-group col-12">
                    <label for="street">Calle</label>
                    <input type="text" class="form-control" id="street">
                </div>
                <div class="form-group col-4">
                    <label for="cp">Código postal</label>
                    <input type="number" class="form-control" id="cp">
                </div>
                <div class="form-group col-6">
                    <label for="nt">Número de teléfono</label>
                    <input type="number" class="form-control" id="nt">
                </div>
                <div class="form-group col-6">
                    <label for="email">Dirección de correo electronico</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Continuar</button>
                </div>
            </form>
        </div>
        <div>
            123
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <a type="button" class="btn btn-primary" href="{{ route('alimento.index')}}">Regresar</a>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <h5 class="card-header text-center">Agregar Alimento</h5>
                <div class="card-body">
                    <form action="{{ route('alimento.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input type="date" id="fecha" name="fecha" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="carbohidratos">Carbohidratos:</label>
                            <input type="number" id="carbohidratos" name="carbohidratos" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="proteinas">Proteínas:</label>
                            <input type="number" id="proteinas" name="proteinas" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="grasas_saturadas">Grasas saturadas:</label>
                            <input type="number" id="grasas_saturadas" name="grasas_saturadas" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="azucares">Azúcares:</label>
                            <input type="number" id="azucares" name="azucares" class="form-control" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <a type="button" class="btn btn-primary" href="{{ route('alimento.index')}}">Regresar</a>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <h5 class="card-header text-center">Actualizar Alimento</h5>
                <div class="card-body">
                    <form action="{{ route('alimento.update', $alimento->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input type="date" id="fecha" name="fecha" class="form-control" required value="{{ $alimento->fecha }}">
                        </div>
                        <div class="form-group">
                            <label for="carbohidratos">Carbohidratos:</label>
                            <input type="number" id="carbohidratos" name="carbohidratos" class="form-control" required value="{{ $alimento->carbohidratos }}">
                        </div>
                        <div class="form-group">
                            <label for="proteinas">Proteínas:</label>
                            <input type="number" id="proteinas" name="proteinas" class="form-control" required value="{{ $alimento->proteinas }}">
                        </div>
                        <div class="form-group">
                            <label for="grasas_saturadas">Grasas saturadas:</label>
                            <input type="number" id="grasas_saturadas" name="grasas_saturadas" class="form-control" required value="{{ $alimento->grasas_saturadas }}">
                        </div>
                        <div class="form-group">
                            <label for="azucares">Azúcares:</label>
                            <input type="number" id="azucares" name="azucares" class="form-control" required value="{{ $alimento->azucares }}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

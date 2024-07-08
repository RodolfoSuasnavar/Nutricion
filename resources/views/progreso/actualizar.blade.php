@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <a type="button" class="btn btn-primary" href="{{ route('progreso.index')}}">Regresar</a>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <h5 class="card-header text-center">Actualizar Progreso</h5>
                <div class="card-body">
                    <form action="{{ route('progreso.update', $progreso->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="peso">Peso:</label>
                            <input type="number" id="peso" name="peso" class="form-control" required value="{{ $progreso->peso }}">
                        </div>
                        <div class="form-group">
                            <label for="grasa_corporal">Grasa corporal:</label>
                            <input type="number" id="grasa_corporal" name="grasa_corporal" class="form-control" required value="{{ $progreso->grasa_corporal }}">
                        </div>
                        <div class="form-group">
                            <label for="masa_muscular">Masa muscular:</label>
                            <input type="number" id="masa_muscular" name="masa_muscular" class="form-control" required value="{{ $progreso->masa_muscular }}">
                        </div>
                        <div class="form-group">
                            <label for="nivel_energetico">Nivel energetico:</label>
                            <input type="number" id="nivel_energetico" name="nivel_energetico" class="form-control" required value="{{ $progreso->nivel_energetico }}">
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

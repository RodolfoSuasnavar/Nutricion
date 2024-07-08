@extends('layouts.app')
@section('content')
<br>
<br>
<br>

<div class="card" style="margin: 0 auto; width: 80%;">
    <h5 class="card-header">Eliminar una Categoria</h5>
    <div class="card-body">
        <p class="card-text">
            <div class="alert alert-danger" role="alert"  style="margin: 0 auto; width: 80%;">
                ¿Estas seguro de eliminar este registro?

                <table class="table table-sm table-hover table-border" style="margin: 0 auto; width: 50%; background-color: white ">
                    <thead>
                        {{-- <th>id</th> --}}
                        <th>Peso</th>
                        <th>Grasa corporal</th>
                        <th>Masa muscular</th>
                        <th>Nivel energetico</th>
                    </thead>
                    <tbody>

                        <td>{{ $progreso->peso }}</td>
                        <td>{{ $progreso->grasa_corporal }}</td>
                        <td>{{ $progreso->masa_muscular }}</td>
                        <td>{{ $progreso->nivel_energetico }}</td>


                    </thead>

                </table>
                <hr>
                <form action="{{ route('progreso.destroy', $progreso->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("progreso.index") }}" class="btn btn-info"> Regresar</a>
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </p>
    </div>
</div>
@endsection

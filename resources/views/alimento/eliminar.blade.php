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
                        <th>Fecha</th>
                        <th>Carbohidratos</th>
                        <th>Proteinas</th>
                        <th>Grasas saturadas</th>
                        <th>Azucares</th>
                        <th>Total</th>
                    </thead>
                    <tbody>

                        <td>{{ $alimento->fecha }}</td>
                        <td>{{ $alimento->carbohidratos }}</td>
                        <td>{{ $alimento->proteinas }}</td>
                        <td>{{ $alimento->grasas_saturadas }}</td>
                        <td>{{ $alimento->azucares }}</td>
                        <td>{{ $alimento->total }}</td>



                    </thead>

                </table>
                <hr>
                <form action="{{ route('alimento.destroy', $alimento->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("alimento.index") }}" class="btn btn-info"> Regresar</a>
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </p>
    </div>
</div>
@endsection

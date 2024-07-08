@extends('layouts.app')

@section('content')

    <div class="card">
        <br>
        <h5 class="card-header">Alimentos </h5>
        <div class="card-body">
            <div class="row">

            </div>
            <hr>
            <p class="card-text">
                <div class="table table-responsive">
                <a type="button" class="btn btn-primary" href="{{ route('alimento.agregar')}}">Agregar un nuevo alimento</a>
                    <table style="margin: 0 auto; width: 50%;" class="table table-striped table-bordered table-hover">
                        <thead>
                            {{-- <th>id</th> --}}
                            <th>Fecha</th>
                            <th>Carbohidratos</th>
                            <th>Proteinas</th>
                            <th>Grasas saturadas</th>
                            <th>Azucares</th>
                            <th>Total</th>
                            <th>Editar</th>
                            <th>Eliminar</th>



                        </thead>
                        <tbody>
                            @foreach ($alimento as $item)
                            <tr>
                                {{-- <th>{{ $item->id }}</th> --}}
                                <th>{{ $item->fecha }}</th>
                                <th>{{ $item->carbohidratos }}</th>
                                <th>{{ $item->proteinas }}</th>
                                <th>{{ $item->grasas_saturadas }}</th>
                                <th>{{ $item->azucares }}</th>
                                <th>{{ $item->total }}</th>
                                {{-- <th>{{ $item->usuario->nombre }}</th> --}}
                                <th>
                                    <form action="{{ route('alimento.edit', $item->id) }}" method="GET">
                                        <button class="btn btn-warning btn-sm">
                                            <span class="bi bi-pencil-square">Actualizar</span>
                                        </button>
                                    </form>
                                </th>
                                <th>
                                    <form action="{{ route('alimento.show', $item->id) }}" method="GET">
                                        <button class="btn btn-danger btn-sm">
                                            Eliminar
                                        </button>
                                    </form>
                                </th>




                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </p>
        </div>
    </div>
@endsection

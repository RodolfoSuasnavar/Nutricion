@extends('layouts.app')

@section('content')

    <div class="card">
        <br>
        <h5 class="card-header">Progreso </h5>
        <div class="card-body">
            <div class="row">

            </div>
            <hr>
            <p class="card-text">
                <div class="table table-responsive">
                <a type="button" class="btn btn-primary" href="{{ route('progreso.agregar')}}">Agregar un nuevo progreso</a>
                    <table style="margin: 0 auto; width: 50%;" class="table table-striped table-bordered table-hover">
                        <thead>
                            {{-- <th>id</th> --}}
                            <th>Peso</th>
                            <th>Grasa corporal</th>
                            <th>Masa muscular</th>
                            <th>Nivel energetico</th>
                            <th>Editar</th>
                            <th>Eliminar</th>



                        </thead>
                        <tbody>
                            @foreach ($progreso as $item)
                            <tr>
                                {{-- <th>{{ $item->id }}</th> --}}
                                <th>{{ $item->peso }}</th>
                                <th>{{ $item->grasa_corporal }}</th>
                                <th>{{ $item->masa_muscular }}</th>
                                <th>{{ $item->nivel_energetico }}</th>

                                {{-- <th>{{ $item->usuario->nombre }}</th> --}}
                                <th>
                                    <form action="{{ route('progreso.edit', $item->id) }}" method="GET">
                                        <button class="btn btn-warning btn-sm">
                                            <span class="bi bi-pencil-square">Actualizar</span>
                                        </button>
                                    </form>
                                </th>
                                <th>
                                    <form action="{{ route('progreso.show', $item->id) }}" method="GET">
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

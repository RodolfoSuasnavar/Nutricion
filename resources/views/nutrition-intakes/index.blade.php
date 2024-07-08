@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nutrition Intakes') }}</div>

                    <div class="card-body">
                        <a href="{{ route('nutrition-intakes.create') }}" class="btn btn-primary mb-3">{{ __('Add Nutrition Intake') }}</a>

                        @if (count($intakes) > 0)
                            <ul class="list-group">
                                @foreach ($intakes as $intake)
                                    <li class="list-group-item">
                                        {{ $intake->date }} - Carbohydrates: {{ $intake->carbohydrates }}, Proteins: {{ $intake->proteins }}, Fats: {{ $intake->saturated_fats }}, Sugars: {{ $intake->sugars }}
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>{{ __('No nutrition intakes found.') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

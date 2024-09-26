@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row g-3">
            @foreach ($trains as $train)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li><strong>Nome Azienda:</strong> {{ $train->azienda }}</li>
                                <li><strong>Stazione di Partenza:</strong> {{ $train->stazione_di_partenza }}</li>
                                <li><strong>Stazione di Arrivo:</strong> {{ $train->stazione_di_arrivo }}</li>

                                @if ($train->orario_di_partenza > $train->orario_di_arrivo)
                                    <li><strong>Orario di Partenza:</strong>Mi dispiace, sei arrivato tardi! Il treno è già
                                        partito.</li>
                                @else
                                    <li><strong>Orario di Partenza:</strong> {{ $train->orario_di_partenza }}</li>
                                @endif
                                <li><strong>Orario di Arrivo:</strong> {{ $train->orario_di_arrivo }}</li>
                                <li><strong>Codice Treno:</strong> {{ $train->codice_treno }}</li>
                                <li><strong>Numero Carrozze:</strong> {{ $train->numero_carrozze }}</li>
                                <li><strong>In orario:</strong> {{ $train->in_orario }}</li>
                                <li><strong>Cancellato:</strong> {{ $train->cancellato }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

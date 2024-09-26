@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row g-3">
            @foreach ($trains as $train)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row">Nome Azienda</th>
                                        <td>{{ $train->azienda }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Stazione di Partenza</th>
                                        <td>{{ $train->stazione_di_partenza }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Stazione di Arrivo</th>
                                        <td>{{ $train->stazione_di_arrivo }}</td>
                                    </tr>

                                    {{-- Condizione per vedere se l'orario di partenza è maggiore rispetto all'orario di arrivo --}}
                                    @if ($train->orario_di_partenza > $train->orario_di_arrivo)
                                        <tr>
                                            <th scope="row">Orario di Partenza</th>
                                            <td>Mi dispiace, sei arrivato tardi! Il treno è già partito.</td>
                                        </tr>
                                    @else
                                        <tr>
                                            <th scope="row">Orario di Partenza</th>
                                            <td>{{ $train->orario_di_partenza }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <th scope="row">Orario di Arrivo</th>
                                        <td>{{ $train->orario_di_arrivo }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Codice Treno</th>
                                        <td>{{ $train->codice_treno }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Numero Carrozze</th>
                                        <td>{{ $train->numero_carrozze }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">In Orario</th>
                                        <td>
                                            {{-- Condizione che verifica se la corsa è stata cancellata. In questo caso il campo IN ORARIO si svuota --}}
                                            @if ($train->cancellato == 0)
                                                @if ($train->in_orario == 1)
                                                    Si
                                                @else
                                                    No
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Cancellato</th>
                                        <td>
                                            @if ($train->cancellato == 1)
                                                Si
                                            @else
                                                No
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

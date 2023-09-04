@extends('layouts.admin')

@section('content')
    <div class="container d-flex">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between">
                    <h4>Paziente n°{{ $animal->id }}</h4>
                    <a class="btn btn-primary" href="{{ url('admin/animals') }}">Torna indietro</a>
                </div>
                <div class="card-body">
                    <div class="card-title d-flex">
                        <h3>{{ $animal->nome }}</h3>
                    </div>
                    <h6 class="card-text">Specie: <strong>{{ $animal->breed->name }}</strong></h6>
                    <p class="card-text">Malattie: <strong>{{ $animal->malattie }}</strong></p>
                    <p class="card-text">Proprietario: <strong>{{ $animal->owner->name }} {{ $animal->owner->surname }}</strong></p>
                    <p class="card-text">Vaccinazioni:</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Vaccino</th>
                                <th scope='col'>Dosaggio (mg)</th>
                                <th scope="col">Note</th>
                                <th scope="col">Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vaccinations as $item)
                                <tr>
                                    <td>{{ $item->vaccine->name }}</td>
                                    <td>{{ $item->dosage }}</td>
                                    <td>{{ $item->note }}</td>
                                    <td>{{ $item->date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ url('admin/animals/'.$animal->id.'/vaccinations/create') }}">Aggiungi vaccinazione</a>
                </div>
            </div>
        </div>
    </div>
@endsection

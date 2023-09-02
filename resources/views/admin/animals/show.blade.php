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
                    <p class="card-text">Proprietario: <strong>{{ $animal->propietario }}</strong></p>
                </div>
            </div>
        </div>
    </div>
@endsection

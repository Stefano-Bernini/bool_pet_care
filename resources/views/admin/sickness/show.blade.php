@extends('layouts.admin')

@section('content')
    <div class="container d-flex">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between">
                    <h4>Malattia n°{{ $sickness->id }}</h4>
                    <a class="btn btn-primary" href="{{ url('admin/animals') }}">Torna indietro</a>
                </div>
                <div class="card-body">
                    <div class="card-title d-flex">
                        <h3>{{ $sickness->name }}</h3>
                    </div>
                    <h6 class="card-text">Specie: <strong>{{ $sickness->diagnosis }}</strong></h6>
                    <p class="card-text">Malattie: <strong>{{ $sickness->treatment }}</strong></p>
                    <p class="card-text">Proprietario: <strong>{{ $sickness->notes }}</strong></p>
                </div>
            </div>
        </div>
    </div>
@endsection

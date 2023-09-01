@extends('layouts.admin')

@section('content')
    <div class="container d-flex">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between">
                    <h4>Proprietario n°{{ $owner->id }}</h4>
                    <a class="btn btn-primary" href="{{ url('admin/owners') }}">Torna indietro</a>
                </div>
                <div class="card-body">
                    <div class="card-title d-flex">
                        <h3>{{ $owner->name }} {{ $owner->surname }}</h3>
                    </div>
                    <p class="card-text">Indirizzo: <strong>{{ $owner->address }}</strong></p>
                    <p class="card-text">Telefono: <strong>{{ $owner->telephone }}</strong></p>
                    <p class="card-text">Email: <strong>{{ $owner->email }}</strong></p>
                </div>
            </div>
        </div>
    </div>
@endsection
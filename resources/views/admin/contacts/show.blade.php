@extends('layouts.admin')

@section('content')
    <div class="container d-flex">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between">
                    <h4>Paziente n°{{ $contact->id }}</h4>
                    <a class="btn btn-primary" href="{{ url('admin/contacts') }}">Torna indietro</a>
                </div>
                <div class="card-body">
                    <div class="card-title d-flex">
                        <h3>Richiesta n°{{ $contact->id }}</h3>
                    </div>
                    <h6 class="card-text">Nome: <strong>{{ $contact->name }}</strong></h6>
                    <p class="card-text">Cognome: <strong>{{ $contact->last_name }}</strong></p>
                    <p class="card-text">Email: <strong>{{ $contact->email }}</strong></p>
                    <p class="card-text">Oggetto: <strong>{{ $contact->object }}</strong></p>
                    <p class="card-text">Messaggio: <strong>{{ $contact->message }}</strong></p>
                    <p class="card-text">Data Messaggio: <strong>{{ $contact->created_at }}</strong></p>
                </div>
            </div>
        </div>
    </div>
@endsection

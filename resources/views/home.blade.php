@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3 text-center">
        <div class="container py-5 text-center">
            <h1 class="display-5 fw-bold text-center">
                Benvenuti su BoolPetCare!
            </h1>

            <p class="display-5 fw fs-4 text-center">BoolPetCare è il gestionale per la vostra Clinica Veterinaria realizzato in  Bootstrap 5<br> e Laravel 9.2 include Laravel
                breeze e blade.</p>
            
        </div>
    </div>

    <div class="content">
        <div class="container text-center">
            <img src="{{ url('/img/animali_affezione.jpg') }}" alt="animal">
        </div>
    </div>
@endsection


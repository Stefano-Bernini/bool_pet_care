@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-12">
                <h1>Aggiungi un nuovo Proprietario</h1>

            </div>
            <div class="col-12 mt-5">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-12">
                <form action="{{ route('admin.owners.store') }}" method="POST">
                    @csrf
                    <div class="form-group mt-4">
                        <label class="control-label">Nome Proprietario</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Inserisci nome" value="{{old('name')}}">

                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Cognome Proprietario</label>
                        <input type="text" name="surname" id="surname" class="form-control"
                            placeholder="Inserisci cognome" value="{{old('surname')}}">

                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Indirizzo</label>
                        <input type="text" name="address" id="address" class="form-control"
                            placeholder="Inserisci indirizzo" value="{{old('address')}}">

                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Telefono</label>
                        <input type="text" name="telephone" id="telephone" class="form-control"
                            placeholder="Inserisci nome proprietario" value="{{old('telephone')}}">

                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control"
                            placeholder="Inserisci nome proprietario" value="{{old('email')}}">

                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center my-5">
                        <button class="btn btn-success fw-bold px-5" type="submit">AGGIUNGI</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
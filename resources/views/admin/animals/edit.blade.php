@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-12">
                <h1>Aggiungi una nuova animale</h1>

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
                <form action="{{ route('admin.animals.update', $animal->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-4">
                        <label class="control-label">Nome animale</label>
                        <input type="text" name="nome" id="nome" class="form-control"
                            placeholder="Inserisci nome" value="{{ old('nome') ?? $animal->nome }}">

                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Specie</label>
                        <input type="text" name="specie" id="specie" class="form-control"
                            placeholder="Inserisci specie" value="{{ old('specie') ?? $animal->specie }}">

                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Vacinazioni</label>
                        <input type="text" name="vacinazioni" id="vacinazioni" class="form-control"
                            placeholder="Inserisci data di nascita"
                            value="{{ old('vacinazioni') ?? $animal->vacinazioni }}">

                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Malattie</label>
                        <input type="text" name="malattie" id="malattie" class="form-control"
                            placeholder="Inserisci malattie" value="{{ old('malattie') ?? $animal->malattie }}">

                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Nome proprietario</label>
                        <input type="text" name="propietario" id="propietario" class="form-control"
                            placeholder="Inserisci nome proprietario"
                            value="{{ old('propietario') ?? $animal->propietario }}">

                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center my-5">
                        <button class="btn btn-success fw-bold px-5" type="submit">MODIFICA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

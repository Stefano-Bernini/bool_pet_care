@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-12">
                <h1>Aggiungi un nuovo animale</h1>

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
                <form action="{{ route('admin.animals.store') }}" method="POST">
                    @csrf
                    <div class="form-group mt-4">
                        <label class="control-label">Nome animale</label>
                        <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome') }}"
                            placeholder="Inserisci nome">

                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Specie</label>
                        <select class="form-control" name="breed_id" id="breed_id">
                            <option value="" disabled selected>Scegli la specie</option>
                            @foreach ($breeds as $breed)
                                <option value="{{ $breed->id }}" @selected(old('breed_id') == $breed->id)>{{ $breed->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Malattie</label>
                        <input type="text" name="malattie" id="malattie" class="form-control" value="{{ old('malattie') }}"
                            placeholder="Inserisci malattie">

                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Scegli il proprietario</label>
                        <select name="owner_id" id="owner_id" class="form-control">
                            <option value="" selected>Seleziona un proprietario</option>
                            @foreach ($owners as $owner)
                                <option value="{{ $owner->id }}" @selected(old('owner_id') == $owner->id)>{{ $owner->name }} {{ $owner->surname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center my-5">
                        <button class="btn btn-success fw-bold px-5" type="submit">CREA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

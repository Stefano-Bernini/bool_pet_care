@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-12">
                <h1>Aggiungi un nuova vaccinazione</h1>

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
                <form action="{{ route('admin.vaccinations.store') }}" method="POST">
                    @csrf
                    <div class="form-group mt-4">
                        <label class="control-label">Nome animale</label>
                        <select type="text" name="animal_id" id="animal_id" class="form-control">
                            <option value="" selected disabled>Inserisci vaccino</option>
                            @foreach ($animals as $item)
                                <option value="{{$item->id}}" @selected($item->id == $animal->id)>{{$item->nome}}</option>                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Nome vaccino</label>
                        <select type="text" name="vaccine_id" id="vaccine_id" class="form-control">
                            <option value="" selected disabled>Inserisci vaccino</option>
                            @foreach ($vaccines as $vaccine)
                                <option value="{{$vaccine->id}}">{{$vaccine->name}}</option>                                
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label for="" class="control-label">Data Vaccinazione</label>
                        <input class="form-control" type="date" name="date" id="date">
                    </div>
                    <div class="form-group mt-4">
                        <label for="" class="control-label">Dose Vaccinazione (mg)</label>
                        <input class="form-control" type="number" name="dosage" id="dosage">
                    </div>
                    <div class="form-group mt-4">
                        <label for="" class="control-label">Note sulla Vaccinazione</label>
                        <textarea class="form-control" name="note" id="note"></textarea>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center my-5">
                        <button class="btn btn-success fw-bold px-5" type="submit">CREA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-12">
                <h1>Aggiungi una nuova malattia</h1>

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
                <form action="{{ route('admin.sickness.store') }}" method="POST">
                    @csrf
                    <div class="form-group mt-4">
                        <label class="control-label">Nome malattia</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Inserisci nome">

                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Diagnosi</label>
                        <input type="text" name="diagnosis" id="diagnosis" class="form-control"
                            placeholder="Inserisci diagnosi">

                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Trattamento</label>
                        <input type="text" name="treatment" id="treatment" class="form-control"
                            placeholder="Inserisci trattamento">
                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Note</label>
                        <input type="text" name="notes" id="notes" class="form-control"
                            placeholder="Inserisci note sulla malattia">

                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center my-5">
                        <button class="btn btn-success fw-bold px-5" type="submit">CREA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

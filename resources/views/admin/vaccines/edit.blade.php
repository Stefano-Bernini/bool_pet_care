@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-12">
                <h1>Modifica il vaccino</h1>

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
                <form action="{{ route('admin.vaccines.update', $vaccine->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-4">
                        <label class="control-label">Nome vaccino</label>
                        <input type="text" name="nome" id="nome" class="form-control"
                            placeholder="Inserisci nome" value="{{ old('nome') ?? $vaccine->nome }}">
                    </div>
                    <div class="col-12 d-flex justify-content-center align-items-center my-5">
                        <button class="btn btn-success fw-bold px-5" type="submit">MODIFICA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
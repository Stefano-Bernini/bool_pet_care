@extends('layouts.admin')

@section('content')
    <div class="container d-flex">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between">
                    <h4>Specie</h4>
                    <a class="btn btn-primary" href="{{ route('admin.breeds.index') }}">Torna indietro</a>
                </div>
                <div class="card-body">
                    <div class="card-title d-flex">
                        <h3>{{ $breed->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

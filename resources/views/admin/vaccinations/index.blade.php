@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-evenly align-items-center my-5">
                <h1>Lista Vaccini </h1>
                <div class="btn-container">
                    <a href="{{ url('admin/animals/'.$id.'/vaccinations/create') }}"><button class="btn btn-success">Aggiungi
                            Vaccinazione</button></a>
                    <a href="{{ Route('admin.dashboard') }}"><button class="btn btn-dark">Dashboard</button></a>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Vaccino</th>
                            <th scope='col'>Dosaggio (mg)</th>
                            <th scope="col">Note</th>
                            <th scope="col">Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vaccinations as $item)
                            <tr>
                                <td>{{ $item->vaccine->name }}</td>
                                <td>{{ $item->dosage }}</td>
                                <td>{{ $item->note }}</td>
                                <td>{{ $item->date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

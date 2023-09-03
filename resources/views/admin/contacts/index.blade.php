@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-evenly align-items-center my-5">
                <h1>Messaggi</h1>
                <div class="btn-container">
                    <a href="{{ Route('admin.dashboard') }}"><button class="btn btn-dark">Dashboard</button></a>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Oggetto</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $item)
                            <tr>
                                <td>{{ $item->object }}</td>
                                <td>{{ $item->name.' '.$item->last_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="{{ route('admin.contacts.show', $item->id) }}"
                                        class="btn btn-sm btn-primary">Show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

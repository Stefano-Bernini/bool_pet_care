@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-evenly align-items-center my-5">
                <h1>Lista Specie</h1>
                <div class="btn-container">
                    <a href="{{ Route('admin.breeds.create') }}"><button class="btn btn-success">Aggiungi
                            Specie</button></a>
                    <a href="{{ Route('admin.dashboard') }}"><button class="btn btn-dark">Dashboard</button></a>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Slug</th>
                            <th scope='col'>Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($breeds as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>
                                    <a href="{{ route('admin.breeds.show', $item) }}"
                                        class="btn btn-sm btn-primary">Mostra</a>
                                    <a href="{{ route('admin.breeds.edit', $item) }}"
                                        class="btn btn-sm btn-warning">Modifica</a>
                                   <form action="{{ route('admin.breeds.destroy', $item) }}"
                                        class="d-inline-block project-delete-button" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger " data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            Cancella
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

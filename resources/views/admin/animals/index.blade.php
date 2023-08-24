@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-evenly align-items-center my-5">
                <h1>I nostri progetti</h1>
                <div class="btn-container">
                    <a href="{{ Route('admin.animals.create') }}"><button class="btn btn-success">Crea
                            progetto</button></a>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Specie</th>
                            <th scope="col">Vaccinazioni</th>
                            <th scope="col">Malattie</th>
                            <th scope="col">Proprietario</th>
                            <th scope="col">Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($animals as $animal)
                            <tr>
                                <td>{{ $animal->id }}</td>
                                <td>{{ $animal->nome }}</td>
                                <td>{{ $animal->specie }}</td>
                                <td>{{ $animal->vacinazioni }}</td>
                                <td>{{ $animal->malattie }}</td>
                                <td>{{ $animal->propietario }}</td>
                                <td>
                                    <a href="{{ route('admin.animals.show', $animal->id) }}"
                                        class="btn btn-sm btn-primary">Show</a>
                                    <a href="{{ route('admin.animals.edit', $animal) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="" class="d-inline-block project-delete-button" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger " data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            Delete
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

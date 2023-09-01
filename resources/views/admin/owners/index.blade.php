@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-evenly align-items-center my-5">
                <h1>Proprietari</h1>
                <div class="btn-container">
                    <a href="{{ Route('admin.owners.create') }}"><button class="btn btn-success">Aggiungi Proprietario</button></a>
                    <a href="{{ Route('admin.dashboard') }}"><button class="btn btn-dark">Dashboard</button></a>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Cognome</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Email</th>
                            <th scope="col">Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($owners as $owner)
                            <tr>
                                <td>{{ $owner->id }}</td>
                                <td>{{ $owner->name }}</td>
                                <td>{{ $owner->surname }}</td>
                                <td>{{ $owner->slug }}</td>
                                <td>{{ $owner->email }}</td>
                                <td>
                                    <a href="{{ route('admin.owners.show', $owner->id) }}"
                                        class="btn btn-sm btn-primary">Show</a>
                                    <a href="{{ route('admin.owners.edit', $owner) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                        <form class='d-inline-block delete-animal-form' action="{{ route('admin.owners.destroy', $owner->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
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
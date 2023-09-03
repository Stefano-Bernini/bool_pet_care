@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-evenly align-items-center my-5">
                <h1>Malattie trattate</h1>
                <div class="btn-container">
                    <a href="{{ Route('admin.sickness.create') }}"><button class="btn btn-success">Aggiungi
                            Malattia</button></a>
                    <a href="{{ Route('admin.animals.index') }}"><button class="btn btn-dark">Dashboard</button></a>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Diagnosi</th>
                            <th scope="col">Trattamento</th>
                            <th scope="col">Note</th>
                            <th scope="col">Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sicknesses as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->diagnosis }}</td>
                                <td>{{ $item->treatment }}</td>
                                <td class="col-4">{{ $item->notes }}</td>
                                <td>
                                    <a href="{{ route('admin.sickness.show', $item->id) }}"
                                        class="btn btn-sm btn-primary">Show</a>
                                    <a href="{{ route('admin.sickness.edit', $item) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form class='d-inline-block delete-animal-form'
                                        action="{{ route('admin.sickness.destroy', $item->id) }}" method="POST">
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
    @include('admin.partials.modal_delete')
@endsection

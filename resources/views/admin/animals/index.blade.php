@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-evenly align-items-center my-5">
                <h1>I nostri animali</h1>
                <div class="btn-container">
                    <a href="{{ Route('admin.animals.create') }}"><button class="btn btn-success">Aggiungi
                            Animale</button></a>
                    <a href="{{ Route('admin.dashboard') }}"><button class="btn btn-dark">Dashboard</button></a>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Specie</th>
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
                                <td>{{ isset($animal->breed->name) ? $animal->breed->name : 'Selezionare specie' }}</td>
                                {{-- <td>{{ $animal->vacinazioni }}</td> --}}
                                <td>{{ $animal->malattie }}</td>
                                <td>{{ isset($animal->owner_id) ? $animal->owner->name : 'Selezionare proprietario' }}
                                    {{ isset($animal->owner_id) ? $animal->owner->surname : '' }}</td>
                                <td>
                                    <a href="{{ route('admin.animals.show', $animal->id) }}"
                                        class="btn btn-sm btn-primary">Show</a>
                                    <a href="{{ route('admin.animals.edit', $animal) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form class='d-inline-block delete-animal-form'
                                        action="{{ route('admin.animals.destroy', $animal->id) }}" method="POST">
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

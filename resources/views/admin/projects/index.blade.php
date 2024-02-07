@extends('layouts.admin')

@section('content')
    <header>
        <h1>Elenco dei Progetti</h1>
        <a href="{{ route('admin.projects.create') }}" role="button" class="btn btn-primary btn-sm my-2">Crea un nuovo
            progetto</a>

    </header>
    @if (session('message'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast-show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Notifica</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('message') }}
                </div>
            </div>
        </div>
    @endif
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th>{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>
                        <a href="" role="button" class="btn btn-primary btn-sm">Modifica</a>
                        <a href="{{ route('admin.projects.show', $project) }}" role="button"
                            class="btn btn-info btn-sm">Dettagli</a>
                        <a href="" role="button" class="btn btn-danger btn-sm">Elimina</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

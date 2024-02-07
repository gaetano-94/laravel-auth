@extends('layouts.admin')

@section('content')
    <h1>Elenco dei Progetti</h1>
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
                        <a href="" role="button" class="btn btn-primary btn-sm">Crea</a>
                        <a href="{{ route('admin.projects.show', $project) }}" role="button"
                            class="btn btn-info btn-sm">Dettagli</a>
                        <a href="" role="button" class="btn btn-danger btn-sm">Elimina</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <ul>

        <li>{{ $project->title }}</li>

    </ul>
@endsection

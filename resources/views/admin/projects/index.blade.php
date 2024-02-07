@extends('layouts.admin')

@section('content')
    <h1>Elenco dei Progetti</h1>
    <ul>
        @foreach ($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>
@endsection

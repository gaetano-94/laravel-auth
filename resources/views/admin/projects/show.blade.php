@extends('layouts.admin')

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->content }}</p>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-sm" role="button">Torna alla Lista</a>
@endsection

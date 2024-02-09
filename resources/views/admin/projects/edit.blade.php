@extends('layouts.admin')

@section('content')
    <header class="d-flex justify-content-between align-items-center mt-2">
        <h1>Modifica Progetto: {{ $project->title }}</h1>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-sm my-2" role="button">Torna ai Progetti</a>
    </header>

    <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control  @error('title') is-invalid
                 @enderror" id="title"
                placeholder="Modifica Progetto" name="title" value="{{ old('title', $project->title) }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control @error('content') is-invalid
                 @enderror" id="content" rows="3"
                name="content" value="{{ old('content', $project->content) }}"></textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-success">Modifica</button>
    </form>
@endsection
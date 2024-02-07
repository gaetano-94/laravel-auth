@extends('layouts.admin')

@section('content')
    <h1>Creazione Nuovo Progetto</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control  @error('title') is-invalid
                 @enderror" id="title"
                placeholder="Nuovo Progetto" name="title">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control @error('content') is-invalid
                 @enderror" id="content" rows="3"
                name="content"></textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary">Crea</button>
    </form>
@endsection

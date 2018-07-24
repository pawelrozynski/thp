@extends('layouts.master')

@section('content')

<h2>
    Tworzenie nowego projektu
</h2>

<hr>

<form method="POST" action="/projects">
    
{{ csrf_field() }}

    
    <div class="form-group">
        <label for="name">Nazwa projektu</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nazwa projektu (trzy litery)" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <label for="description">Opis projektu</label>
        <textarea id="description" name="description" class="form-control" placeholder="Opis projektu (np. mała dobudówka)">{{ old('description') }}</textarea>
    </div>
    <div class="form-group">
        <label for="active">
            <input type="checkbox" checked id="active" name="active">
            Projekt aktywny
        </label>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Stwórz projekt</button>
    </div>    
</form>

@include('layouts.errors')

@endsection


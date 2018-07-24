@extends('layouts.master')

@section('content')
<div>
    <ul>
        <li>{{ $project->id }}</li>
        <li>{{ $project->name }}</li>
        <li>{{ $project->active }}</li>
    </ul>  
</div>

<hr>

<div class='comments'>
    <ul class="list-group">
        @foreach ($comments as $comment)
            <li class="list-group-item">
                {{ $comment->note }}
            </li>
        @endforeach
    </ul>    
</div>

<hr>

<div class="card">
    <div class="card-block">
        <form method="POST" action="/projectcomments">
            {{ csrf_field() }}
            
            <div class="form-group">
                <textarea name="note" placeholder="Wpisz notatkę do projektu" class="form-control"></textarea>
            </div>
            
            <input type="hidden" id="project_id" name="project_id" value="{{ $project->id }}">
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Dodaj notatkę</button>           
            </div>
        </form>
        
        @include('layouts.errors')

    </div>  
</div>
@endsection

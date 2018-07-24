@extends('layouts.master')

@section('content')
    <ul>
        @foreach ($events as $event)
        <li><a href="/events/{{ $event->id }}"> {{ $event->title }}</a></li>
        @endforeach
    </ul>

@endsection

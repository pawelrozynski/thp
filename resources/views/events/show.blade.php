@extends('layouts.master')

@section('content')
    <ul>
        <li>{{ $event->id }}</li>
        <li>{{ $event->comment }}</li>
        <li>{{ $event->created_at }}</li>
    </ul>

@endsection

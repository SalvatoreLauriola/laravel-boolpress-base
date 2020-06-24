@extends('layouts.main')
@section('main-content')
    <h3>Utenti</h3>
    @foreach ($users as $user)
        <ul>
            <li>{{ $user->name }}</li>
            <li>{{ $user->email }}</li>
            <li>{{ $user->address }}</li>
        </ul>
        
    @endforeach
@endsection
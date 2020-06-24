@extends('layouts.main')
@section('main-content')
    <h1>{{$post->title}}</h1>

    <p>{{$post->body}}</p>
    <h5>Comments</h5>
    <ul class="mb-5">
        @foreach ($post->comments as $comment)
            <h6 class="font-weight-bold">{{ $comment->name }}</h6>
            <span>creato il: {{ $comment->created_at }}</span>
            <p>{{ $comment->comment }}</p>
        @endforeach
    </ul>
@endsection
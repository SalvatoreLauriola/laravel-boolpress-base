@extends('layouts.main')
@section('main-content')
    <h3>Posts</h3>
    
    @foreach ($posts as $post)
    <ul>
        <li> {{$post->title}} </li>
        <li> {{$post->body}} </li>
        <a href="{{route('posts.show', $post->slug)}}">Show</a>
    </ul>
    @endforeach
@endsection
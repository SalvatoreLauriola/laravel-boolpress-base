@extends('layouts.main')

@section('main-content')



    <h1>Create New Post</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="from-group">
            <label for="title">Title</label>
            <input id="title" type="text" value="{{ old('title') }}" name='title'>
        </div>
        <div class="from-group">
            <label for="post">Post</label>
            <textarea name="post" id="post" cols="30" rows="10">
                {{ old('title') }}</textarea>
        </div>

        @foreach ($tags as $tag)
        {{-- stampa 1 ad 1 --}}
            <input type="checkbox" name="tags[]" id="tag-{{ $loop->iteration }}" value="{{$tag->id}}">  
            <label for="tag-{{ $loop->iteration }}">{{$tag->name}}</label>
        @endforeach
    
        <input type="submit" value="Crea Nuovo Post">
    </form>
    
    
@endsection
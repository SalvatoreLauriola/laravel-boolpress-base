<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
</head>
<body>
    <navbar class="nav">
        <ul>
            <li><a href="{{ route('home') }}">Homepage</a></li>
            <li><a href="{{ route('users.index')}}">Users</a></li>
            <li><a href="{{ route('posts.index')}}">Posts</a></li>
            <li><a href="{{ route('posts.create')}}">Posts</a></li>
        </ul>
    </navbar>
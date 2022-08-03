@extends('base')
@section('content')

    <h1 id="top">{{ $post->title }}</h1>
    <div><b>Posted by: </b> {{ $post->user->lname }}, {{ $post->user->fname }}</div>
    <div><b>Posted at: </b>{{ $post->created_at->format('F d, Y g:i A') }}</div>
    <hr>
    {{ $post->content }}

    <style>
         body{
        background-color: rgb(251, 234, 251);
    }

    #top{
        margin-top: 30px;
        margin-bottom: 30px;
    }

    </style>
@endsection

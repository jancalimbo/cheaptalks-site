@extends('components.base')

@section('content')

<livewire:posts.by-author :authorId="$id"/>
@endsection
@extends('layouts.app')

@section('content')

<h1>creer un nouveau post</h1>

<form method="POST" action="{{route('posts.store')}}">
    @csrf
    <input type="text" name="title" class=" border-gray-600 border-2 " id="">
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <button type="submit"  class="bg-green-500">creer</button>

    @endsection

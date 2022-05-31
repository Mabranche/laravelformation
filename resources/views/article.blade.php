@extends('layouts.app')

@section('content')
    <h1>{{ $post ->content }} </h1>

<hr>
  @forelse ($post->comments as $comment)
    <div>{{ $comment->content}} | cree en {{ $comment->created_at->format('Y')}}
    </div>
  @empty
    <span>Aucun commentaire pour ce post</span>
  @endforelse
@endsection


@extends('layouts.app')

@section('title', $post->title)

@section('content')
<h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
<p class="text-gray-600 mb-4">{{ $post->content }}</p>
<p class="text-sm text-gray-500">By {{ $post->user->name }} on {{ $post->created_at->format('M d, Y') }}</p>
<a href="{{ route('posts.index') }}" class="text-blue-600 hover:underline">Back to Posts</a>
@endsection
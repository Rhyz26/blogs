
@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<h1 class="text-2xl font-bold mb-4">All Posts</h1>
@if ($posts->isEmpty())
<p>No posts yet.</p>
@else
<div class="space-y-4">
    @foreach ($posts as $post)
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-xl font-semibold">
            <a href="{{ route('posts.show', $post) }}" class="text-blue-600 hover:underline">{{ $post->title }}</a>
        </h2>
        <p class="text-gray-600">{{ Str::limit($post->content, 100) }}</p>
        <p class="text-sm text-gray-500">By {{ $post->user->name }} on {{ $post->created_at->format('M d, Y') }}</p>
        @if (Auth::id() === $post->user_id)
        <div class="mt-2 space-x-2">
            <a href="{{ route('posts.edit', $post) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
        @endif
    </div>
    @endforeach
</div>
@endif
@endsection
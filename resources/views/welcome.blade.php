@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="text-center">
    <h1 class="text-3xl font-bold mb-4">Welcome to the Blog</h1>
    <p class="text-lg mb-6">Share your thoughts with the world!</p>
    @auth
    <a href="{{ route('posts.index') }}" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">View Posts</a>
    @else
    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Get Started</a>
    @endauth
</div>
@endsection
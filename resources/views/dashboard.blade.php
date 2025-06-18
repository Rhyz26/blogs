@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-4">Dashboard</h1>
<p>Welcome, {{ Auth::user()->name }}!</p>
<a href="{{ route('posts.index') }}" class="text-blue-600 hover:underline">View your posts</a>
@endsection

@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<h1 class="text-2xl font-bold mb-4">Create Post</h1>
<form method="POST" action="{{ route('posts.store') }}" class="max-w-lg">
    @csrf
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm @error('title') border-red-500 @enderror">
        @error('title')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
        <textarea name="content" id="content" rows="6" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm @error('content') border-red-500 @enderror">{{ old('content') }}</textarea>
        @error('content')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Submit</button>
</form>
@endsection
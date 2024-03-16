@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex justify-between items-center">
        <div class="py-6">
            <h1 class="text-4xl font-bold">Blog</h1>
        </div>
        <div class="py-6">
            <form action="{{ route('search') }}" method="GET">
                <div class="flex items-center border rounded-lg overflow-hidden">
                    <input type="text" name="query" placeholder="Search blogs" class="w-64 py-2 px-4 text-gray-700 leading-tight focus:outline-none">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4">Search</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Blog Posts -->
    <div class="w-full mt-8">
        <!-- Loop through your blog posts here -->
        @foreach($posts as $post)
        <div class="bg-white shadow-md rounded-md p-6 mb-6">
            <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
            <p class="text-gray-700 mb-4">{{ $post->description }}</p>
            <div class="flex items-center justify-between">
                <span class="text-gray-500">By <span class="font-bold italic">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}</span>
                <a href="{{ route('blog.show', $post->id) }}" class="text-blue-500 hover:underline">Read More</a>
            </div>
        </div>
        @endforeach

        <!-- Pagination links here if needed -->
    </div>
</div>
@endsection

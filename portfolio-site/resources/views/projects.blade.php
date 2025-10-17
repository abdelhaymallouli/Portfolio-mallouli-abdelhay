@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <section class="py-16 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center text-sky-400 mb-8">My Projects</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($projects as $project)
                    <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-sky-500/20 transition">
<img src="{{ $project['image'] ?? 'https://via.placeholder.com/400x300.png?text=No+Image+Available' }}" alt="{{ $project['title'] ?? 'Project' }}" class="w-full h-48 object-cover">                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-100 mb-2">{{ $project['title'] }}</h2>
                            <p class="text-gray-400 mb-4">{{ $project['description'] }}</p>
                            <a href="{{ route('projects.show', $project['id']) }}" class="inline-block px-4 py-2 bg-sky-500 text-white rounded hover:bg-sky-600 transition">View Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
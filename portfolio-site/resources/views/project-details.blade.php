@extends('layouts.app')

@section('title', $project['title'])

@section('content')
    <section class="py-16 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center text-sky-400 hover:text-sky-300 mb-6">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Projects
            </a>
            <h1 class="text-4xl font-bold text-sky-400 mb-4">{{ $project['title'] }}</h1>
<img src="{{ $project['image'] ?? 'https://via.placeholder.com/400x300.png?text=No+Image+Available' }}" alt="{{ $project['title'] ?? 'Project' }}" class="w-full h-48 object-cover">            <p class="text-gray-300 mb-6">{{ $project['details'] }}</p>
            <h2 class="text-2xl font-semibold text-gray-100 mb-4">Technologies</h2>
            <div class="flex flex-wrap gap-2 mb-6">
                @foreach ($project['technologies'] as $tech)
                    <span class="px-3 py-1 bg-sky-500/20 text-sky-400 rounded">{{ $tech }}</span>
                @endforeach
            </div>
            <h2 class="text-2xl font-semibold text-gray-100 mb-4">Features</h2>
            <ul class="list-disc list-inside text-gray-300">
                @foreach ($project['features'] as $feature)
                    <li>{{ $feature['name'] }}: {{ $feature['description'] }}</li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
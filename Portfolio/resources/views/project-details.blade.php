@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-br from-sky-900/20 via-gray-900 to-emerald-900/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <a href="{{ route('projects.index') }}" class="inline-flex items-center text-sky-400 hover:text-sky-300 transition duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Back to Projects
                </a>
            </div>

            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                <span class="bg-gradient-to-r from-sky-400 to-emerald-400 bg-clip-text text-transparent">{{ $project['title'] }}</span>
            </h1>

            <p class="text-xl text-gray-300 max-w-3xl">{{ $project['description'] }}</p>
        </div>
    </section>

    <!-- Project Content -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
                <!-- Project Image -->
                <div class="order-2 lg:order-1">
                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }} screenshot" class="rounded-2xl shadow-2xl w-full h-96 object-cover">
                </div>

                <!-- Project Info -->
                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl font-bold mb-6 text-sky-400">Project Overview</h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">{{ $project['details'] ?? $project['description'] }}</p>

                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-4 text-emerald-400">Links</h3>
                        <div class="flex flex-col gap-2">
                            <a href="{{ $project['github-link'] }}" class="text-sky-400 hover:text-sky-300 transition duration-300" target="_blank">GitHub Repository</a>
                            <a href="{{ $project['github-demo'] ?: '#' }}" class="{{ $project['github-demo'] ? 'text-sky-400 hover:text-sky-300' : 'text-gray-500 cursor-not-allowed' }} transition duration-300" target="_blank">
                                {{ $project['github-demo'] ? 'Live Demo' : 'Demo Not Available' }}
                            </a>
                        </div>
                    </div>
                    
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-4 text-emerald-400">Technologies Used</h3>
                        <div class="flex flex-wrap gap-3">
                            @foreach($project['technologies'] as $tech)
                                <span class="px-4 py-2 bg-sky-500/20 text-sky-400 rounded-xl border border-sky-500/50 font-semibold">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('projects.index') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-sky-500 to-emerald-500 text-white font-semibold rounded-2xl shadow-lg hover:shadow-sky-500/50 hover:scale-105 transition duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Back to Projects
                </a>
            </div>
        </div>
    </section>
@endsection
@extends('layouts.app')

@section('title', 'Projects - Abdelhay')

@section('content')
    <!-- Header Section -->
    <section class="py-20 bg-gradient-to-br from-sky-900/20 via-gray-900 to-emerald-900/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-bold text-center mb-6">
                <span class="bg-gradient-to-r from-sky-400 to-emerald-400 bg-clip-text text-transparent">My Projects</span>
            </h1>
            <p class="text-xl text-gray-300 text-center max-w-3xl mx-auto">
                A collection of my recent work showcasing full-stack development, modern design, and creative problem-solving.
            </p>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach($projects as $project)
                <div class="bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-sky-500/20 hover:scale-105 transition duration-300">
                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }} screenshot" class="w-full h-48 object-cover object-top">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-3 text-sky-400">{{ $project['title'] }}</h3>
                        <p class="text-gray-300 mb-6">{{ $project['description'] }}</p>
                        <a href="{{ route('projects.show', $project['id']) }}" class="inline-block px-6 py-3 bg-gradient-to-r from-sky-500 to-emerald-500 text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-sky-500/50 transition duration-300">
                            View Details
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection

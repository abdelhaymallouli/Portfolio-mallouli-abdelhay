@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-sky-900/20 to-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Hi, I'm <span class="text-sky-400">{{ $profile['name'] }}</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8">{{ $profile['title'] }}</p>
            <p class="text-lg text-gray-400 max-w-2xl mx-auto mb-8">{{ $profile['bio'] }}</p>
            <a href="{{ route('projects.index') }}" class="inline-block px-6 py-3 bg-sky-500 text-white rounded-lg hover:bg-sky-600 transition">View Projects</a>
        </div>
    </section>

    <section class="py-16 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-sky-400 mb-12">Skills</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold text-gray-300 mb-4">Frontend</h3>
                    @foreach ($skills['frontend'] as $skill)
                        <div class="mb-4">
                            <div class="flex justify-between">
                                <span>{{ $skill['name'] }}</span>
                                <span>{{ $skill['level'] }}%</span>
                            </div>
                            <div class="w-full bg-gray-700 h-2 rounded">
                                <div class="bg-sky-500 h-2 rounded" style="width: {{ $skill['level'] }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-300 mb-4">Backend</h3>
                    @foreach ($skills['backend'] as $skill)
                        <div class="mb-4">
                            <div class="flex justify-between">
                                <span>{{ $skill['name'] }}</span>
                                <span>{{ $skill['level'] }}%</span>
                            </div>
                            <div class="w-full bg-gray-700 h-2 rounded">
                                <div class="bg-sky-500 h-2 rounded" style="width: {{ $skill['level'] }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
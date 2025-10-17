@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="py-16 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center text-sky-400 mb-8">About Me</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <img src="https://t4.ftcdn.net/jpg/05/50/45/65/360_F_550456541_mMBkyPx1G6XtqPYrT8mG12O8Uz5XBTCZ.jpg" alt="Ahmed" class="w-full h-64 object-cover rounded-lg">
                </div>
                <div>
                    <h2 class="text-2xl font-semibold text-gray-100 mb-4">Hello, I'm {{ $profile['name'] }}</h2>
                    <p class="text-gray-300 mb-4">{{ $profile['bio'] }}</p>
                    <p class="text-gray-300">Location: {{ $profile['location'] }}</p>
                    <p class="text-gray-300">Email: {{ $profile['email'] }}</p>
                    <div class="flex gap-4 mt-4">
                        @foreach ($profile['socials'] as $social)
                            <a href="{{ $social['url'] }}" class="text-sky-400 hover:text-sky-300">{{ $social['platform'] }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="mt-12">
                <h2 class="text-3xl font-bold text-center text-sky-400 mb-8">Skills</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
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
                    <div>
                        <h3 class="text-xl font-semibold text-gray-300 mb-4">Others</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($skills['others'] as $skill)
                                <span class="px-3 py-1 bg-sky-500/20 text-sky-400 rounded">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('layouts.app')

@section('title', 'About')

@section('content')
    <!-- Header Section -->
    <section class="py-20 bg-gradient-to-br from-sky-900/20 via-gray-900 to-emerald-900/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-bold text-center mb-6">
                <span class="bg-gradient-to-r from-sky-400 to-emerald-400 bg-clip-text text-transparent">About Me</span>
            </h1>
            <p class="text-xl text-gray-300 text-center max-w-3xl mx-auto">
                {{ $profile['bio'] }}
            </p>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20">
                <!-- Profile Image -->
                <div class="flex justify-center items-center">
                    <img src="{{ $profile['image'] }}" alt="Professional profile of {{ $profile['name'] }}" class="rounded-3xl shadow-2xl w-80 h-80 object-cover">
                </div>

                <!-- Bio -->
                <div class="flex flex-col justify-center">
                    <h2 class="text-3xl font-bold mb-6 text-sky-400">Hello, I'm {{ $profile['name'] }}</h2>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                     {{ $profile['bio2'] }}
                    </p>
                    <p class="text-gray-300 text-lg leading-relaxed mt-6">
                        @php
                            $socials = collect($profile['socials']);
                            $x = $socials->firstWhere('platform', 'X');
                            $linkedin = $socials->firstWhere('platform', 'LinkedIn');
                        @endphp
                        @if ($x || $linkedin)
                            Connect with me:
                            @if ($x)
                                <a href="{{ $x['url'] }}" class="text-sky-400 hover:text-sky-300 transition duration-300">X Profile</a>
                            @endif
                            @if ($x && $linkedin)
                                <span class="mx-2">|</span>
                            @endif
                            @if ($linkedin)
                                <a href="{{ $linkedin['url'] }}" class="text-sky-400 hover:text-sky-300 transition duration-300">LinkedIn</a>
                            @endif
                        @endif
                    </p>
                </div>
            </div>


            <!-- Call to Action -->
            <div class="text-center bg-gradient-to-r from-sky-900/30 to-emerald-900/30 rounded-2xl p-12">
                <h2 class="text-3xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-sky-400 to-emerald-400 bg-clip-text text-transparent">Let's Work Together</span>
                </h2>
                <p class="text-gray-300 text-lg mb-8 max-w-2xl mx-auto">
                    I'm always excited to collaborate on interesting projects and help bring ideas to life. Let's create something amazing together!
                </p>
                <!-- Placeholder for contact route; replace with actual route if defined -->
                <a href="mailto:{{ $profile['email'] }}" class="inline-block px-8 py-4 bg-gradient-to-r from-sky-500 to-emerald-500 text-white font-semibold rounded-2xl shadow-lg hover:shadow-sky-500/50 hover:scale-105 transition duration-300">
                    Get In Touch
                </a>
            </div>
        </section>
@endsection
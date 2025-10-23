@extends('layouts.app')

@section('title', 'Home - Abdelhay Mallouli')

@section('content')
<!-- Hero Section -->
<section class="min-h-screen flex items-center justify-center relative overflow-hidden" id="home">
    <div class="absolute inset-0 bg-gradient-to-br from-sky-900/20 via-gray-900 to-emerald-900/20"></div>
    <div class="absolute top-20 left-10 w-72 h-72 bg-sky-500/10 rounded-full filter blur-3xl"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-emerald-500/10 rounded-full filter blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                Hi, I'm <span class="bg-gradient-to-r from-sky-400 to-emerald-400 bg-clip-text text-transparent">
                    {{ $profile['name'] ?? 'Abdelhay Mallouli' }}
                </span>
            </h1>
            <p class="text-2xl md:text-3xl text-gray-400 mb-8">{{ $profile['title'] ?? 'Web Developer' }}</p>
            <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-12 leading-relaxed">
                {{ $profile['bio'] ?? 'I craft elegant and functional web experiences using modern technologies. Specializing in full-stack development with HTML, CSS, JavaScript, PHP, Laravel, and Tailwind CSS. Passionate about creating responsive, user-friendly applications that solve real-world problems.' }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('projects.index') }}" class="px-8 py-4 bg-gradient-to-r from-sky-500 to-emerald-500 text-white font-semibold rounded-2xl shadow-lg hover:shadow-sky-500/50 hover:scale-105 transition duration-300">
                    View My Projects
                </a>
                <a href="{{ route('about') }}" class="px-8 py-4 bg-gray-800 text-white font-semibold rounded-2xl border-2 border-sky-500/50 hover:bg-gray-700 hover:border-sky-400 hover:scale-105 transition duration-300">
                    About Me
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Skills Preview Section -->
<section class="py-20 bg-gray-800/50" id="skills">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">
            <span class="bg-gradient-to-r from-sky-400 to-emerald-400 bg-clip-text text-transparent">
                Technologies I Work With
            </span>
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-gray-800 rounded-2xl p-6 text-center hover:bg-gray-700 hover:scale-105 transition duration-300 shadow-lg">
                <div class="text-4xl mb-4">⚡</div>
                <h3 class="text-xl font-semibold text-sky-400">Frontend</h3>
                <p class="text-gray-400 mt-2 text-sm">HTML, CSS, JavaScript, Tailwind</p>
            </div>
            <div class="bg-gray-800 rounded-2xl p-6 text-center hover:bg-gray-700 hover:scale-105 transition duration-300 shadow-lg">
                <div class="text-4xl mb-4">🚀</div>
                <h3 class="text-xl font-semibold text-emerald-400">Backend</h3>
                <p class="text-gray-400 mt-2 text-sm">PHP, Laravel, MySQL</p>
            </div>
            <div class="bg-gray-800 rounded-2xl p-6 text-center hover:bg-gray-700 hover:scale-105 transition duration-300 shadow-lg">
                <div class="text-4xl mb-4">🎨</div>
                <h3 class="text-xl font-semibold text-sky-400">Design</h3>
                <p class="text-gray-400 mt-2 text-sm">Responsive, Modern UI/UX</p>
            </div>
            <div class="bg-gray-800 rounded-2xl p-6 text-center hover:bg-gray-700 hover:scale-105 transition duration-300 shadow-lg">
                <div class="text-4xl mb-4">💼</div>
                <h3 class="text-xl font-semibold text-emerald-400">Full Stack</h3>
                <p class="text-gray-400 mt-2 text-sm">End-to-end Development</p>
            </div>
        </div>
    </div>
</section>

<!-- Short About Section -->
<section class="py-20" id="about-short">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">
            <span class="bg-gradient-to-r from-sky-400 to-emerald-400 bg-clip-text text-transparent">About Me</span>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="flex justify-center">
                <img src="{{ $profile['image'] }}" alt="Profile of {{ $profile['name'] ?? 'Abdelhay' }}" class="rounded-2xl shadow-lg w-64 h-64 object-cover">
            </div>
            <div class="flex flex-col justify-center">
                <p class="text-gray-300 text-lg leading-relaxed mb-6">
                    I'm {{ $profile['name'] ?? 'Abdelhay' }}, a passionate web developer based in Morocco. With expertise in full-stack development, I create scalable, user-friendly applications using technologies like Laravel, PHP, JavaScript, and Tailwind CSS.
                </p>
                <p class="text-gray-300 text-lg leading-relaxed mb-6">
                    My focus is on solving real-world problems through clean code and modern design. When not coding, I explore new tech and contribute to open-source.
                </p>
                <a href="{{ route('about') }}" class="inline-block px-6 py-3 bg-gradient-to-r from-sky-500 to-emerald-500 text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-sky-500/50 transition duration-300">
                    Learn More About Me
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

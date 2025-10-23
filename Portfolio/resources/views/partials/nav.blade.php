<nav class="bg-gray-800 fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
             <div class="text-2xl font-bold bg-gradient-to-r from-sky-400 to-emerald-400 bg-clip-text text-transparent">
                    AM
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-sky-400' : 'text-gray-300' }} hover:text-sky-400 transition">Home</a>
                 <a href="{{ route('projects.index') }}" class="{{ request()->routeIs('projects.index') ? 'text-sky-400' : 'text-gray-300' }} hover:text-sky-400 transition">Projects</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-sky-400' : 'text-gray-300' }} hover:text-sky-400 transition">About</a>
            </div>
            <div class="md:hidden">
                <button onclick="toggleMenu()" class="text-gray-300 hover:text-sky-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-gray-800">
            <div class="flex flex-col items-center space-y-4 py-4">
                <a href="{{ route('home') }}" class="text-gray-300 hover:text-sky-400">Home</a>
                 <a href="{{ route('projects.index') }}" class="text-gray-300 hover:text-sky-400">Projects</a>
                <a href="{{ route('about') }}" class="text-gray-300 hover:text-sky-400">About</a> 
            </div>
        </div>
    </div>
</nav>
<script>
    function toggleMenu() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    }
</script>
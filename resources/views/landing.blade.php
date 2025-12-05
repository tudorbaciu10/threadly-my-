<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Threadly') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100 font-sans">
        <div class="relative min-h-screen flex flex-col justify-center overflow-hidden">
            <div class="absolute inset-0 bg-[url(/img/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div>
            
            <header class="fixed w-full top-0 z-50 transition-all duration-300 backdrop-blur-md bg-white/70 dark:bg-gray-900/70 border-b border-gray-200 dark:border-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center h-16">
                        <div class="flex items-center">
                            <a href="#" class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 tracking-tight">Threadly</a>
                        </div>
                        <div class="hidden md:flex space-x-8">
                            <a href="#features" class="text-gray-600 hover:text-indigo-600 dark:text-gray-300 dark:hover:text-white transition">Features</a>
                            <a href="#" class="text-gray-600 hover:text-indigo-600 dark:text-gray-300 dark:hover:text-white transition">Pricing</a>
                            <a href="#" class="text-gray-600 hover:text-indigo-600 dark:text-gray-300 dark:hover:text-white transition">About</a>
                        </div>
                        <div class="flex items-center space-x-4">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-gray-900 dark:text-white hover:underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-gray-900 dark:text-white hover:text-indigo-600 font-medium transition">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="px-4 py-2 rounded-full bg-indigo-600 text-white hover:bg-indigo-700 transition shadow-lg">Get Started</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </header>

            <main class="relative z-10 pt-20 pb-16 md:pt-32 md:pb-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-8">
                    <span class="block text-gray-900 dark:text-white">Organize your team</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-purple-600">in one workspace.</span>
                </h1>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-400">
                    Threadly replaces scattered emails and chaotic chats with organized workspaces, separate rooms, and powerful extensions. Like Telegram, but for your web workflow.
                </p>
                <div class="mt-10 flex justify-center gap-4">
                    <a href="{{ route('register') }}" class="px-8 py-3 rounded-full bg-indigo-600 text-white font-semibold text-lg hover:bg-indigo-700 transition shadow-xl hover:-translate-y-1 transform duration-200">
                        Create Workspace
                    </a>
                    <a href="#features" class="px-8 py-3 rounded-full bg-white dark:bg-gray-800 text-gray-900 dark:text-white font-semibold text-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700 transition shadow-sm">
                        Learn More
                    </a>
                </div>

                <!-- Features Section -->
                <div id="features" class="mt-32 grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div class="p-8 rounded-2xl bg-white dark:bg-gray-800 shadow-xl border border-gray-100 dark:border-gray-700 hover:shadow-2xl transition duration-300">
                        <div class="h-12 w-12 rounded-lg bg-indigo-100 dark:bg-indigo-900/50 flex items-center justify-center mb-6 mx-auto text-indigo-600 dark:text-indigo-400">
                            <!-- Icon -->
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Workspaces</h3>
                        <p class="text-gray-500 dark:text-gray-400">Create dedicated workspaces for your different projects or teams to keep everything organized.</p>
                    </div>
                    <div class="p-8 rounded-2xl bg-white dark:bg-gray-800 shadow-xl border border-gray-100 dark:border-gray-700 hover:shadow-2xl transition duration-300">
                        <div class="h-12 w-12 rounded-lg bg-purple-100 dark:bg-purple-900/50 flex items-center justify-center mb-6 mx-auto text-purple-600 dark:text-purple-400">
                             <!-- Icon -->
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Separate Rooms</h3>
                        <p class="text-gray-500 dark:text-gray-400">Organize conversations into specific rooms or channels. No more endless scrolling to find info.</p>
                    </div>
                    <div class="p-8 rounded-2xl bg-white dark:bg-gray-800 shadow-xl border border-gray-100 dark:border-gray-700 hover:shadow-2xl transition duration-300">
                        <div class="h-12 w-12 rounded-lg bg-pink-100 dark:bg-pink-900/50 flex items-center justify-center mb-6 mx-auto text-pink-600 dark:text-pink-400">
                             <!-- Icon -->
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Extensions</h3>
                        <p class="text-gray-500 dark:text-gray-400">Power up your chat with extensions. Integrations, bots, and tools to boost productivity.</p>
                    </div>
                </div>

            </main>

            <footer class="border-t border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900 py-8">
                <div class="max-w-7xl mx-auto px-4 text-center text-gray-500 dark:text-gray-400">
                    &copy; {{ date('Y') }} Threadly. All rights reserved.
                </div>
            </footer>
        </div>
    </body>
</html>

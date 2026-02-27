<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Irfan Febrian, S.Kom</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{
    darkMode: localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
}" x-effect="
        darkMode ? document.documentElement.classList.add('dark') : document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', darkMode ? 'dark' : 'light');
    " class="bg-gray-50 text-gray-900 dark:bg-dark-bg dark:text-gray-100 transition-colors duration-300 antialiased">

    <nav
        class="fixed top-0 w-full z-50 bg-white/80 dark:bg-dark-bg/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <a href="/" wire:navigate class="text-2xl font-bold font-mono text-primary tracking-tighter">
                    &lt;IF/&gt;
                </a>

                <div class="flex items-center gap-6">
                    <div class="hidden md:flex gap-6 text-sm font-medium">
                        <a href="#about" class="hover:text-primary transition">About</a>
                        <a href="#projects" class="hover:text-primary transition">Projects</a>
                        <a href="#contact" class="hover:text-primary transition">Contact</a>
                    </div>

                    <button @click="darkMode = !darkMode"
                        class="p-2 rounded-full bg-gray-100 dark:bg-gray-800 hover:ring-2 hover:ring-primary transition-all text-gray-600 dark:text-yellow-300">
                        <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                            </path>
                        </svg>

                        <svg x-show="darkMode" style="display: none;" class="w-5 h-5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-16">
        {{ $slot }}
    </main>

    <footer
        class="py-8 text-center text-sm text-gray-500 dark:text-gray-400 border-t border-gray-200 dark:border-gray-800 mt-20 transition-colors duration-300">
        <p>&copy; {{ date('Y') }} Irfan Febrian, S.Kom. Built with Laravel & Tailwind v4.</p>
    </footer>

</body>

</html>
<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <div class="min-h-screen">

        <section class="relative py-20 lg:py-32 overflow-hidden flex items-center justify-center">
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div class="absolute top-0 left-1/4 w-96 h-96 bg-primary opacity-20 rounded-full blur-3xl animate-blob">
                </div>
                <div
                    class="absolute top-0 right-1/4 w-96 h-96 bg-purple-500 opacity-20 rounded-full blur-3xl animate-blob animation-delay-2000">
                </div>
            </div>

            <div class="container mx-auto px-4 relative z-10 text-center">
                <div
                    class="inline-block mb-4 px-4 py-1.5 rounded-full bg-primary/10 text-primary font-semibold text-sm">
                    👋 Hello World, I am
                </div>
                <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tight">
                    Irfan Febrian, <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-purple-600">S.Kom</span>
                </h1>

                <div class="h-8 mb-8 text-xl md:text-2xl text-gray-600 dark:text-gray-300 font-mono"
                    x-data="{ text: '', texts: ['Fullstack Developer', 'IT Support', 'Gamer', 'Anime Lovers', 'Coding', 'Jejepangan Enthusiast'], idx: 0, char: 0, deleting: false }"
                    x-init="setInterval(() => {
                        let currentText = texts[idx];
                        if (deleting) {
                            text = currentText.substring(0, text.length - 1);
                            if (text.length === 0) {
                                deleting = false;
                                idx = (idx + 1) % texts.length;
                            }
                        } else {
                            text = currentText.substring(0, text.length + 1);
                            if (text.length === currentText.length) { setTimeout(() => deleting = true, 2000); }
                        }
                    }, 100)">
                    <span x-text="text"></span><span class="animate-pulse">|</span>
                </div>

                <div class="flex justify-center gap-4">
                    <a href="#projects"
                        class="px-8 py-3 bg-primary hover:bg-primary-dark text-white rounded-full font-medium transition shadow-lg shadow-primary/30">
                        Lihat Karyaku
                    </a>
                    <a href="#contact"
                        class="px-8 py-3 bg-white dark:bg-dark-card text-gray-900 dark:text-white border border-gray-200 dark:border-gray-700 rounded-full font-medium hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                        Hubungi Saya
                    </a>
                </div>
            </div>
        </section>

        <section id="about" class="py-20 bg-white dark:bg-dark-card/50">
            <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-12">

                <div>
                    <h3 class="text-2xl font-bold mb-6 flex items-center gap-2">
                        <span class="w-1 h-8 bg-primary rounded-full"></span> Biodata
                    </h3>
                    <div
                        class="bg-gray-50 dark:bg-dark-card rounded-2xl p-6 border border-gray-100 dark:border-gray-700 shadow-sm">
                        <ul class="space-y-4">
                            <li
                                class="flex flex-col sm:flex-row sm:items-start justify-between border-b border-gray-200 dark:border-gray-700 pb-3 last:border-0">
                                <span class="text-gray-500 dark:text-gray-400 text-sm uppercase mt-1">Pendidikan</span>
                                <div class="text-right">
                                    <span class="font-bold block text-gray-900 dark:text-white">S1 - Teknik
                                        Informatika</span>
                                    <span class="text-sm text-gray-600 dark:text-gray-400">STMIK Indonesia Banjarmasin
                                        (2018-2023)</span>
                                </div>
                            </li>

                            <li
                                class="flex flex-col sm:flex-row sm:items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-3 last:border-0">
                                <span class="text-gray-500 dark:text-gray-400 text-sm uppercase">Hobi</span>
                                <span class="font-medium text-right">Game, Anime, Belajar, Coding</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-bold mb-6 flex items-center gap-2">
                        <span class="w-1 h-8 bg-primary rounded-full"></span> Keahlian & Tools
                    </h3>

                    <div class="space-y-6">

                        <div>
                            <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider block mb-2">
                                Programming Languages
                            </span>
                            <div class="flex flex-wrap gap-2">
                                @foreach (['PHP', 'JavaScript', 'C++', 'C#', 'Visual Basic', 'Python', 'Pascal'] as $skill)
                                    <span
                                        class="px-3 py-1 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-300 text-sm rounded-md font-medium border border-indigo-100 dark:border-indigo-800 hover:scale-105 transition-transform cursor-default">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider block mb-2">
                                Frameworks & Libraries
                            </span>
                            <div class="flex flex-wrap gap-2">
                                @foreach (['Codeigniter 4', 'Laravel', 'Livewire', 'Express.js'] as $skill)
                                    <span
                                        class="px-3 py-1 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-300 text-sm rounded-md font-medium border border-emerald-100 dark:border-emerald-800 hover:scale-105 transition-transform cursor-default">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <span class="text-xs font-semibold text-gray-500 uppercase tracking-wider block mb-2">
                                Creative & Productivity
                            </span>
                            <div class="flex flex-wrap gap-2">
                                @foreach (['Photoshop', 'After Effects', 'Premiere', 'Filmora', 'CapCut', 'Canva', 'MS Office'] as $skill)
                                    <span
                                        class="px-3 py-1 bg-pink-50 dark:bg-pink-900/30 text-pink-600 dark:text-pink-300 text-sm rounded-md font-medium border border-pink-100 dark:border-pink-800 hover:scale-105 transition-transform cursor-default">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="py-20">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-4">Project & Pengalaman</h2>
                <p class="text-center text-gray-500 dark:text-gray-400 mb-12 max-w-2xl mx-auto">
                    Beberapa hasil karya dan keterlibatan saya dalam pengembangan sistem serta organisasi.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <div
                        class="group bg-white dark:bg-dark-card rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 hover:shadow-xl hover:border-primary/50 transition duration-300">
                        <div
                            class="h-48 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center p-8">
                            <img src="https://ww2.weareimagi.com/_nuxt/mytix.DBLtJMKB.svg" alt="MyTix Logo"
                                class="h-24 w-auto object-contain drop-shadow-lg transform group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold group-hover:text-primary transition">MyTix.id</h3>
                                <span
                                    class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs px-2 py-1 rounded">Web
                                    App</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                                Platform tiket online untuk event. Menangani manajemen kuota, pemesanan, dan validasi
                                tiket digital.
                            </p>

                            <div class="flex justify-between items-end">
                                <div class="flex gap-2 text-xs text-gray-500 font-mono">
                                    <span>#Laravel</span> <span>#MySQL</span>
                                </div>
                                <a href="https://mytix.id" target="_blank"
                                    class="text-xs font-semibold text-primary hover:underline flex items-center gap-1">
                                    Lihat Web <span class="text-xs">&nearr;</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group bg-white dark:bg-dark-card rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 hover:shadow-xl hover:border-primary/50 transition duration-300">
                        <div
                            class="h-48 bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center text-white text-4xl">
                            🏫
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold group-hover:text-primary transition">Sistem Disposisi</h3>
                                <span
                                    class="bg-emerald-100 dark:bg-emerald-900 text-emerald-800 dark:text-emerald-200 text-xs px-2 py-1 rounded">Internal</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                                Aplikasi administrasi sekolah untuk SMAN 4 Banjarmasin. Mengelola surat masuk dan
                                disposisi kepala sekolah.
                            </p>
                            <div class="flex gap-2 text-xs text-gray-500 font-mono">
                                <span>#Livewire</span> <span>#Tailwind</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group bg-white dark:bg-dark-card rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 hover:shadow-xl hover:border-primary/50 transition duration-300">
                        <div
                            class="h-48 bg-gradient-to-br from-orange-500 to-red-500 flex items-center justify-center text-white text-4xl">
                            ⚡
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold group-hover:text-primary transition">FlashPoin</h3>
                                <span
                                    class="bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 text-xs px-2 py-1 rounded">E-Commerce</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">
                                Pengembangan online store untuk penjualan produk digital dengan sistem otomatisasi.
                            </p>
                            <div class="flex gap-2 text-xs text-gray-500 font-mono">
                                <span>#PHP</span> <span>#PaymentGateway</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group bg-white dark:bg-dark-card rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 hover:shadow-xl hover:border-primary/50 transition duration-300 md:col-span-2 lg:col-span-3 flex flex-col md:flex-row">
                        <div class="h-48 md:h-auto md:w-64 bg-gray-800 flex items-center justify-center p-8">
                            <img src="https://ww2.weareimagi.com/_nuxt/8-small-white.Dhfr9RpH.svg" alt="WeAreImagi Logo"
                                class="h-24 w-auto object-contain transform group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-6 flex flex-col justify-center flex-1">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold mb-2">WeAreImagi (Event Organizer)</h3>
                                <a href="https://weareimagi.com" target="_blank"
                                    class="text-primary hover:text-indigo-600 hidden sm:block">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-2">
                                <strong>Role:</strong> Developer & IT Support
                            </p>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">
                                Bertanggung jawab mengelola infrastruktur IT saat event berlangsung, memastikan sistem
                                ticketing berjalan lancar, dan menyediakan solusi teknis di lapangan.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="contact" class="py-20 bg-gray-50 dark:bg-black/20">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold mb-8">Let's Connect!</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <a href="https://www.facebook.com/irfan.Reseller/" target="_blank"
                        class="flex items-center justify-center gap-3 p-4 bg-white dark:bg-dark-card rounded-xl shadow-sm hover:shadow-md hover:scale-[1.02] transition border border-gray-200 dark:border-gray-700">
                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.791-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                        <span class="font-medium">Facebook</span>
                    </a>

                    <a href="https://instagram.com/4kumano" target="_blank"
                        class="flex items-center justify-center gap-3 p-4 bg-white dark:bg-dark-card rounded-xl shadow-sm hover:shadow-md hover:scale-[1.02] transition border border-gray-200 dark:border-gray-700">
                        <svg class="w-6 h-6 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                        <span class="font-medium">Instagram (@4kumano)</span>
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>
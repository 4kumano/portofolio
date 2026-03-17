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
                <div class="inline-block mb-4 px-4 py-1.5 rounded-full bg-primary/10 text-primary font-semibold text-sm">
                    👋 Hello World, I am
                </div>
                <h1 class="text-5xl md:text-7xl font-extrabold mb-6 tracking-tight">
                    Irfan Febrian, <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-purple-600">S.Kom</span>
                </h1>

                <div class="h-8 mb-8 text-xl md:text-2xl text-gray-600 dark:text-gray-300 font-mono"
                    x-data="{ text: '', texts: ['Fullstack Developer', 'IT Support', 'Gamer', 'Anime Lovers', 'Coding', 'Jejepangan Enthusiast'], idx: 0, char: 0, deleting: false }" x-init="setInterval(() => {
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
                                <span class="font-medium text-right">Game, Anime, Belajar, Coding, Wotagei</span>
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
                                @foreach (['Codeigniter 4', 'Laravel', 'Livewire', 'Express.js', 'Tailwind CSS', 'Bootstrap'] as $skill)
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
                            class="h-48 bg-linear-to-br from-white via-blue-100 to-blue-500 dark:from-gray-800 dark:via-gray-700 dark:to-blue-900 flex items-center justify-center p-8 border-b border-gray-100 dark:border-gray-800">
                            <img src="{{ asset('logo/Logo-MyTix.svg') }}" alt="MyTix Logo"
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
                            class="h-48 bg-linear-to-br from-emerald-500 to-teal-600 flex items-center justify-center text-white text-4xl">
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
                                <span>#Livewire</span> <span>#TailwindCSS</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group bg-white dark:bg-dark-card rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 hover:shadow-xl hover:border-primary/50 transition duration-300">
                        <div
                            class="h-48 bg-linear-to-br from-orange-500 to-red-500 flex items-center justify-center text-white text-4xl">
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
                                <span>#Livewire</span> <span>#TailwindCSS</span>

                            </div>
                        </div>
                    </div>

                    <div
                        class="group bg-white dark:bg-dark-card rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 hover:shadow-xl hover:border-primary/50 transition duration-300">
                        <div
                            class="h-48 bg-linear-to-br from-purple-500 to-pink-600 flex items-center justify-center p-8">
                            <img src="{{ asset('logo/logo-Anadex.svg') }}" alt="Anadex Logo"
                                class="h-24 w-auto object-contain drop-shadow-lg transform group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold group-hover:text-primary transition">Anadex</h3>
                                <span
                                    class="bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 text-xs px-2 py-1 rounded">Platform</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-4"
                                title="Platform voting lagu favoritmu untuk Utadensha & Odottemita, dukung Waifu/Husbando idaman.">
                                Platform voting lagu favorit untuk Utadensha & Odottemita, dukung
                                Waifu/Husbando idaman.
                            </p>
                            <div class="flex justify-between items-end">
                                <div class="flex gap-2 text-xs text-gray-500 font-mono flex-wrap">
                                    <span>#Laravel</span> <span>#Livewire</span> <span>#TailwindCSS</span>
                                </div>
                                <a href="https://anadex.weareimagi.com/home" target="_blank"
                                    class="text-xs font-semibold text-primary hover:underline flex items-center gap-1">
                                    Lihat Web <span class="text-xs">&nearr;</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group bg-white dark:bg-dark-card rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 hover:shadow-xl hover:border-primary/50 transition duration-300">
                        <div
                            class="h-48 bg-slate-900 border-b border-gray-100 dark:border-gray-800 flex items-center justify-center p-8">
                            <div
                                class="flex items-center gap-2 transform group-hover:scale-110 transition duration-500">
                                <svg class="w-10 h-10 drop-shadow-[0_0_8px_rgba(45,212,191,0.5)] shrink-0"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L14.5 9.5L22 12L14.5 14.5L12 22L9.5 14.5L2 12L9.5 9.5L12 2Z"
                                        class="fill-teal-500/20 stroke-teal-500" stroke-width="1.5"
                                        stroke-linejoin="round" />
                                    <path d="M12 6L13.5 10.5L18 12L13.5 13.5L12 18L10.5 13.5L6 12L10.5 10.5L12 6Z"
                                        class="fill-teal-400" />
                                    <circle cx="12" cy="12" r="1.5" class="fill-white" />
                                </svg>
                                <span
                                    class="text-3xl font-bold bg-linear-to-r from-teal-400 to-blue-500 bg-clip-text text-transparent tracking-wide">HoyoDash</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold group-hover:text-primary transition">HoyoDash</h3>
                                <span
                                    class="bg-teal-100 dark:bg-teal-900 text-teal-800 dark:text-teal-200 text-xs px-2 py-1 rounded">Web
                                    App</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-4"
                                title="HoyoDash adalah sebuah dashboard interaktif berbasis web yang elegan dan modern untuk memantau statistik akun game HoYoverse Anda (Genshin Impact, Honkai: Star Rail, Honkai Impact 3rd, dan Zenless Zone Zero) dalam satu tempat.">
                                Dashboard interaktif elegan untuk memantau statistik akun game HoYoverse (Genshin, HSR,
                                HI3, ZZZ) dalam satu tempat.
                            </p>
                            <div class="flex justify-between items-end">
                                <div class="flex gap-2 text-xs text-gray-500 font-mono flex-wrap">
                                    <span>#Livewire</span> <span>#TailwindCSS</span>
                                </div>
                                <a href="https://hoyodash.vercel.app/" target="_blank"
                                    class="text-xs font-semibold text-primary hover:underline flex items-center gap-1">
                                    Lihat Web <span class="text-xs">&nearr;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="group bg-white dark:bg-dark-card rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 hover:shadow-xl hover:border-primary/50 transition duration-300">
                        <div
                            class="h-48 bg-linear-to-br from-sky-400 to-white dark:from-sky-900 dark:to-gray-800 flex items-center justify-center p-8">
                            <img src="{{ asset('logo/logo-lluvia.webp') }}" alt="Lluvia Logo"
                                class="h-56 w-auto object-contain drop-shadow-xl transform group-hover:scale-110 transition duration-500">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold group-hover:text-primary transition">Lluvia</h3>
                                <span
                                    class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs px-2 py-1 rounded">Web
                                    App</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4 line-clamp-4"
                                title="Website portofolio untuk group chika idols lokal Kalimantan Selatan.">
                                Website portofolio untuk group chika idols lokal Kalimantan Selatan.
                            </p>
                            <div class="flex justify-between items-end">
                                <div class="flex gap-2 text-xs text-gray-500 font-mono flex-wrap">
                                    <span>#NuxtJS</span> <span>#TailwindCSS</span>
                                </div>
                                <a href="https://lluvia-project.vercel.app/" target="_blank"
                                    class="text-xs font-semibold text-primary hover:underline flex items-center gap-1">
                                    Lihat Web <span class="text-xs">&nearr;</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="group bg-white dark:bg-dark-card rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 hover:shadow-xl hover:border-primary/50 transition duration-300 md:col-span-2 lg:col-span-3 flex flex-col md:flex-row">
                        <div class="h-48 md:h-auto md:w-64 bg-gray-800 flex items-center justify-center p-8">
                            <img src="{{ asset('logo/Logo-WeAreImagi.webp') }}" alt="WeAreImagi Logo"
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
                                Bertanggung jawab mengelola infrastruktur IT saat event berlangsung, mengembangkan
                                sistem
                                ticketing (MyTix) dan platform Anadex, serta menyediakan solusi teknis di lapangan.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="experience" class="py-20 bg-white dark:bg-dark-card/50">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-4">Riwayat Keikutsertaan</h2>
                <p class="text-center text-gray-500 dark:text-gray-400 mb-12">
                    Pengalaman keterlibatan aktif dalam berbagai event dan organisasi.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ([
        ['date' => '04-01-2026', 'event' => 'HANABI MATSURI 2026', 'role' => 'Volunteer', 'color' => 'blue'],
        ['date' => '09-11-2025', 'event' => 'IMAGI 2', 'role' => 'Divisi Tiketing & Web Dev', 'color' => 'teal'],
        ['date' => '03-08-2025', 'event' => 'HanaCon Cosplay Convention 2025', 'role' => 'Volunteer', 'color' => 'indigo'],
        ['date' => '11-05-2025', 'event' => 'Break Time Fest : Be an Idol', 'role' => 'Divisi Tiketing & Web Dev', 'color' => 'pink'],
        ['date' => '06-04-2025', 'event' => 'Haru no Sakuragi', 'role' => 'Divisi Tiketing', 'color' => 'rose'],
        ['date' => '12-01-2025', 'event' => 'Hanabi Matsuri 2025', 'role' => 'Volunteer', 'color' => 'emerald'],
        ['date' => '22-12-2024', 'event' => 'IMAGI', 'role' => 'Divisi Tiketing & Web Dev', 'color' => 'cyan'],
        ['date' => '11-08-2024', 'event' => 'HanaCon 2024', 'role' => 'Volunteer', 'color' => 'sky'],
        ['date' => '27-04-2024', 'event' => 'Break Time Fest : Harmony of Idol', 'role' => 'Divisi Tiketing & Web Dev', 'color' => 'violet'],
        ['date' => '18-02-2024', 'event' => 'Fuyu no Yukikaze', 'role' => 'Divisi Tiketing', 'color' => 'fuchsia'],
        ['date' => '17-12-2023', 'event' => 'ROD 2023 "Across The Dream Sky"', 'role' => 'Divisi Tiketing & Web Dev', 'color' => 'orange'],
        ['date' => '10-09-2023', 'event' => 'Komikal 2', 'role' => 'Divisi Tiketing & Web Dev', 'color' => 'amber'],
        ['date' => '17-12-2022', 'event' => 'Reach Our Dream 2022', 'role' => 'Divisi Tiketing & App Dev', 'color' => 'red'],
        ['date' => '11-09-2022', 'event' => 'KOMIKAL', 'role' => 'Divisi Tiketing & App Dev', 'color' => 'yellow'],
        ['date' => '16-02-2020', 'event' => 'KPOP DANCE BATTLE ROYALE — BACK TO LOBBY', 'role' => 'Divisi Operator', 'color' => 'lime'],
        ['date' => '01-12-2019', 'event' => 'Banjarbaru DreamFest', 'role' => 'Volunteer (Cosplayer)', 'color' => 'green'],
        ['date' => '01-09-2019', 'event' => 'K-POP DANCE BATTLE ROYALE', 'role' => 'Divisi Dokumentasi', 'color' => 'blue'],
        ['date' => '05-05-2018', 'event' => 'Sakura Park ICGP', 'role' => 'Divisi Tiketing & Runner', 'color' => 'teal'],
        ['date' => '12-11-2017', 'event' => 'Yujo Matsuri', 'role' => 'Divisi Dokumentasi & Runner', 'color' => 'indigo'],
        ['date' => '29-10-2017', 'event' => 'Atarashii Cosplay Competitions', 'role' => 'Divisi Dokumentasi', 'color' => 'pink'],
        ['date' => '22-10-2017', 'event' => 'SHōRAI NO SEDAI', 'role' => 'Divisi Dokumentasi', 'color' => 'rose'],
    ] as $exp)
                        @php
                            $colors = [
                                'blue' => [
                                    'text' => 'text-blue-600',
                                    'bg' => 'bg-blue-50',
                                    'border' => 'border-blue-100',
                                    'darkBg' => 'dark:bg-blue-900/30',
                                    'darkText' => 'dark:text-blue-300',
                                    'darkBorder' => 'dark:border-blue-800',
                                    'from' => 'from-blue-500/10',
                                    'to' => 'to-indigo-500/10',
                                    'hoverBorder' => 'group-hover:border-blue-500/50',
                                ],
                                'teal' => [
                                    'text' => 'text-teal-600',
                                    'bg' => 'bg-teal-50',
                                    'border' => 'border-teal-100',
                                    'darkBg' => 'dark:bg-teal-900/30',
                                    'darkText' => 'dark:text-teal-300',
                                    'darkBorder' => 'dark:border-teal-800',
                                    'from' => 'from-teal-500/10',
                                    'to' => 'to-emerald-500/10',
                                    'hoverBorder' => 'group-hover:border-teal-500/50',
                                ],
                                'indigo' => [
                                    'text' => 'text-indigo-600',
                                    'bg' => 'bg-indigo-50',
                                    'border' => 'border-indigo-100',
                                    'darkBg' => 'dark:bg-indigo-900/30',
                                    'darkText' => 'dark:text-indigo-300',
                                    'darkBorder' => 'dark:border-indigo-800',
                                    'from' => 'from-indigo-500/10',
                                    'to' => 'to-purple-500/10',
                                    'hoverBorder' => 'group-hover:border-indigo-500/50',
                                ],
                                'pink' => [
                                    'text' => 'text-pink-600',
                                    'bg' => 'bg-pink-50',
                                    'border' => 'border-pink-100',
                                    'darkBg' => 'dark:bg-pink-900/30',
                                    'darkText' => 'dark:text-pink-300',
                                    'darkBorder' => 'dark:border-pink-800',
                                    'from' => 'from-pink-500/10',
                                    'to' => 'to-rose-500/10',
                                    'hoverBorder' => 'group-hover:border-pink-500/50',
                                ],
                                'rose' => [
                                    'text' => 'text-rose-600',
                                    'bg' => 'bg-rose-50',
                                    'border' => 'border-rose-100',
                                    'darkBg' => 'dark:bg-rose-900/30',
                                    'darkText' => 'dark:text-rose-300',
                                    'darkBorder' => 'dark:border-rose-800',
                                    'from' => 'from-rose-500/10',
                                    'to' => 'to-pink-500/10',
                                    'hoverBorder' => 'group-hover:border-rose-500/50',
                                ],
                                'emerald' => [
                                    'text' => 'text-emerald-600',
                                    'bg' => 'bg-emerald-50',
                                    'border' => 'border-emerald-100',
                                    'darkBg' => 'dark:bg-emerald-900/30',
                                    'darkText' => 'dark:text-emerald-300',
                                    'darkBorder' => 'dark:border-emerald-800',
                                    'from' => 'from-emerald-500/10',
                                    'to' => 'to-teal-500/10',
                                    'hoverBorder' => 'group-hover:border-emerald-500/50',
                                ],
                                'cyan' => [
                                    'text' => 'text-cyan-600',
                                    'bg' => 'bg-cyan-50',
                                    'border' => 'border-cyan-100',
                                    'darkBg' => 'dark:bg-cyan-900/30',
                                    'darkText' => 'dark:text-cyan-300',
                                    'darkBorder' => 'dark:border-cyan-800',
                                    'from' => 'from-cyan-500/10',
                                    'to' => 'to-blue-500/10',
                                    'hoverBorder' => 'group-hover:border-cyan-500/50',
                                ],
                                'sky' => [
                                    'text' => 'text-sky-600',
                                    'bg' => 'bg-sky-50',
                                    'border' => 'border-sky-100',
                                    'darkBg' => 'dark:bg-sky-900/30',
                                    'darkText' => 'dark:text-sky-300',
                                    'darkBorder' => 'dark:border-sky-800',
                                    'from' => 'from-sky-500/10',
                                    'to' => 'to-blue-500/10',
                                    'hoverBorder' => 'group-hover:border-sky-500/50',
                                ],
                                'violet' => [
                                    'text' => 'text-violet-600',
                                    'bg' => 'bg-violet-50',
                                    'border' => 'border-violet-100',
                                    'darkBg' => 'dark:bg-violet-900/30',
                                    'darkText' => 'dark:text-violet-300',
                                    'darkBorder' => 'dark:border-violet-800',
                                    'from' => 'from-violet-500/10',
                                    'to' => 'to-purple-500/10',
                                    'hoverBorder' => 'group-hover:border-violet-500/50',
                                ],
                                'fuchsia' => [
                                    'text' => 'text-fuchsia-600',
                                    'bg' => 'bg-fuchsia-50',
                                    'border' => 'border-fuchsia-100',
                                    'darkBg' => 'dark:bg-fuchsia-900/30',
                                    'darkText' => 'dark:text-fuchsia-300',
                                    'darkBorder' => 'dark:border-fuchsia-800',
                                    'from' => 'from-fuchsia-500/10',
                                    'to' => 'to-pink-500/10',
                                    'hoverBorder' => 'group-hover:border-fuchsia-500/50',
                                ],
                                'orange' => [
                                    'text' => 'text-orange-600',
                                    'bg' => 'bg-orange-50',
                                    'border' => 'border-orange-100',
                                    'darkBg' => 'dark:bg-orange-900/30',
                                    'darkText' => 'dark:text-orange-300',
                                    'darkBorder' => 'dark:border-orange-800',
                                    'from' => 'from-orange-500/10',
                                    'to' => 'to-red-500/10',
                                    'hoverBorder' => 'group-hover:border-orange-500/50',
                                ],
                                'amber' => [
                                    'text' => 'text-amber-600',
                                    'bg' => 'bg-amber-50',
                                    'border' => 'border-amber-100',
                                    'darkBg' => 'dark:bg-amber-900/30',
                                    'darkText' => 'dark:text-amber-300',
                                    'darkBorder' => 'dark:border-amber-800',
                                    'from' => 'from-amber-500/10',
                                    'to' => 'to-orange-500/10',
                                    'hoverBorder' => 'group-hover:border-amber-500/50',
                                ],
                                'red' => [
                                    'text' => 'text-red-600',
                                    'bg' => 'bg-red-50',
                                    'border' => 'border-red-100',
                                    'darkBg' => 'dark:bg-red-900/30',
                                    'darkText' => 'dark:text-red-300',
                                    'darkBorder' => 'dark:border-red-800',
                                    'from' => 'from-red-500/10',
                                    'to' => 'to-rose-500/10',
                                    'hoverBorder' => 'group-hover:border-red-500/50',
                                ],
                                'yellow' => [
                                    'text' => 'text-yellow-600',
                                    'bg' => 'bg-yellow-50',
                                    'border' => 'border-yellow-100',
                                    'darkBg' => 'dark:bg-yellow-900/30',
                                    'darkText' => 'dark:text-yellow-300',
                                    'darkBorder' => 'dark:border-yellow-800',
                                    'from' => 'from-yellow-500/10',
                                    'to' => 'to-amber-500/10',
                                    'hoverBorder' => 'group-hover:border-yellow-500/50',
                                ],
                                'lime' => [
                                    'text' => 'text-lime-600',
                                    'bg' => 'bg-lime-50',
                                    'border' => 'border-lime-100',
                                    'darkBg' => 'dark:bg-lime-900/30',
                                    'darkText' => 'dark:text-lime-300',
                                    'darkBorder' => 'dark:border-lime-800',
                                    'from' => 'from-lime-500/10',
                                    'to' => 'to-green-500/10',
                                    'hoverBorder' => 'group-hover:border-lime-500/50',
                                ],
                                'green' => [
                                    'text' => 'text-green-600',
                                    'bg' => 'bg-green-50',
                                    'border' => 'border-green-100',
                                    'darkBg' => 'dark:bg-green-900/30',
                                    'darkText' => 'dark:text-green-300',
                                    'darkBorder' => 'dark:border-green-800',
                                    'from' => 'from-green-500/10',
                                    'to' => 'to-emerald-500/10',
                                    'hoverBorder' => 'group-hover:border-green-500/50',
                                ],
                            ];
                            $theme = $colors[$exp['color']] ?? $colors['blue'];
                        @endphp
                        <div
                            class="group bg-gray-50 dark:bg-dark-card border border-gray-100 dark:border-gray-800 rounded-xl p-6 hover:shadow-xl hover:-translate-y-1 transition duration-300 relative overflow-hidden flex flex-col justify-between {{ $theme['hoverBorder'] }}">
                            <div
                                class="absolute top-0 right-0 w-24 h-24 bg-linear-to-br {{ $theme['from'] }} {{ $theme['to'] }} rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110">
                            </div>

                            <div class="relative z-10 flex-1">
                                <span
                                    class="inline-block px-3 py-1 text-xs font-bold font-mono shadow-sm mb-4 rounded-full border {{ $theme['text'] }} {{ $theme['bg'] }} {{ $theme['border'] }} {{ $theme['darkBg'] }} {{ $theme['darkText'] }} {{ $theme['darkBorder'] }}">
                                    {{ $exp['date'] }}
                                </span>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 leading-tight">
                                    {{ $exp['event'] }}
                                </h3>
                            </div>

                            <div class="relative z-10 mt-4 pt-4 border-t border-gray-200 dark:border-gray-800">
                                <p
                                    class="text-sm font-medium text-gray-500 dark:text-gray-400 flex items-center gap-2">
                                    <svg class="w-4 h-4 {{ $theme['text'] }}" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                    {{ $exp['role'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
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

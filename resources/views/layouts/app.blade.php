<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Proxy Haskell') }}</title>

    <!-- Google Fonts: Plus Jakarta Sans, Space Grotesk, Orbitron & Chakra Petch -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@600;700;800&family=Orbitron:wght@700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-[#1E152A] text-[#e0d3ac] min-h-screen flex flex-col font-['Plus_Jakarta_Sans',sans-serif] selection:bg-[#e0d3ac] selection:text-[#1E152A] antialiased overflow-x-hidden">

    <!-- Navbar Transparan dengan Garis Pembatas Bawah Sesuai Gambar -->
    <header class="w-full absolute top-0 left-0 z-50 bg-transparent border-b border-[#e0d3ac]/70">
        <nav class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-16 py-4 sm:py-5 flex items-center justify-between">
            
            <!-- Logo / Brand (Kiri) -->
            @if (!request()->is('/'))
                <a href="{{ url('/') }}" class="text-base sm:text-lg md:text-xl lg:text-2xl font-['Mokoto',sans-serif] tracking-wider text-[#e0d3ac] hover:text-white transition-colors duration-200 select-none">
                    PROXY HASKELL
                </a>
            @else
                <div class="invisible select-none text-base sm:text-lg md:text-xl lg:text-2xl font-['Mokoto',sans-serif] tracking-wider" aria-hidden="true">
                    PROXY HASKELL
                </div>
            @endif

            <!-- Menu Navigasi (Kanan) -->
            <ul class="flex items-center space-x-3 sm:space-x-6 text-xs sm:text-sm md:text-base font-extrabold uppercase tracking-wider font-['Chakra_Petch','Plus_Jakarta_Sans',sans-serif]">
                
                {{-- HOME --}}
                <li>
                    <a 
                        href="{{ url('/') }}" 
                        class="relative py-1 transition-all duration-300 {{ request()->is('/') ? 'text-[#e0d3ac]' : 'text-[#e0d3ac]/85' }} hover:text-white hover:drop-shadow-[0_0_12px_rgba(224,211,172,0.6)] group"
                    >
                        <span>HOME</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#e0d3ac] transition-all duration-300 group-hover:w-full {{ request()->is('/') ? 'w-full' : '' }}"></span>
                    </a>
                </li>

                {{-- Separator --}}
                <li class="text-[#e0d3ac]/70 select-none font-bold text-xs sm:text-sm">/</li>

                {{-- GALERI --}}
                <li>
                    <a 
                        href="{{ url('/galeri') }}" 
                        class="relative py-1 transition-all duration-300 {{ request()->is('galeri*') ? 'text-[#e0d3ac]' : 'text-[#e0d3ac]/85' }} hover:text-white hover:drop-shadow-[0_0_12px_rgba(224,211,172,0.6)] group"
                    >
                        <span>GALERI</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#e0d3ac] transition-all duration-300 group-hover:w-full {{ request()->is('galeri*') ? 'w-full' : '' }}"></span>
                    </a>
                </li>

                {{-- Separator --}}
                <li class="text-[#e0d3ac]/70 select-none font-bold text-xs sm:text-sm">/</li>

                {{-- ANGGOTA --}}
                <li>
                    <a 
                        href="{{ url('/anggota') }}" 
                        class="relative py-1 transition-all duration-300 {{ request()->is('anggota*') ? 'text-[#e0d3ac]' : 'text-[#e0d3ac]/85' }} hover:text-white hover:drop-shadow-[0_0_12px_rgba(224,211,172,0.6)] group"
                    >
                        <span>ANGGOTA</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#e0d3ac] transition-all duration-300 group-hover:w-full {{ request()->is('anggota*') ? 'w-full' : '' }}"></span>
                    </a>
                </li>

            </ul>

        </nav>
    </header>

    <!-- Tempat Konten Halaman -->
    <main class="flex-1 w-full relative z-10 pt-20 sm:pt-24">
        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>

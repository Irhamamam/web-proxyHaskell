@extends('layouts.app')

@push('styles')
<style>
    /* Tipografi Outline Transparan Sesuai Referensi Gambar */
    .text-outline-haskell {
        -webkit-text-stroke: 1.5px #e0d3ac;
        color: transparent;
        letter-spacing: 0.12em;
    }
    @media (min-width: 640px) {
        .text-outline-haskell {
            -webkit-text-stroke: 2px #e0d3ac;
        }
    }
</style>
@endpush

@push('scripts')
{{-- Library Alpine.js untuk Slider/Carousel Reaktif Tanpa Reload --}}
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush

@section('content')
@php
    // Membagi 11 data anggota ke dalam 3 slide
    $slide1 = array_slice($anggota ?? [], 0, 4);
    $slide2 = array_slice($anggota ?? [], 4, 4);
    $slide3 = array_slice($anggota ?? [], 8, 3);
@endphp

{{-- Pembungkus Utama Halaman Anggota dengan Background Penuh --}}
<div 
    x-data="{ currentSlide: 1, totalSlides: 3 }"
    @keydown.window.arrow-right="if (currentSlide < totalSlides) currentSlide++"
    @keydown.window.arrow-left="if (currentSlide > 1) currentSlide--"
    class="relative w-full min-h-screen bg-cover bg-center bg-no-repeat -mt-20 sm:-mt-24 pt-24 sm:pt-28 pb-16 flex flex-col justify-between overflow-x-hidden"
    style="background-image: url('{{ asset('images/anggota-background.jpg') }}');"
>

    {{-- =========================================================================
         BAGIAN ATAS KIRI: HEADING OUTLINE 'ANGGOTA PROXY' & INDIKATOR HALAMAN
       ========================================================================= --}}
    <div class="max-w-7xl mx-auto w-full px-6 sm:px-10 lg:px-16 mb-6 sm:mb-8">
        
        {{-- Baris Heading dengan Ornamen Kotak Piksel di Kiri --}}
        <div class="flex items-center">
            
            {{-- Ornamen 2 Kotak Piksel di Kiri Heading --}}
            <div class="flex items-center gap-1.5 opacity-60 mr-3 sm:mr-4 shrink-0 select-none">
                <div class="w-2.5 h-2.5 sm:w-3.5 sm:h-3.5 bg-[#e0d3ac]/40"></div>
                <div class="w-4 h-4 sm:w-5 sm:h-5 bg-[#e0d3ac]/70"></div>
            </div>

            {{-- Teks 'ANGGOTA PROXY' Menggunakan Font Outline Mokoto --}}
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black uppercase text-outline-haskell font-['Mokoto',sans-serif] tracking-wider leading-none select-none">
                ANGGOTA PROXY
            </h1>

        </div>

        {{-- Indikator Halaman Aktif ('01-03', '02-03', '03-03') Tanpa Titik Sesuai Gambar --}}
        <div class="mt-2 sm:mt-2.5 text-base sm:text-lg md:text-xl font-bold tracking-[0.2em] text-[#e0d3ac] font-['Mokoto','Space_Grotesk',sans-serif] select-none pl-7 sm:pl-9">
            <span x-text="'0' + currentSlide + '-0' + totalSlides">01-03</span>
        </div>

    </div>

    {{-- =========================================================================
         BAGIAN TENGAH: SLIDER/CAROUSEL GRID KARTU ANGGOTA & TOMBOL PANAH
       ========================================================================= --}}
    <div class="max-w-7xl mx-auto w-full px-4 sm:px-8 lg:px-12 flex-1 flex items-center justify-center relative">
        
        {{-- =========================================================================
             NAVIGASI PANAH (KOTAK TRANSPARAN DENGAN SIMBOL < DAN >)
             - Slide 1: Hanya tombol Next (Kanan)
             - Slide 2: Tombol Prev (Kiri) dan Next (Kanan)
             - Slide 3: Hanya tombol Prev (Kiri)
           ========================================================================= --}}
        
        {{-- Tombol Panah Prev (Kiri) --}}
        <button 
            x-show="currentSlide > 1" 
            @click="currentSlide--"
            x-cloak
            type="button"
            title="Slide Sebelumnya"
            aria-label="Slide Sebelumnya"
            class="fixed left-3 sm:left-6 top-1/2 -translate-y-1/2 z-40 w-9 h-9 sm:w-11 sm:h-11 bg-[#2d1a24]/85 hover:bg-[#e0d3ac] text-[#e0d3ac] hover:text-[#1e152a] border border-[#52333d] hover:border-[#e0d3ac] rounded-lg backdrop-blur-md flex items-center justify-center transition-all duration-300 shadow-xl hover:scale-105 active:scale-95 cursor-pointer font-bold text-xl sm:text-2xl select-none"
        >
            &lt;
        </button>

        {{-- Tombol Panah Next (Kanan) --}}
        <button 
            x-show="currentSlide < totalSlides" 
            @click="currentSlide++"
            type="button"
            title="Slide Selanjutnya"
            aria-label="Slide Selanjutnya"
            class="fixed right-3 sm:right-6 top-1/2 -translate-y-1/2 z-40 w-9 h-9 sm:w-11 sm:h-11 bg-[#2d1a24]/85 hover:bg-[#e0d3ac] text-[#e0d3ac] hover:text-[#1e152a] border border-[#52333d] hover:border-[#e0d3ac] rounded-lg backdrop-blur-md flex items-center justify-center transition-all duration-300 shadow-xl hover:scale-105 active:scale-95 cursor-pointer font-bold text-xl sm:text-2xl select-none"
        >
            &gt;
        </button>

        {{-- =========================================================================
             SLIDE 1: Anggota 01 sampai 04 (Grid 2 Kolom)
           ========================================================================= --}}
        <div 
            x-show="currentSlide === 1"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-x-6"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="w-full grid grid-cols-1 md:grid-cols-2 gap-5 sm:gap-6 justify-items-center"
        >
            @foreach ($slide1 as $item)
                <div class="w-full max-w-[560px]">
                    <x-card :item="$item" />
                </div>
            @endforeach
        </div>

        {{-- =========================================================================
             SLIDE 2: Anggota 05 sampai 08 (Grid 2 Kolom Sesuai Screenshot)
           ========================================================================= --}}
        <div 
            x-show="currentSlide === 2"
            x-cloak
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-x-6"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="w-full grid grid-cols-1 md:grid-cols-2 gap-5 sm:gap-6 justify-items-center"
        >
            @foreach ($slide2 as $item)
                <div class="w-full max-w-[560px]">
                    <x-card :item="$item" />
                </div>
            @endforeach
        </div>

        {{-- =========================================================================
             SLIDE 3: Anggota 09 sampai 11 (Anggota 11 di Tengah Bawah)
           ========================================================================= --}}
        <div 
            x-show="currentSlide === 3"
            x-cloak
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-x-6"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="w-full grid grid-cols-1 md:grid-cols-2 gap-5 sm:gap-6 justify-items-center"
        >
            {{-- Anggota 09 (Kiri Atas) --}}
            @if (isset($slide3[0]))
                <div class="w-full max-w-[560px] flex justify-center">
                    <x-card :item="$slide3[0]" />
                </div>
            @endif

            {{-- Anggota 10 (Kanan Atas) --}}
            @if (isset($slide3[1]))
                <div class="w-full max-w-[560px] flex justify-center">
                    <x-card :item="$slide3[1]" />
                </div>
            @endif

            {{-- Anggota 11 (Tengah Bawah, Merentang 2 Kolom) --}}
            @if (isset($slide3[2]))
                <div class="col-span-1 md:col-span-2 w-full max-w-[560px] flex justify-center pt-2">
                    <x-card :item="$slide3[2]" />
                </div>
            @endif
        </div>

    </div>

</div>
@endsection

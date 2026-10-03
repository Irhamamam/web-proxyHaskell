@extends('layouts.app')

@push('styles')
<style>
    /* Tipografi Outline Transparan Sesuai Tema Halaman */
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

@section('content')
{{-- Pembungkus Utama Halaman Galeri dengan Background Penuh --}}
<div 
    class="relative w-full min-h-screen bg-cover bg-center bg-no-repeat -mt-20 sm:-mt-24 pt-24 sm:pt-28 pb-12 flex flex-col justify-between overflow-x-hidden"
    style="background-image: url('{{ asset('images/galeri-background.jpg') }}');"
>

    {{-- =========================================================================
         1. HEADING 'GALERI DOKUMENTASI' DI BAGIAN ATAS KIRI
       ========================================================================= --}}
    <div class="max-w-7xl mx-auto w-full px-6 sm:px-10 lg:px-16 mb-6 sm:mb-8">
        <div class="flex items-center">
            
            {{-- Ornamen 2 Kotak Piksel di Kiri Heading --}}
            <div class="flex items-center gap-1.5 opacity-60 mr-3 sm:mr-4 shrink-0 select-none">
                <div class="w-2.5 h-2.5 sm:w-3.5 sm:h-3.5 bg-[#e0d3ac]/40"></div>
                <div class="w-4 h-4 sm:w-5 sm:h-5 bg-[#e0d3ac]/70"></div>
            </div>

            {{-- Teks 'GALERI DOKUMENTASI' Bergaya Outline --}}
            <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black uppercase text-outline-haskell font-['Mokoto',sans-serif] tracking-wider leading-none select-none">
                GALERI DOKUMENTASI
            </h1>

        </div>
    </div>

    {{-- =========================================================================
         2. GRID GALERI 8 FOTO (4 DI ATAS, 4 DI BAWAH)
       ========================================================================= --}}
    <div class="max-w-7xl mx-auto w-full px-6 sm:px-10 lg:px-16 flex-1 flex items-center justify-center my-4">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-6 lg:gap-7 w-full justify-items-center">
            @for ($i = 1; $i <= 8; $i++)
                <div class="w-full max-w-[320px] sm:max-w-none aspect-[4/3] border-[5px] sm:border-[6px] border-[#e0d3ac] rounded-xl sm:rounded-2xl overflow-hidden bg-[#241517] shadow-2xl transition-all duration-300 hover:scale-[1.03] hover:shadow-[0_0_25px_rgba(224,211,172,0.35)] group">
                    <img 
                        src="{{ asset('images/gallery/' . $i . '.jpg') }}" 
                        alt="Dokumentasi Proxy Haskell {{ $i }}" 
                        class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-105"
                        onerror="this.onerror=null; this.src='https://placehold.co/600x450/241517/e0d3ac?text=Foto+{{ $i }}';"
                    />
                </div>
            @endfor
        </div>

    </div>

    {{-- =========================================================================
         3. QUOTE DI BAGIAN PALING BAWAH TENGAH
       ========================================================================= --}}
    <div class="max-w-5xl mx-auto w-full px-6 text-center mt-6 sm:mt-10 select-none">
        <p class="text-xs sm:text-sm md:text-base font-bold italic text-[#e0d3ac] font-['Space_Grotesk','Plus_Jakarta_Sans',sans-serif] tracking-wide leading-relaxed drop-shadow-md">
            &ldquo;Every picture holds a story, every moment became a memory, and every memory became part of us.&rdquo;
        </p>
    </div>

</div>
@endsection

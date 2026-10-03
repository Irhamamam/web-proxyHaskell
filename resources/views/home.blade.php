@extends('layouts.app')

@push('styles')
    {{-- Import font futuristik/techno untuk Heading dan Subheading --}}
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@600;700;800&family=Orbitron:wght@700;800;900&display=swap" rel="stylesheet">
@endpush

@section('content')
<div class="w-full min-h-screen bg-cover bg-center bg-no-repeat -mt-20 sm:-mt-24 pt-24 sm:pt-28 pb-12 flex items-center px-6 sm:px-10 lg:px-16" style="background-image: url('{{ asset('images/hero-background.png') }}');">
    
    <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 items-center">
        
        {{-- ================= BAGIAN KIRI: Teks & Action ================= --}}
        <div class="lg:col-span-7 flex flex-col justify-center text-left">
            
            {{-- Sub-heading: PEKAN ILKOMERZ 62 --}}
            <div class="mb-3 sm:mb-4">
                <span class="inline-block text-[#e0d3ac] text-xl sm:text-2xl md:text-4xl tracking-[0.25em] font-vt323 efek-glowing">
                    PEKAN ILKOMERZ 62
                </span>
            </div>

            {{-- Heading Utama: PROXY HASKELL --}}
            <h1 class="text-5xl sm:text-7xl md:text-8xl xl:text-[92px] text-[#e0d3ac] tracking-wide leading-[0.92] font-mokoto mb-6 sm:mb-8 select-none drop-shadow-[0_4px_24px_rgba(0,0,0,0.5)]">
                PROXY<br>HASKELL
            </h1>

            {{-- Garis Pemisah Halus --}}
            <div class="w-full max-w-md h-px bg-gradient-to-r from-[#e0d3ac]/60 via-[#e0d3ac]/25 to-transparent mb-4 sm:mb-5"></div>

            {{-- Teks Quote: "Ora ngeyel-ngeyel." --}}
            <p class="text-base sm:text-xl md:text-2xl italic font-medium text-[#e0d3ac]/85 font-['Plus_Jakarta_Sans',sans-serif] mb-8 sm:mb-10 tracking-wide">
                &ldquo;Ora ngeyel-ngeyel.&rdquo;
            </p>

            {{-- Tombol: MEET THE TEAM -> --}}
            <div>
                <a 
                    href="{{ url('/anggota') }}" 
                    class="group inline-flex items-center space-x-3 bg-[#442E28] hover:bg-[#583C34] text-[#e0d3ac] hover:text-white px-6 sm:px-8 py-3.5 sm:py-4 border-2 border-[#e0d3ac]/80 hover:border-[#e0d3ac] transition-all duration-300 shadow-xl hover:shadow-[0_0_20px_rgba(224,211,172,0.35)] hover:-translate-y-0.5 active:translate-y-0"
                >
                    <span class="font-['Orbitron','Chakra_Petch',sans-serif] font-black text-xs sm:text-sm uppercase tracking-widest">
                        MEET THE TEAM
                    </span>
                    <span class="text-sm sm:text-base transition-transform duration-300 group-hover:translate-x-1.5 font-bold">
                        &rarr;
                    </span>
                </a>
            </div>

        </div>

    </div>

</div>
@endsection

@props(['item'])

@once
    {{-- Import font Plus Jakarta Sans untuk kemiripan maksimal dengan desain --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap" rel="stylesheet">
@endonce

@php
    $hasFoto = !empty($item['foto']) && file_exists(public_path($item['foto']));
    $hasQr = !empty($item['qr_cv']) && file_exists(public_path($item['qr_cv']));
@endphp

<div class="relative w-full max-w-[620px] bg-[#342023] rounded-[26px] p-4 sm:p-5 text-[#e0d3ac] shadow-2xl border border-[#4a2e33] overflow-hidden select-none font-['Plus_Jakarta_Sans',sans-serif]">
    
    {{-- Background Decorative Waves / Guilloche Lines --}}
    <div class="absolute -top-12 -right-12 w-80 h-80 sm:w-96 sm:h-96 pointer-events-none opacity-20 text-[#e0d3ac] overflow-hidden">
        <svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
            @for ($i = 0; $i < 16; $i++)
                <path 
                    d="M {{ 170 + $i * 14 }} -50 C {{ 150 + $i * 11 }} 140, {{ 330 - $i * 7 }} 220, {{ 430 + $i * 6 }} {{ 270 + $i * 14 }}" 
                    stroke="currentColor" 
                    stroke-width="1.2" 
                    stroke-linecap="round"
                />
            @endfor
        </svg>
    </div>

    {{-- Main Container --}}
    <div class="relative z-10 flex flex-col sm:flex-row gap-4 sm:gap-5 items-stretch">
        
        {{-- Sisi Kiri: Foto Profil dengan Border Emas #e0d3ac --}}
        <div class="shrink-0 flex items-center justify-center">
            <div class="w-36 h-48 sm:w-44 sm:h-60 rounded-[22px] border-[2.5px] border-[#e0d3ac] overflow-hidden bg-gray-800 shadow-md flex items-center justify-center">
                @if ($hasFoto)
                    <img 
                        src="{{ asset($item['foto']) }}" 
                        alt="{{ $item['nama'] ?? 'Foto Profil' }}" 
                        class="w-full h-full object-cover object-center"
                        onerror="this.onerror=null; this.src='https://placehold.co/400x540/4b5563/9ca3af?text=No+Photo';"
                    />
                @else
                    {{-- Placeholder Abu-abu jika foto belum tersedia --}}
                    <div class="flex flex-col items-center justify-center w-full h-full bg-gray-700/80 text-gray-300 font-semibold text-xs sm:text-sm p-4 text-center">
                        <svg class="w-10 h-10 mb-1 text-gray-400 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span>No Photo</span>
                    </div>
                @endif
            </div>
        </div>

        {{-- Sisi Kanan: Konten Informasi, QR CV, dan Quote --}}
        <div class="flex-1 flex flex-col justify-between min-w-0 py-0.5">
            
            {{-- Baris Atas: Info Teks & Box CV ATS --}}
            <div class="flex justify-between items-start gap-3">
                
                {{-- Data Anggota --}}
                <div class="flex-1 min-w-0 pr-1">
                    {{-- Nomor Urut (contoh: 02) --}}
                    <div class="text-4xl sm:text-5xl font-black tracking-tight text-[#e0d3ac] leading-none mb-1.5 sm:mb-2">
                        {{ $item['nomor'] ?? '00' }}
                    </div>

                    {{-- Nama Lengkap --}}
                    <h2 class="text-lg sm:text-[21px] font-extrabold leading-tight tracking-tight text-[#e0d3ac] mb-2 sm:mb-3 break-words">
                        {{ $item['nama'] ?? '-' }}
                    </h2>

                    {{-- TTL, Asal Kota, Sosmed --}}
                    <div class="space-y-0.5 text-xs sm:text-[13px] font-bold text-[#e0d3ac]/90 leading-snug">
                        @if (!empty($item['ttl']))
                            <div>{{ $item['ttl'] }}</div>
                        @endif
                        @if (!empty($item['asal']))
                            <div>{{ $item['asal'] }}</div>
                        @endif
                        @if (!empty($item['sosmed']))
                            <div>{{ $item['sosmed'] }}</div>
                        @endif
                    </div>
                </div>

                {{-- Box CV ATS (Header + QR Code) --}}
                <div class="shrink-0 bg-[#3f292d]/85 border border-[#55393e] rounded-[18px] p-2 sm:p-2.5 flex flex-col items-center shadow-lg">
                    <span class="text-xs sm:text-[13px] font-black uppercase tracking-wider text-[#e0d3ac] mb-1.5 sm:mb-2">
                        CV ATS
                    </span>
                    <div class="w-16 h-16 sm:w-20 sm:h-20 bg-white rounded-xl p-1 flex items-center justify-center overflow-hidden shadow-inner">
                        @if ($hasQr)
                            <img 
                                src="{{ asset($item['qr_cv']) }}" 
                                alt="QR Code CV ATS {{ $item['nama'] ?? '' }}" 
                                class="w-full h-full object-contain"
                                onerror="this.onerror=null; this.src='https://placehold.co/150x150/4b5563/ffffff?text=QR+Code';"
                            />
                        @else
                            {{-- Placeholder Abu-abu jika QR belum tersedia --}}
                            <div class="w-full h-full bg-gray-600 text-gray-200 text-[10px] font-bold flex flex-col items-center justify-center text-center p-1 rounded-lg">
                                <svg class="w-6 h-6 text-gray-300 mb-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                </svg>
                                <span>NO QR</span>
                            </div>
                        @endif
                    </div>
                </div>

            </div>

            {{-- Baris Bawah: Banner Quote --}}
            <div class="mt-3.5 sm:mt-2.5 w-full bg-[#e0d3ac] rounded-xl px-3.5 sm:px-4 py-2 sm:py-2.5 flex items-center shadow-sm">
                <p class="text-xs sm:text-[13px] font-bold text-[#342023] leading-snug truncate">
                    @php
                        $quote = trim($item['quote'] ?? '');
                        if ($quote !== '' && !str_starts_with($quote, '"') && !str_starts_with($quote, '“')) {
                            $quote = '“' . $quote . '”';
                        }
                    @endphp
                    {{ $quote }}
                </p>
            </div>

        </div>

    </div>
</div>

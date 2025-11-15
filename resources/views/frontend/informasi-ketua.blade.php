@extends('frontend.layouts.app')

@section('title', 'Informasi Ketua - ' . $settings->ranting_nama)

@section('content')
    <!-- Header Section -->
    <section class="bg-gradient-to-br from-purple-600 to-purple-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Informasi Ketua Ranting</h1>
                <p class="text-xl text-purple-100 max-w-2xl mx-auto">
                    Mengenal lebih dekat pemimpin Angkatan Muda
                </p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
                <!-- Profile Header -->
                <div class="bg-gradient-to-br from-purple-500 to-purple-700 px-8 py-12 text-white text-center">
                    <div class="flex justify-center mb-6">
                        @if($informasiKetua->foto)
                            <img src="{{ $informasiKetua->foto_url }}" 
                                 alt="{{ $informasiKetua->nama }}" 
                                 class="w-48 h-48 rounded-full object-cover shadow-2xl ring-8 ring-white/30">
                        @else
                            <div class="w-48 h-48 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center shadow-2xl ring-8 ring-white/30">
                                <span class="text-white text-6xl font-bold">
                                    {{ substr($informasiKetua->nama, 0, 1) }}
                                </span>
                            </div>
                        @endif
                    </div>
                    <h2 class="text-4xl font-extrabold mb-3">{{ $informasiKetua->nama }}</h2>
                    <p class="text-2xl font-semibold text-purple-100">Ketua Ranting</p>
                    <div class="mt-4 inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="font-semibold">{{ $informasiKetua->umur }} Tahun</span>
                    </div>
                </div>

                <!-- Profile Content -->
                <div class="p-8 md:p-12">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
                            <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Tentang Ketua
                        </h3>
                        <div class="prose prose-lg max-w-none text-gray-700">
                            {!! $informasiKetua->deskripsi !!}
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-purple-50 rounded-xl p-6 text-center border-2 border-purple-100">
                            <div class="text-4xl font-bold text-purple-600 mb-2">
                                {{ $informasiKetua->umur }}
                            </div>
                            <div class="text-gray-700 font-semibold">Tahun</div>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-6 text-center border-2 border-purple-100">
                            <div class="text-4xl font-bold text-purple-600 mb-2">
                                <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="text-gray-700 font-semibold">Ketua Ranting</div>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-6 text-center border-2 border-purple-100">
                            <div class="text-4xl font-bold text-purple-600 mb-2">
                                <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <div class="text-gray-700 font-semibold">Pemimpin</div>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center pt-8 border-t border-gray-200">
                        <a href="{{ route('pengurus-ranting') }}" 
                           class="inline-flex items-center justify-center gap-2 bg-purple-600 hover:bg-purple-700 text-white px-8 py-3 rounded-lg font-semibold transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            Lihat Pengurus Ranting
                        </a>
                        <a href="{{ route('home') }}" 
                           class="inline-flex items-center justify-center gap-2 bg-white border-2 border-purple-600 text-purple-600 hover:bg-purple-50 px-8 py-3 rounded-lg font-semibold transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            Kembali ke Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .prose {
            @apply text-gray-800;
        }
        .prose p {
            @apply mb-4 leading-relaxed;
        }
        .prose strong {
            @apply text-purple-800 font-semibold;
        }
    </style>
@endsection
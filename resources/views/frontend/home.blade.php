@extends('frontend.layouts.app')

@section('title', 'Home - ' . $settings->ranting_nama)

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-purple-600 via-purple-700 to-purple-900 text-white overflow-hidden">
        @if($settings->banner_desa)
            <div class="absolute inset-0 opacity-20">
                <img src="{{ $settings->banner_url }}" alt="Banner" class="w-full h-full object-cover">
            </div>
        @endif
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-32">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-extrabold mb-6 animate-fade-in">
                    Selamat Datang
                </h1>
                <p class="text-xl md:text-2xl text-purple-100 mb-8 max-w-3xl mx-auto">
                    Web Liturgi {{ $settings->ranting_nama }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('tata-kebaktian') }}" class="btn-primary">
                        Lihat Tata Kebaktian
                    </a>
                    <a href="{{ route('tentang') }}" class="btn-secondary">
                        Tentang Kami
                    </a>
                </div>
            </div>
        </div>

        <!-- Wave Decoration -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#F9FAFB"/>
            </svg>
        </div>
    </section>

    <!-- Informasi Singkat Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    {{ $informasiSingkat->judul }}
                </h2>
                <div class="w-24 h-1 bg-purple-600 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                @if($informasiSingkat->foto)
                    <div class="order-2 md:order-1">
                        <img src="{{ $informasiSingkat->foto_url }}" alt="{{ $informasiSingkat->judul }}" 
                             class="rounded-2xl shadow-2xl w-full h-auto object-cover">
                    </div>
                @endif
                
                <div class="{{ $informasiSingkat->foto ? 'order-1 md:order-2' : 'col-span-full' }}">
                    <div class="prose prose-lg max-w-none text-gray-700">
                        {!! Str::limit(strip_tags($informasiSingkat->deskripsi), 300) !!}
                    </div>
                    <a href="{{ route('tentang') }}" class="inline-flex items-center mt-6 text-purple-600 hover:text-purple-700 font-semibold group">
                        Selengkapnya
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi Ketua Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Ketua Ranting
                </h2>
                <div class="w-24 h-1 bg-purple-600 mx-auto rounded-full"></div>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="bg-gradient-to-br from-purple-50 to-white rounded-3xl shadow-xl p-8 md:p-12">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="flex-shrink-0">
                            @if($informasiKetua->foto)
                                <img src="{{ $informasiKetua->foto_url }}" alt="{{ $informasiKetua->nama }}" 
                                     class="w-48 h-48 rounded-full object-cover shadow-2xl ring-4 ring-purple-200">
                            @else
                                <div class="w-48 h-48 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center shadow-2xl ring-4 ring-purple-200">
                                    <span class="text-white text-5xl font-bold">{{ substr($informasiKetua->nama, 0, 1) }}</span>
                                </div>
                            @endif
                        </div>
                        
                        <div class="flex-1 text-center md:text-left">
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">
                                {{ $informasiKetua->nama }}
                            </h3>
                            <p class="text-purple-600 font-semibold mb-4">{{ $informasiKetua->umur }} Tahun</p>
                            <div class="prose max-w-none text-gray-700">
                                {!! Str::limit(strip_tags($informasiKetua->deskripsi), 200) !!}
                            </div>
                            <a href="{{ route('informasi-ketua') }}" class="inline-flex items-center mt-4 text-purple-600 hover:text-purple-700 font-semibold">
                                Lihat Profil Lengkap
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pengurus Preview Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Pengurus Ranting
                </h2>
                <div class="w-24 h-1 bg-purple-600 mx-auto rounded-full"></div>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    Tim pengurus yang berdedikasi melayani Angkatan Muda
                </p>
            </div>

            @if($pengurus->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
                    @foreach($pengurus as $p)
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-shadow duration-300 overflow-hidden group">
                            <div class="aspect-square overflow-hidden bg-gray-100">
                                @if($p->foto)
                                    <img src="{{ $p->foto_url }}" alt="{{ $p->nama }}" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                                        <span class="text-white text-6xl font-bold">{{ substr($p->nama, 0, 1) }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $p->nama }}</h3>
                                <p class="text-purple-600 font-semibold mb-1">{{ $p->jabatan }}</p>
                                <p class="text-gray-600 text-sm">{{ $p->umur }} Tahun</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center">
                    <a href="{{ route('pengurus-ranting') }}" class="btn-primary">
                        Lihat Semua Pengurus
                    </a>
                </div>
            @else
                <div class="text-center py-12">
                    <div class="text-gray-400 mb-4">
                        <svg class="w-24 h-24 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <p class="text-gray-600">Belum ada data pengurus</p>
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-br from-purple-600 to-purple-800 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Ingin Tahu Lebih Banyak?
            </h2>
            <p class="text-xl text-purple-100 mb-8">
                Jelajahi tata kebaktian dan informasi lengkap tentang Angkatan Muda
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('tata-kebaktian') }}" class="bg-white text-purple-700 px-8 py-4 rounded-full font-semibold hover:bg-purple-50 transition-all shadow-lg hover:shadow-xl">
                    Tata Kebaktian
                </a>
                <a href="{{ route('tentang') }}" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-purple-700 transition-all">
                    Tentang Kami
                </a>
            </div>
        </div>
    </section>

    <style>
        .btn-primary {
            @apply bg-white text-purple-700 px-8 py-4 rounded-full font-semibold hover:bg-purple-50 transition-all shadow-lg hover:shadow-xl inline-block;
        }
        .btn-secondary {
            @apply bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-purple-700 transition-all inline-block;
        }
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in {
            animation: fade-in 1s ease-out;
        }
    </style>
@endsection
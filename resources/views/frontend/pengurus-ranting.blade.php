@extends('frontend.layouts.app')

@section('title', 'Pengurus Ranting - ' . $settings->ranting_nama)

@section('content')
    <!-- Header Section -->
    <section class="bg-gradient-to-br from-purple-600 to-purple-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Pengurus Ranting</h1>
                <p class="text-xl text-purple-100 max-w-2xl mx-auto">
                    Tim yang berdedikasi melayani Angkatan Muda dengan sepenuh hati
                </p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($pengurus->count() > 0)
                <!-- Statistics -->
                <div class="mb-12 text-center">
                    <div class="inline-flex items-center gap-3 bg-white rounded-full shadow-lg px-8 py-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <div>
                            <span class="text-3xl font-bold text-purple-600">{{ $pengurus->count() }}</span>
                            <span class="text-gray-600 ml-2">Pengurus Aktif</span>
                        </div>
                    </div>
                </div>

                <!-- Pengurus Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    @foreach($pengurus as $p)
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                            <!-- Photo -->
                            <div class="aspect-square overflow-hidden bg-gradient-to-br from-purple-100 to-purple-200 relative">
                                @if($p->foto)
                                    <img src="{{ $p->foto_url }}" 
                                         alt="{{ $p->nama }}" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                                        <span class="text-white text-7xl font-bold">
                                            {{ substr($p->nama, 0, 1) }}
                                        </span>
                                    </div>
                                @endif
                                
                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>

                            <!-- Info -->
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2">
                                    {{ $p->nama }}
                                </h3>
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="inline-block bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-semibold">
                                        {{ $p->jabatan }}
                                    </span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="text-sm font-medium">{{ $p->umur }} Tahun</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- CTA Section -->
                <div class="mt-16 text-center bg-white rounded-2xl shadow-xl p-8 md:p-12">
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                        Ingin Bergabung?
                    </h3>
                    <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                        Kami selalu terbuka untuk anggota baru yang ingin melayani di Angkatan Muda
                    </p>
                    <a href="{{ route('home') }}" 
                       class="inline-flex items-center gap-2 bg-purple-600 hover:bg-purple-700 text-white px-8 py-4 rounded-full font-semibold transition-all shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Kembali ke Home
                    </a>
                </div>

            @else
                <!-- Empty State -->
                <div class="text-center py-16">
                    <div class="inline-flex items-center justify-center w-32 h-32 bg-purple-100 rounded-full mb-6">
                        <svg class="w-16 h-16 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-3">Belum Ada Data Pengurus</h3>
                    <p class="text-gray-600 mb-8 text-lg">Data pengurus ranting akan segera ditambahkan</p>
                    <a href="{{ route('home') }}" 
                       class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold text-lg group">
                        <svg class="w-6 h-6 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Kembali ke Home
                    </a>
                </div>
            @endif
        </div>
    </section>
@endsection
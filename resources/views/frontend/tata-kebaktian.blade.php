@extends('frontend.layouts.app')

@section('title', 'Tata Kebaktian - ' . $settings->ranting_nama)

@section('content')
    <!-- Header Section -->
    <section class="bg-gradient-to-br from-purple-600 to-purple-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Tata Kebaktian</h1>
                <p class="text-xl text-purple-100 max-w-2xl mx-auto">
                    Panduan liturgi untuk kebaktian Angkatan Muda
                </p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($tataKebaktian->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($tataKebaktian as $liturgi)
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                            <!-- Header Card -->
                            <div class="bg-gradient-to-br from-purple-500 to-purple-700 p-6 text-white">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold">
                                        Model {{ $liturgi->model }}
                                    </span>
                                    @if($liturgi->file_pdf)
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                        </svg>
                                    @endif
                                </div>
                                <h3 class="text-2xl font-bold">{{ $liturgi->judul }}</h3>
                            </div>

                            <!-- Body Card -->
                            <div class="p-6">
                                <div class="prose prose-sm max-w-none text-gray-700 mb-6 line-clamp-3">
                                    {!! Str::limit(strip_tags($liturgi->isi), 150) !!}
                                </div>

                                <div class="flex flex-col gap-3">
                                    <a href="{{ route('tata-kebaktian.detail', $liturgi->id) }}" 
                                       class="w-full bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg font-semibold text-center transition-all group-hover:shadow-lg">
                                        Lihat Detail
                                    </a>

                                    @if($liturgi->file_pdf)
                                        <a href="{{ $liturgi->pdf_url }}" 
                                           target="_blank"
                                           class="w-full bg-white border-2 border-purple-600 text-purple-600 hover:bg-purple-50 px-6 py-3 rounded-lg font-semibold text-center transition-all flex items-center justify-center gap-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                            Download PDF
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Empty State -->
                <div class="text-center py-16">
                    <div class="inline-flex items-center justify-center w-24 h-24 bg-purple-100 rounded-full mb-6">
                        <svg class="w-12 h-12 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Belum Ada Tata Kebaktian</h3>
                    <p class="text-gray-600 mb-6">Tata kebaktian akan segera ditambahkan oleh admin</p>
                    <a href="{{ route('home') }}" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Kembali ke Home
                    </a>
                </div>
            @endif
        </div>
    </section>
@endsection
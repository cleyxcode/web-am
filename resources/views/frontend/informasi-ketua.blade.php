@extends('frontend.layouts.app')

@section('title', 'Informasi Ketua - ' . $settings->ranting_nama)

@section('content')
    <!-- Header Section dengan Particles -->
    <section class="relative bg-gradient-to-br from-purple-600 to-purple-800 text-white py-16 overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="ketua-bg-particle particle-1"></div>
            <div class="ketua-bg-particle particle-2"></div>
            <div class="ketua-bg-particle particle-3"></div>
            <div class="ketua-bg-particle particle-4"></div>
            <div class="ketua-bg-particle particle-5"></div>
        </div>
        
        <!-- Geometric Patterns -->
        <div class="absolute inset-0 opacity-10">
            <div class="geometric-pattern"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <!-- Crown Icon Animation -->
                <div class="inline-block mb-6 crown-container">
                    <svg class="w-16 h-16 mx-auto text-yellow-300 crown-icon" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.715-5.349L11 6.477V16h2a1 1 0 110 2H7a1 1 0 110-2h2V6.477L6.237 7.582l1.715 5.349a1 1 0 01-.285 1.05A3.989 3.989 0 015 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.788l1.599.799L9 4.323V3a1 1 0 011-1z" clip-rule="evenodd"/>
                    </svg>
                    <div class="crown-glow"></div>
                </div>
                
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4 animate-title-slide">
                    Informasi Ketua Ranting
                </h1>
                <p class="text-xl text-purple-100 max-w-2xl mx-auto animate-subtitle-fade" style="animation-delay: 0.2s">
                    Mengenal lebih dekat pemimpin Angkatan Muda
                </p>
                
                <!-- Decorative Line -->
                <div class="flex justify-center mt-6">
                    <div class="decorative-line"></div>
                </div>
            </div>
        </div>

        <!-- Wave Bottom -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="wave-bottom" viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 100L60 88.3C120 76.7 240 53.3 360 41.7C480 30 600 30 720 35C840 40 960 50 1080 55C1200 60 1320 60 1380 60L1440 60V100H1380C1320 100 1200 100 1080 100C960 100 840 100 720 100C600 100 480 100 360 100C240 100 120 100 60 100H0Z" fill="#F9FAFB"/>
            </svg>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="profile-card bg-white rounded-3xl shadow-2xl overflow-hidden">
                <!-- Profile Header -->
                <div class="profile-header bg-gradient-to-br from-purple-500 to-purple-700 px-8 py-12 text-white text-center relative overflow-hidden">
                    <!-- Background Animation -->
                    <div class="header-bg-animation"></div>
                    
                    <!-- Spotlight Effect -->
                    <div class="spotlight"></div>
                    
                    <div class="flex justify-center mb-6 relative z-10">
                        <div class="profile-photo-wrapper">
                            @if($informasiKetua->foto)
                                <img src="{{ $informasiKetua->foto_url }}" 
                                     alt="{{ $informasiKetua->nama }}" 
                                     class="profile-photo w-48 h-48 rounded-full object-cover shadow-2xl ring-8 ring-white/30">
                            @else
                                <div class="profile-photo w-48 h-48 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center shadow-2xl ring-8 ring-white/30">
                                    <span class="text-white text-6xl font-bold">
                                        {{ substr($informasiKetua->nama, 0, 1) }}
                                    </span>
                                </div>
                            @endif
                            
                            <!-- Rotating Ring -->
                            <div class="photo-ring ring-1"></div>
                            <div class="photo-ring ring-2"></div>
                            <div class="photo-ring ring-3"></div>
                        </div>
                    </div>
                    
                    <h2 class="text-4xl font-extrabold mb-3 name-title relative z-10">
                        {{ $informasiKetua->nama }}
                    </h2>
                    <p class="text-2xl font-semibold text-purple-100 position-badge">Ketua Ranting</p>
                    
                    <div class="mt-4 inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-6 py-3 rounded-full age-badge">
                        <svg class="w-5 h-5 calendar-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="font-semibold">{{ $informasiKetua->umur }} Tahun</span>
                    </div>
                </div>

                <!-- Profile Content -->
                <div class="p-8 md:p-12">
                    <div class="mb-8 content-section">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3 section-title">
                            <svg class="w-7 h-7 text-purple-600 icon-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Tentang Ketua
                        </h3>
                        <div class="prose prose-lg max-w-none text-gray-700 description-text">
                            {!! $informasiKetua->deskripsi !!}
                        </div>
                    </div>

                    <!-- Stats Cards dengan Counter Animation -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="stat-card stat-card-1">
                            <div class="stat-icon-wrapper">
                                <div class="text-4xl font-bold text-purple-600 mb-2 counter-age" data-target="{{ $informasiKetua->umur }}">
                                    0
                                </div>
                            </div>
                            <div class="text-gray-700 font-semibold">Tahun</div>
                            <div class="stat-progress"></div>
                        </div>
                        
                        <div class="stat-card stat-card-2">
                            <div class="stat-icon-wrapper">
                                <div class="text-4xl font-bold text-purple-600 mb-2">
                                    <svg class="w-12 h-12 mx-auto check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-gray-700 font-semibold">Ketua Ranting</div>
                            <div class="stat-progress"></div>
                        </div>
                        
                        <div class="stat-card stat-card-3">
                            <div class="stat-icon-wrapper">
                                <div class="text-4xl font-bold text-purple-600 mb-2">
                                    <svg class="w-12 h-12 mx-auto leader-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-gray-700 font-semibold">Pemimpin</div>
                            <div class="stat-progress"></div>
                        </div>
                    </div>

                    <!-- Navigation dengan Magnetic Effect -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center pt-8 border-t border-gray-200 nav-buttons">
                        <a href="{{ route('pengurus-ranting') }}" 
                           class="btn-primary-nav magnetic-btn">
                            <span class="btn-content">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                Lihat Pengurus Ranting
                            </span>
                            <div class="btn-ripple"></div>
                        </a>
                        
                        <a href="{{ route('home') }}" 
                           class="btn-secondary-nav magnetic-btn">
                            <span class="btn-content">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                Kembali ke Home
                            </span>
                            <div class="btn-ripple"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Header Background Particles */
        .ketua-bg-particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
        }
        
        .particle-1 {
            width: 300px;
            height: 300px;
            top: -150px;
            left: -100px;
            animation: float-particle 15s infinite ease-in-out;
        }
        
        .particle-2 {
            width: 200px;
            height: 200px;
            top: 20%;
            right: -50px;
            animation: float-particle 18s infinite ease-in-out reverse;
            animation-delay: 2s;
        }
        
        .particle-3 {
            width: 150px;
            height: 150px;
            bottom: 10%;
            left: 10%;
            animation: float-particle 20s infinite ease-in-out;
            animation-delay: 4s;
        }
        
        .particle-4 {
            width: 250px;
            height: 250px;
            top: 50%;
            left: 50%;
            animation: float-particle 22s infinite ease-in-out;
            animation-delay: 1s;
        }
        
        .particle-5 {
            width: 180px;
            height: 180px;
            bottom: 20%;
            right: 20%;
            animation: float-particle 16s infinite ease-in-out reverse;
            animation-delay: 3s;
        }
        
        @keyframes float-particle {
            0%, 100% {
                transform: translate(0, 0) scale(1);
                opacity: 0.3;
            }
            25% {
                transform: translate(50px, -50px) scale(1.1);
                opacity: 0.5;
            }
            50% {
                transform: translate(-30px, 30px) scale(0.9);
                opacity: 0.4;
            }
            75% {
                transform: translate(30px, 50px) scale(1.05);
                opacity: 0.6;
            }
        }

        /* Geometric Pattern */
        .geometric-pattern {
            background-image: 
                repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255,255,255,.05) 35px, rgba(255,255,255,.05) 70px),
                repeating-linear-gradient(-45deg, transparent, transparent 35px, rgba(255,255,255,.05) 35px, rgba(255,255,255,.05) 70px);
            height: 100%;
            animation: pattern-move 30s linear infinite;
        }
        
        @keyframes pattern-move {
            0% { transform: translate(0, 0); }
            100% { transform: translate(70px, 70px); }
        }

        /* Crown Animation */
        .crown-container {
            position: relative;
            animation: crown-entrance 1s ease-out;
        }
        
        @keyframes crown-entrance {
            0% {
                opacity: 0;
                transform: translateY(-30px) rotate(-10deg);
            }
            60% {
                transform: translateY(5px) rotate(5deg);
            }
            100% {
                opacity: 1;
                transform: translateY(0) rotate(0deg);
            }
        }
        
        .crown-icon {
            animation: crown-float 3s ease-in-out infinite;
            filter: drop-shadow(0 0 20px rgba(253, 224, 71, 0.5));
        }
        
        @keyframes crown-float {
            0%, 100% {
                transform: translateY(0) rotate(-5deg);
            }
            50% {
                transform: translateY(-10px) rotate(5deg);
            }
        }
        
        .crown-glow {
            position: absolute;
            inset: -20px;
            background: radial-gradient(circle, rgba(253, 224, 71, 0.3) 0%, transparent 70%);
            animation: glow-pulse 2s ease-in-out infinite;
        }
        
        @keyframes glow-pulse {
            0%, 100% {
                opacity: 0.5;
                transform: scale(1);
            }
            50% {
                opacity: 1;
                transform: scale(1.2);
            }
        }

        /* Title Animations */
        @keyframes title-slide {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-title-slide {
            animation: title-slide 0.8s ease-out 0.3s both;
        }
        
        @keyframes subtitle-fade {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-subtitle-fade {
            animation: subtitle-fade 0.8s ease-out both;
        }

        /* Decorative Line */
        .decorative-line {
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.8), transparent);
            animation: line-expand 1.5s ease-out 0.6s forwards;
        }
        
        @keyframes line-expand {
            to {
                width: 150px;
            }
        }

        /* Wave Bottom */
        .wave-bottom {
            animation: wave-flow 8s ease-in-out infinite;
        }
        
        @keyframes wave-flow {
            0%, 100% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(-20px);
            }
        }

        /* Profile Card Entrance */
        .profile-card {
            animation: card-rise 1s ease-out;
        }
        
        @keyframes card-rise {
            from {
                opacity: 0;
                transform: translateY(50px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Profile Header Effects */
        .profile-header {
            position: relative;
        }
        
        .header-bg-animation {
            position: absolute;
            inset: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
            animation: bg-shimmer 3s infinite;
        }
        
        @keyframes bg-shimmer {
            0% {
                transform: translateX(-100%) translateY(-100%) rotate(45deg);
            }
            100% {
                transform: translateX(100%) translateY(100%) rotate(45deg);
            }
        }
        
        .spotlight {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%);
            transform: translate(-50%, -50%);
            animation: spotlight-pulse 4s ease-in-out infinite;
        }
        
        @keyframes spotlight-pulse {
            0%, 100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.5;
            }
            50% {
                transform: translate(-50%, -50%) scale(1.2);
                opacity: 0.8;
            }
        }

        /* Profile Photo */
        .profile-photo-wrapper {
            position: relative;
            animation: photo-zoom-in 1s ease-out 0.5s both;
        }
        
        @keyframes photo-zoom-in {
            from {
                opacity: 0;
                transform: scale(0.5) rotate(-10deg);
            }
            to {
                opacity: 1;
                transform: scale(1) rotate(0deg);
            }
        }
        
        .profile-photo {
            position: relative;
            z-index: 10;
            transition: transform 0.5s ease;
        }
        
        .profile-photo-wrapper:hover .profile-photo {
            transform: scale(1.05) rotate(2deg);
        }
        
        .photo-ring {
            position: absolute;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
        }
        
        .ring-1 {
            inset: -10px;
            animation: ring-rotate 10s linear infinite;
        }
        
        .ring-2 {
            inset: -20px;
            animation: ring-rotate 15s linear infinite reverse;
        }
        
        .ring-3 {
            inset: -30px;
            animation: ring-rotate 20s linear infinite;
            opacity: 0.5;
        }
        
        @keyframes ring-rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /* Name Title */
        .name-title {
            animation: name-appear 0.8s ease-out 0.8s both;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        
        @keyframes name-appear {
            from {
                opacity: 0;
                transform: scale(0.9);
                filter: blur(5px);
            }
            to {
                opacity: 1;
                transform: scale(1);
                filter: blur(0);
            }
        }

        /* Position Badge */
        .position-badge {
            animation: badge-slide 0.8s ease-out 1s both;
        }
        
        @keyframes badge-slide {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Age Badge */
        .age-badge {
            animation: badge-pop 0.6s ease-out 1.2s both;
        }
        
        @keyframes badge-pop {
            0% {
                opacity: 0;
                transform: scale(0);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        .calendar-icon {
            animation: calendar-wiggle 1s ease-in-out infinite;
        }
        
        @keyframes calendar-wiggle {
            0%, 100% {
                transform: rotate(-5deg);
            }
            50% {
                transform: rotate(5deg);
            }
        }

        /* Content Section */
        .content-section {
            animation: content-fade-in 1s ease-out;
        }
        
        @keyframes content-fade-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .section-title {
            position: relative;
            padding-bottom: 10px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #7c3aed, #a855f7);
            animation: title-underline 1s ease-out 0.5s forwards;
        }
        
        @keyframes title-underline {
            to {
                width: 100px;
            }
        }
        
        .icon-bounce {
            animation: icon-bounce-anim 2s ease-in-out infinite;
        }
        
        @keyframes icon-bounce-anim {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }

        /* Description Text */
        .description-text {
            animation: text-reveal 1.2s ease-out 0.3s both;
        }
        
        @keyframes text-reveal {
            from {
                opacity: 0;
                filter: blur(10px);
            }
            to {
                opacity: 1;
                filter: blur(0);
            }
        }

        .prose {
            @apply text-gray-800;
        }
        .prose p {
            @apply mb-4 leading-relaxed;
        }
        .prose strong {
            @apply text-purple-800 font-semibold;
        }

        /* Stats Cards */
        .stat-card {
            background: linear-gradient(135deg, #f3e8ff 0%, #fff 100%);
            border-radius: 0.75rem;
            padding: 1.5rem;
            text-align: center;
            border: 2px solid #e9d5ff;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(30px) scale(0.9);
            animation: stat-card-appear 0.8s ease-out forwards;
        }
        
        .stat-card-1 { animation-delay: 0.2s; }
        .stat-card-2 { animation-delay: 0.4s; }
        .stat-card-3 { animation-delay: 0.6s; }
        
        @keyframes stat-card-appear {
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(124, 58, 237, 0.2);
            border-color: #a855f7;
        }
        
        .stat-icon-wrapper {
            animation: icon-pop 0.6s ease-out 0.8s both;
        }
        
        @keyframes icon-pop {
            0% {
                transform: scale(0);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }
        
        .stat-progress {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            width: 0;
            background: linear-gradient(90deg, #7c3aed, #a855f7);
            animation: progress-fill 1.5s ease-out 1s forwards;
        }
        
        @keyframes progress-fill {
            to {
                width: 100%;
            }
        }
        
        .check-icon {
            animation: check-draw 1s ease-out 1.2s both;
        }
        
        @keyframes check-draw {
            from {
                stroke-dasharray: 100;
                stroke-dashoffset: 100;
            }
            to {
                stroke-dasharray: 100;
                stroke-dashoffset: 0;
            }
        }
        
        .leader-icon {
            animation: leader-scale 1s ease-out 1.4s both;
        }
        
        @keyframes leader-scale {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
        }

        /* Navigation Buttons */
        .nav-buttons {
            animation: nav-fade-in 1s ease-out 1s both;
        }
        
        @keyframes nav-fade-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .magnetic-btn {
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .btn-primary-nav {
            background: #7c3aed;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .btn-primary-nav:hover {
            background: #6d28d9;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(124, 58, 237, 0.4);
        }
        
        .btn-secondary-nav {
            background: white;
            border: 2px solid #7c3aed;
            color: #7c3aed;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .btn-secondary-nav:hover {
            background: #f3e8ff;
            border-color: #6d28d9;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(124, 58, 237, 0.2);
        }
        
        .btn-content {
            position: relative;
            z-index: 10;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-ripple {
            position: absolute;
            inset: 0;
            background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
            opacity: 0;
            transform: scale(0);
            transition: all 0.6s ease;
        }
        
        .magnetic-btn:active .btn-ripple {
            opacity: 1;
            transform: scale(2);
        }

        /* Hover Effects for Buttons */
        .magnetic-btn svg {
            transition: transform 0.3s ease;
        }
        
        .btn-primary-nav:hover svg {
            transform: scale(1.2) rotate(5deg);
        }
        
        .btn-secondary-nav:hover svg {
            transform: scale(1.2) rotate(-5deg);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .profile-photo-wrapper {
                transform: scale(0.9);
            }
            
            .stat-card {
                margin-bottom: 1rem;
            }
            
            .ketua-bg-particle {
                display: none;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Selection Style */
        ::selection {
            background: #a855f7;
            color: white;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Counter Animation for Age
            const ageCounter = document.querySelector('.counter-age');
            if (ageCounter) {
                const target = parseInt(ageCounter.getAttribute('data-target'));
                let current = 0;
                const increment = target / 60;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        ageCounter.textContent = target;
                        clearInterval(timer);
                    } else {
                        ageCounter.textContent = Math.floor(current);
                    }
                }, 30);
            }

            // Magnetic Button Effect
            const magneticBtns = document.querySelectorAll('.magnetic-btn');
            magneticBtns.forEach(btn => {
                btn.addEventListener('mousemove', (e) => {
                    const rect = btn.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;
                    
                    btn.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px) translateY(-3px)`;
                });
                
                btn.addEventListener('mouseleave', () => {
                    btn.style.transform = 'translate(0, 0)';
                });
            });

            // Parallax Effect on Profile Photo
            const profilePhoto = document.querySelector('.profile-photo-wrapper');
            if (profilePhoto) {
                window.addEventListener('scroll', () => {
                    const scrolled = window.pageYOffset;
                    const rate = scrolled * 0.3;
                    profilePhoto.style.transform = `translateY(${rate}px)`;
                });
            }

            // Intersection Observer for Animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, observerOptions);
            
            // Observe all stat cards
            document.querySelectorAll('.stat-card').forEach(card => {
                observer.observe(card);
            });

            // Add ripple effect on button click
            magneticBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const ripple = this.querySelector('.btn-ripple');
                    ripple.style.left = e.offsetX + 'px';
                    ripple.style.top = e.offsetY + 'px';
                });
            });

            // Smooth reveal for content sections
            const contentSections = document.querySelectorAll('.content-section');
            contentSections.forEach((section, index) => {
                section.style.animationDelay = `${index * 0.2}s`;
                observer.observe(section);
            });

            // Add hover effect to stat cards
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.3s ease';
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Add tilt effect to profile card
            const profileCard = document.querySelector('.profile-card');
            if (profileCard) {
                profileCard.addEventListener('mousemove', (e) => {
                    const rect = profileCard.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = (y - centerY) / 50;
                    const rotateY = (centerX - x) / 50;
                    
                    profileCard.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
                });
                
                profileCard.addEventListener('mouseleave', () => {
                    profileCard.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
                });
            }

            // Animate description text on scroll
            const descriptionText = document.querySelector('.description-text');
            if (descriptionText) {
                const paragraphs = descriptionText.querySelectorAll('p');
                paragraphs.forEach((p, index) => {
                    p.style.opacity = '0';
                    p.style.transform = 'translateY(20px)';
                    p.style.transition = 'all 0.6s ease';
                    p.style.transitionDelay = `${index * 0.1}s`;
                    
                    observer.observe(p);
                });
                
                const textObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }
                    });
                }, observerOptions);
                
                paragraphs.forEach(p => textObserver.observe(p));
            }

            // Add loading animation
            window.addEventListener('load', () => {
                document.body.style.opacity = '0';
                setTimeout(() => {
                    document.body.style.transition = 'opacity 0.5s ease';
                    document.body.style.opacity = '1';
                }, 100);
            });
        });
    </script>
@endsection
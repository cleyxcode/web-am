@extends('frontend.layouts.app')

@section('title', 'Tata Kebaktian - ' . $settings->ranting_nama)

@section('content')
    <!-- Header Section dengan Animated Background -->
    <section class="relative bg-gradient-to-br from-purple-600 to-purple-800 text-white py-16 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="liturgy-bg-shape shape-1"></div>
            <div class="liturgy-bg-shape shape-2"></div>
            <div class="liturgy-bg-shape shape-3"></div>
        </div>
        
        <!-- Animated Grid Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="grid-pattern"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <div class="inline-block mb-6 animate-bounce-in">
                    <svg class="w-16 h-16 mx-auto text-purple-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4 animate-slide-down">
                    Tata Kebaktian
                </h1>
                <p class="text-xl text-purple-100 max-w-2xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s">
                    Panduan liturgi untuk kebaktian Angkatan Muda
                </p>
                
                <!-- Decorative Line -->
                <div class="flex justify-center mt-8">
                    <div class="w-24 h-1 bg-purple-300 rounded-full animate-expand-width"></div>
                </div>
            </div>
        </div>

        <!-- Wave Decoration -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="wave-svg" viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 100L60 88.3C120 76.7 240 53.3 360 41.7C480 30 600 30 720 35C840 40 960 50 1080 55C1200 60 1320 60 1380 60L1440 60V100H1380C1320 100 1200 100 1080 100C960 100 840 100 720 100C600 100 480 100 360 100C240 100 120 100 60 100H0Z" fill="#F9FAFB"/>
            </svg>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($tataKebaktian->count() > 0)
                <!-- Stats Counter Animation -->
                <div class="text-center mb-12 animate-fade-in">
                    <div class="inline-flex items-center gap-2 bg-white px-6 py-3 rounded-full shadow-lg">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                        </svg>
                        <span class="text-gray-700 font-semibold">
                            <span class="counter-number text-purple-600" data-target="{{ $tataKebaktian->count() }}">0</span> 
                            Model Liturgi Tersedia
                        </span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($tataKebaktian as $index => $liturgi)
                        <div class="liturgy-card" data-index="{{ $index }}">
                            <div class="liturgy-card-inner">
                                <!-- Header Card dengan Gradient Animation -->
                                <div class="liturgy-header bg-gradient-to-br from-purple-500 to-purple-700 p-6 text-white relative overflow-hidden">
                                    <!-- Animated Shine Effect -->
                                    <div class="header-shine"></div>
                                    
                                    <div class="flex items-center justify-between mb-4 relative z-10">
                                        <span class="badge-model bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold">
                                            Model {{ $liturgi->model }}
                                        </span>
                                        @if($liturgi->file_pdf)
                                            <div class="pdf-icon-wrapper">
                                                <svg class="w-6 h-6 pdf-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                                </svg>
                                                <div class="pdf-pulse"></div>
                                            </div>
                                        @endif
                                    </div>
                                    <h3 class="text-2xl font-bold relative z-10">{{ $liturgi->judul }}</h3>
                                    
                                    <!-- Corner Decoration -->
                                    <div class="corner-decoration"></div>
                                </div>

                                <!-- Body Card -->
                                <div class="p-6 bg-white">
                                    <!-- Content Preview dengan Typing Effect -->
                                    <div class="prose prose-sm max-w-none text-gray-700 mb-6 line-clamp-3 content-preview">
                                        {!! Str::limit(strip_tags($liturgi->isi), 150) !!}
                                    </div>

                                    <!-- Action Buttons dengan Hover Effects -->
                                    <div class="flex flex-col gap-3">
                                        <a href="{{ route('tata-kebaktian.detail', $liturgi->id) }}" 
                                           class="btn-detail group relative overflow-hidden">
                                            <span class="relative z-10 flex items-center justify-center gap-2">
                                                Lihat Detail
                                                <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                                </svg>
                                            </span>
                                            <div class="btn-detail-bg"></div>
                                        </a>

                                        @if($liturgi->file_pdf)
                                            <a href="{{ $liturgi->pdf_url }}" 
                                               target="_blank"
                                               class="btn-pdf group">
                                                <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                                </svg>
                                                <span class="relative">
                                                    Download PDF
                                                    <span class="download-indicator"></span>
                                                </span>
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <!-- Card Glow Effect -->
                                <div class="card-glow"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Empty State dengan Animation -->
                <div class="empty-state">
                    <div class="empty-icon-wrapper">
                        <svg class="w-12 h-12 text-purple-600 empty-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        <div class="empty-icon-ring"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2 animate-fade-in">
                        Belum Ada Tata Kebaktian
                    </h3>
                    <p class="text-gray-600 mb-6 animate-fade-in" style="animation-delay: 0.2s">
                        Tata kebaktian akan segera ditambahkan oleh admin
                    </p>
                    <a href="{{ route('home') }}" class="btn-back group animate-fade-in" style="animation-delay: 0.4s">
                        <svg class="w-5 h-5 mr-2 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Kembali ke Home
                    </a>
                </div>
            @endif
        </div>
    </section>

    <style>
        /* Header Background Animations */
        .liturgy-bg-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(40px);
        }
        
        .shape-1 {
            width: 400px;
            height: 400px;
            top: -200px;
            left: -100px;
            animation: float-diagonal 20s infinite ease-in-out;
        }
        
        .shape-2 {
            width: 300px;
            height: 300px;
            top: 50%;
            right: -150px;
            animation: float-diagonal 15s infinite ease-in-out reverse;
            animation-delay: 2s;
        }
        
        .shape-3 {
            width: 200px;
            height: 200px;
            bottom: -100px;
            left: 30%;
            animation: float-diagonal 18s infinite ease-in-out;
            animation-delay: 4s;
        }
        
        @keyframes float-diagonal {
            0%, 100% {
                transform: translate(0, 0) rotate(0deg);
            }
            25% {
                transform: translate(30px, -30px) rotate(90deg);
            }
            50% {
                transform: translate(-20px, 20px) rotate(180deg);
            }
            75% {
                transform: translate(20px, 30px) rotate(270deg);
            }
        }

        /* Grid Pattern Animation */
        .grid-pattern {
            background-image: 
                linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            height: 100%;
            animation: grid-move 20s linear infinite;
        }
        
        @keyframes grid-move {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(50px, 50px);
            }
        }

        /* Bounce In Animation */
        @keyframes bounce-in {
            0% {
                opacity: 0;
                transform: scale(0.3) translateY(-50px);
            }
            50% {
                transform: scale(1.05) translateY(0);
            }
            70% {
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        .animate-bounce-in {
            animation: bounce-in 1s ease-out;
        }

        /* Slide Down Animation */
        @keyframes slide-down {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-slide-down {
            animation: slide-down 0.8s ease-out 0.2s both;
        }

        /* Fade In Up */
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out both;
        }

        /* Expand Width */
        @keyframes expand-width {
            from {
                width: 0;
                opacity: 0;
            }
            to {
                width: 6rem;
                opacity: 1;
            }
        }
        
        .animate-expand-width {
            animation: expand-width 1s ease-out 0.5s both;
        }

        /* Wave SVG Animation */
        .wave-svg {
            animation: wave-move 5s ease-in-out infinite;
        }
        
        @keyframes wave-move {
            0%, 100% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(-20px);
            }
        }

        /* Counter Animation */
        .counter-number {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .animate-fade-in {
            animation: fade-in 1s ease-out;
        }
        
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Liturgy Card Animations */
        .liturgy-card {
            opacity: 0;
            transform: translateY(30px) scale(0.95);
            animation: card-appear 0.6s ease-out forwards;
        }
        
        .liturgy-card:nth-child(1) { animation-delay: 0.1s; }
        .liturgy-card:nth-child(2) { animation-delay: 0.2s; }
        .liturgy-card:nth-child(3) { animation-delay: 0.3s; }
        .liturgy-card:nth-child(4) { animation-delay: 0.4s; }
        .liturgy-card:nth-child(5) { animation-delay: 0.5s; }
        .liturgy-card:nth-child(6) { animation-delay: 0.6s; }
        
        @keyframes card-appear {
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .liturgy-card-inner {
            background: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            height: 100%;
        }
        
        .liturgy-card:hover .liturgy-card-inner {
            transform: translateY(-10px) rotateX(2deg);
            box-shadow: 0 20px 40px rgba(124, 58, 237, 0.3);
        }

        /* Header Shine Effect */
        .liturgy-header {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .header-shine {
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent 30%,
                rgba(255, 255, 255, 0.1) 50%,
                transparent 70%
            );
            transform: rotate(45deg);
            animation: shine-sweep 3s infinite;
        }
        
        @keyframes shine-sweep {
            0% {
                transform: translateX(-100%) translateY(-100%) rotate(45deg);
            }
            100% {
                transform: translateX(100%) translateY(100%) rotate(45deg);
            }
        }

        /* Badge Model Animation */
        .badge-model {
            animation: badge-pulse 2s infinite;
        }
        
        @keyframes badge-pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        /* PDF Icon Animation */
        .pdf-icon-wrapper {
            position: relative;
        }
        
        .pdf-icon {
            animation: icon-bounce 2s infinite;
        }
        
        @keyframes icon-bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }
        
        .pdf-pulse {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            animation: pulse-ring 2s infinite;
        }
        
        @keyframes pulse-ring {
            0% {
                transform: translate(-50%, -50%) scale(0.8);
                opacity: 1;
            }
            100% {
                transform: translate(-50%, -50%) scale(1.5);
                opacity: 0;
            }
        }

        /* Corner Decoration */
        .corner-decoration {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: radial-gradient(circle at bottom right, rgba(255,255,255,0.2) 0%, transparent 70%);
            animation: corner-glow 3s infinite alternate;
        }
        
        @keyframes corner-glow {
            0% { opacity: 0.3; }
            100% { opacity: 0.7; }
        }

        /* Button Detail */
        .btn-detail {
            width: 100%;
            background: #7c3aed;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-detail-bg {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }
        
        .btn-detail:hover .btn-detail-bg {
            left: 100%;
        }
        
        .btn-detail:hover {
            background: #6d28d9;
            box-shadow: 0 10px 25px rgba(124, 58, 237, 0.4);
            transform: translateY(-2px);
        }

        /* Button PDF */
        .btn-pdf {
            width: 100%;
            background: white;
            border: 2px solid #7c3aed;
            color: #7c3aed;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            position: relative;
        }
        
        .btn-pdf:hover {
            background: #f3e8ff;
            border-color: #6d28d9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(124, 58, 237, 0.2);
        }
        
        .download-indicator {
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #7c3aed;
            transition: width 0.3s ease;
        }
        
        .btn-pdf:hover .download-indicator {
            width: 100%;
        }

        /* Card Glow Effect */
        .card-glow {
            position: absolute;
            inset: -2px;
            background: linear-gradient(45deg, #7c3aed, #a855f7, #7c3aed);
            border-radius: 1rem;
            opacity: 0;
            z-index: -1;
            transition: opacity 0.3s ease;
            filter: blur(10px);
        }
        
        .liturgy-card:hover .card-glow {
            opacity: 0.6;
            animation: glow-rotate 2s linear infinite;
        }
        
        @keyframes glow-rotate {
            0% {
                filter: blur(10px) hue-rotate(0deg);
            }
            100% {
                filter: blur(10px) hue-rotate(360deg);
            }
        }

        /* Empty State Animations */
        .empty-state {
            text-align: center;
            padding: 4rem 1rem;
        }
        
        .empty-icon-wrapper {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 6rem;
            height: 6rem;
            background: #f3e8ff;
            border-radius: 50%;
            margin-bottom: 1.5rem;
            position: relative;
            animation: icon-float 3s ease-in-out infinite;
        }
        
        @keyframes icon-float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        
        .empty-icon {
            animation: icon-swing 2s ease-in-out infinite;
        }
        
        @keyframes icon-swing {
            0%, 100% {
                transform: rotate(-5deg);
            }
            50% {
                transform: rotate(5deg);
            }
        }
        
        .empty-icon-ring {
            position: absolute;
            inset: -10px;
            border: 2px solid #e9d5ff;
            border-radius: 50%;
            animation: ring-pulse 2s ease-in-out infinite;
        }
        
        @keyframes ring-pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.5;
            }
        }

        /* Button Back */
        .btn-back {
            display: inline-flex;
            align-items: center;
            color: #7c3aed;
            font-weight: 600;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
        }
        
        .btn-back:hover {
            color: #6d28d9;
            background: #f3e8ff;
            transform: translateX(-5px);
        }

        /* Content Preview Animation */
        .content-preview {
            animation: text-fade-in 0.8s ease-out 0.3s both;
        }
        
        @keyframes text-fade-in {
            from {
                opacity: 0;
                filter: blur(5px);
            }
            to {
                opacity: 1;
                filter: blur(0);
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .liturgy-card:hover .liturgy-card-inner {
                transform: translateY(-5px);
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Counter Animation
            const counter = document.querySelector('.counter-number');
            if (counter) {
                const target = parseInt(counter.getAttribute('data-target'));
                let current = 0;
                const increment = target / 50;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        counter.textContent = target;
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.floor(current);
                    }
                }, 30);
            }

            // Intersection Observer for Card Animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, observerOptions);
            
            document.querySelectorAll('.liturgy-card').forEach(card => {
                observer.observe(card);
            });

            // Add 3D Tilt Effect on Cards
            document.querySelectorAll('.liturgy-card-inner').forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = (y - centerY) / 20;
                    const rotateY = (centerX - x) / 20;
                    
                    card.style.transform = `translateY(-10px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(0) rotateX(0) rotateY(0)';
                });
            });

            // Smooth Scroll
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
@endsection
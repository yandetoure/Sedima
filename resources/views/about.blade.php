@extends('layouts.app')

@section('content')
    <!-- Hero Banner Section -->
    <div class="relative h-[400px] md:h-[500px] overflow-visible">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/banner2.jpg') }}" alt="Agriculture SEDIMA" class="w-full h-full object-cover">
            <!-- Overlay gradient -->
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/20 to-white"></div>
        </div>

        <!-- Content Card -->
        <div class="relative z-10 container mx-auto px-4 h-full flex items-end justify-center">
            <div class="bg-white rounded-3xl p-8 md:p-12 w-full max-w-6xl shadow-2xl text-center translate-y-1/2">
                <!-- Badge -->
                <div class="flex items-center justify-center gap-2 mb-6">
                    <span class="w-8 h-8 bg-sedima-yellow rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-sedima-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </span>
                    <span class="font-bold text-gray-700 uppercase tracking-widest text-sm">À Propos</span>
                </div>

                <!-- Title -->
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-sedima-black leading-tight mb-6">
                    Un leader agro-industriel engagé pour la sécurité alimentaire en Afrique de l'Ouest.
                </h1>

                <!-- Breadcrumb -->
                <nav class="flex items-center justify-center gap-2 text-sm text-gray-600">
                    <a href="/" class="hover:text-sedima-red transition">Accueil</a>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="text-sedima-black font-medium">À propos</span>
                </nav>
            </div>
        </div>
    </div>

    <!-- Présentation du Groupe Section -->
    <div class="bg-gray-50 pt-48 md:pt-56 pb-16 md:pb-24">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <!-- Left Content -->
                <div>
                    <!-- Badge -->
                    <div class="flex items-center gap-2 mb-6">
                        <span class="w-8 h-8 bg-sedima-yellow rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-sedima-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </span>
                        <span class="font-bold text-gray-700 uppercase tracking-widest text-sm">Présentation du
                            Groupe</span>
                    </div>

                    <!-- Title -->
                    <h2 class="text-3xl md:text-4xl font-bold text-sedima-black mb-6 leading-tight">
                        SEDIMA, un groupe au cœur des filières agricoles.
                    </h2>

                    <!-- Description -->
                    <div class="space-y-4 text-gray-600 leading-relaxed">
                        <p>
                            Fondée au Sénégal, <strong class="text-sedima-black">SEDIMA</strong> est aujourd'hui l'un des
                            principaux groupes agro-industriels d'Afrique de l'Ouest, actif dans l'aviculture, la
                            provenderie, la minoterie et la transformation de produits avicoles.
                        </p>
                        <p>
                            Grâce à des infrastructures modernes et à une maîtrise complète de la chaîne de valeur, le
                            groupe contribue activement à la sécurité alimentaire, au développement économique local et à la
                            professionnalisation des filières agricoles.
                        </p>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/groupe.png') }}" alt="Bâtiment SEDIMA"
                            class="w-full h-auto object-cover">
                    </div>
                </div>
            </div>

            <!-- Statistics Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Stat 1 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-start gap-4">
                        <div class="w-14 h-14 bg-sedima-yellow rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-sedima-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-black text-sedima-black mb-1">+4000</div>
                            <div class="text-sm text-gray-600">Clients Business/Particuliers</div>
                        </div>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-start gap-4">
                        <div class="w-14 h-14 bg-sedima-yellow rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-sedima-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-black text-sedima-black mb-1">+35</div>
                            <div class="text-sm text-gray-600">Sites industriels au Sénégal</div>
                        </div>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-start gap-4">
                        <div class="w-14 h-14 bg-sedima-yellow rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-sedima-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-black text-sedima-black mb-1">+800</div>
                            <div class="text-sm text-gray-600">Personnel actif</div>
                        </div>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-start gap-4">
                        <div class="w-14 h-14 bg-sedima-yellow rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-sedima-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-3xl font-black text-sedima-black mb-1">+51</div>
                            <div class="text-sm text-gray-600">Années d'existence</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
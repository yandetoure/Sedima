@extends('layouts.app')

@section('content')
    <x-hero />

    <!-- Presentation Section (Placeholder based on design hint) -->
    <div class="container mx-auto px-4 py-16">
        <div class="flex items-center mb-8">
            <span class="w-8 h-8 bg-sedima-yellow rounded-full flex items-center justify-center mr-3">
                <svg class="w-4 h-4 text-sedima-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                    </path>
                </svg>
            </span>
            <span class="font-bold text-gray-400 tracking-widest text-sm uppercase">Présentation du Groupe</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Placeholder for video/image (left) -->
            <div
                class="relative rounded-full overflow-hidden w-full max-w-md mx-auto aspect-square bg-gray-100 flex items-center justify-center">
                <!-- Circular Image mask/placeholder -->
                <img src="{{ asset('images/groupe.png') }}" class="w-full h-full object-cover" alt="Présentation du Groupe">
                <div class="absolute inset-0 flex items-center justify-center">
                    <button
                        class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition">
                        <svg class="w-6 h-6 text-sedima-red ml-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div>
                <h2 class="text-4xl font-bold text-sedima-black mb-6 leading-tight">
                    Un groupe agro-industriel engagé pour la sécurité alimentaire en Afrique de l'Ouest
                </h2>

                <div class="my-8 border-t border-b border-gray-100 py-8 flex items-center">
                    <div class="mr-6">
                        <span class="text-6xl font-black text-sedima-black leading-none block">+30</span>
                        <span class="text-sedima-black leading-tight text-sm font-medium">années<br>d'expérience.</span>
                    </div>
                    <div class="flex-1 text-gray-600 text-sm leading-relaxed border-l border-gray-200 pl-6">
                        <!-- Added border-l for separation -->
                        Fondée au Sénégal, SEDIMA est un groupe agro-industriel de référence, spécialisé dans l'aviculture,
                        la provenderie, la minoterie et la transformation de produits avicoles. Grâce à une chaîne de valeur
                        intégrée, des infrastructures modernes et des standards de qualité exigeants, SEDIMA accompagne
                        durablement les producteurs, distributeurs, industriels et institutions dans le développement de
                        systèmes alimentaires performants et responsables.
                    </div>
                </div>

                <a href="#"
                    class="inline-flex items-center px-6 py-3 bg-sedima-black text-white rounded-full font-medium hover:bg-gray-800 transition">
                    <svg class="w-4 h-4 mr-2 rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18">
                        </path>
                    </svg>
                    Découvrir notre Histoire
                </a>
            </div>
        </div>
    </div>

    <!-- Nos Métiers Section -->
    <div class="bg-gray-50 py-20">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="flex items-center justify-center mb-4">
                    <span class="w-8 h-8 bg-sedima-yellow rounded-full flex items-center justify-center mr-3">
                        <svg class="w-4 h-4 text-sedima-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </span>
                    <span class="font-bold text-gray-400 tracking-widest text-sm uppercase">Nos Métiers</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-sedima-black mb-6">
                    Une expertise<br>
                    agro-industrielle intégrée
                </h2>
                <a href="#"
                    class="inline-flex items-center px-6 py-3 bg-sedima-black text-white rounded-full font-medium hover:bg-gray-800 transition">
                    <svg class="w-4 h-4 mr-2 rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18">
                        </path>
                    </svg>
                    Explorer tous nos métiers
                </a>
            </div>

            <!-- Métiers Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Aviculture -->
                <div class="group">
                    <div
                        class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-3xl p-8 h-full relative overflow-hidden transition-all duration-300 hover:shadow-xl">
                        <h3 class="text-2xl font-bold text-sedima-black mb-3">AVICULTURE</h3>
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                            Élevage et production de poussins dans le respect des normes les plus strictes.
                        </p>

                        <!-- Image Circle -->
                        <div class="relative mb-6">
                            <div class="w-48 h-48 mx-auto rounded-full overflow-hidden">
                                <img src="{{ asset('images/Aviculture.png') }}" alt="Aviculture"
                                    class="w-full h-full object-cover">
                            </div>
                            <!-- Arrow Icon -->
                            <div
                                class="absolute bottom-0 right-12 w-10 h-10 bg-sedima-yellow rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-sedima-black rotate-45" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Features -->
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-700">
                                <svg class="w-5 h-5 text-sedima-yellow mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Variétés d'élevage
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <svg class="w-5 h-5 text-sedima-yellow mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Qualité constante
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <svg class="w-5 h-5 text-sedima-yellow mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Capacité d'élevage
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Provenderie -->
                <div class="group">
                    <div
                        class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-3xl p-8 h-full relative overflow-hidden transition-all duration-300 hover:shadow-xl">
                        <h3 class="text-2xl font-bold text-sedima-black mb-3">PROVENDERIE</h3>
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                            Fabrication d'aliments de bétail et de volaille formulés pour optimiser la croissance, la santé
                            et la productivité animale.
                        </p>

                        <!-- Image Circle -->
                        <div class="relative mb-6">
                            <div class="w-48 h-48 mx-auto rounded-full overflow-hidden">
                                <img src="{{ asset('images/Provenderie.png') }}" alt="Provenderie"
                                    class="w-full h-full object-cover">
                            </div>
                            <!-- Arrow Icon -->
                            <div
                                class="absolute bottom-0 right-12 w-10 h-10 bg-sedima-yellow rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-sedima-black rotate-45" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Features -->
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-700">
                                <svg class="w-5 h-5 text-sedima-yellow mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Formulation nutritionnelle
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <svg class="w-5 h-5 text-sedima-yellow mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Qualité constante
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <svg class="w-5 h-5 text-sedima-yellow mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Production industrielle
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Minoterie -->
                <div class="group">
                    <div
                        class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-3xl p-8 h-full relative overflow-hidden transition-all duration-300 hover:shadow-xl">
                        <h3 class="text-2xl font-bold text-sedima-black mb-3">MINOTERIE</h3>
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                            Production de farines de blé adaptées aux besoins des boulangers, industriels et distributeurs.
                        </p>

                        <!-- Image Circle -->
                        <div class="relative mb-6">
                            <div class="w-48 h-48 mx-auto rounded-full overflow-hidden">
                                <img src="{{ asset('images/Minoterie.png') }}" alt="Minoterie"
                                    class="w-full h-full object-cover">
                            </div>
                            <!-- Arrow Icon -->
                            <div
                                class="absolute bottom-0 right-12 w-10 h-10 bg-sedima-yellow rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-sedima-black rotate-45" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Features -->
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-700">
                                <svg class="w-5 h-5 text-sedima-yellow mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Qualité meunière
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <svg class="w-5 h-5 text-sedima-yellow mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Processus industriel moderne
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <svg class="w-5 h-5 text-sedima-yellow mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Marchés locaux & régionaux
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Produits Avicoles -->
                <div class="group">
                    <div
                        class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-3xl p-8 h-full relative overflow-hidden transition-all duration-300 hover:shadow-xl">
                        <h3 class="text-2xl font-bold text-sedima-black mb-3">PRODUITS AVICOLES</h3>
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                            Transformation et commercialisation de poulets entiers et découpés, conformes aux normes
                            sanitaires et de qualité.
                        </p>

                        <!-- Image Circle -->
                        <div class="relative mb-6">
                            <div class="w-48 h-48 mx-auto rounded-full overflow-hidden">
                                <img src="{{ asset('images/Aviculture.png') }}" alt="Produits Avicoles"
                                    class="w-full h-full object-cover">
                            </div>
                            <!-- Arrow Icon -->
                            <div
                                class="absolute bottom-0 right-12 w-10 h-10 bg-sedima-yellow rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-sedima-black rotate-45" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Features -->
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-700">
                                <svg class="w-5 h-5 text-sedima-yellow mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Chaîne du froid maîtrisée
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <svg class="w-5 h-5 text-sedima-yellow mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Normes sanitaires
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <svg class="w-5 h-5 text-sedima-yellow mr-2 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Conditionnements adaptés
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Actualités & Médias Section -->
    <div class="bg-white py-20">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="flex items-center justify-between mb-12">
                <div>
                    <div class="flex items-center mb-4">
                        <span class="w-8 h-8 bg-sedima-yellow rounded-full flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-sedima-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                                </path>
                            </svg>
                        </span>
                        <span class="font-bold text-gray-400 tracking-widest text-sm uppercase">Actualités & Médias</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-sedima-black leading-tight">
                        L'actualité du<br>
                        groupe SEDIMA
                    </h2>
                </div>
                <a href="#"
                    class="hidden md:inline-flex items-center px-6 py-3 bg-sedima-black text-white rounded-full font-medium hover:bg-gray-800 transition">
                    <svg class="w-4 h-4 mr-2 rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18">
                        </path>
                    </svg>
                    Le Blog SEDIMA
                </a>
            </div>

            <!-- Articles Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Article Principal (Grande Carte à Gauche) -->
                <div
                    class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-96">
                        <img src="{{ asset('images/article 1.jpg') }}" alt="Modernisation des infrastructures"
                            class="w-full h-full object-cover">
                        <!-- Date Badge -->
                        <div class="absolute top-6 right-6 bg-white rounded-2xl px-4 py-3 text-center shadow-lg">
                            <div class="text-3xl font-black text-sedima-black leading-none">28</div>
                            <div class="text-xs font-medium text-gray-500 uppercase">Jan</div>
                        </div>
                    </div>
                    <div class="p-8">
                        <!-- Meta Info -->
                        <div class="flex flex-wrap gap-3 mb-4">
                            <span class="text-xs font-medium text-gray-500">12 Mai 2026</span>
                            <span
                                class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Industrie</span>
                            <span
                                class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Infrastructures</span>
                            <span
                                class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Modernisation</span>
                            <div class="flex items-center ml-auto">
                                <span class="text-xs text-gray-500 mr-1">Publié par</span>
                                <span class="text-xs font-semibold text-sedima-black">Fatima</span>
                                <img src="{{ asset('images/Babacar.png') }}" alt="Fatima" class="w-5 h-5 rounded-full ml-1">
                            </div>
                        </div>

                        <!-- Title -->
                        <h3
                            class="text-2xl font-bold text-sedima-black mb-4 leading-tight group-hover:text-sedima-red transition">
                            Modernisation des infrastructures industrielles de SEDIMA.
                        </h3>

                        <!-- CTA Button -->
                        <a href="#"
                            class="inline-flex items-center px-5 py-2.5 bg-sedima-black text-white rounded-full text-sm font-medium hover:bg-gray-800 transition">
                            <svg class="w-4 h-4 mr-2 rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 10l7-7m0 0l7 7m-7-7v18">
                                </path>
                            </svg>
                            Lire la suite
                        </a>
                    </div>
                </div>

                <!-- Colonne Droite (2 Articles Empilés) -->
                <div class="space-y-8">
                    <!-- Article 2 -->
                    <div
                        class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="grid grid-cols-5 gap-0">
                            <!-- Image -->
                            <div class="col-span-2 relative h-64">
                                <img src="{{ asset('images/article 2.jpg') }}" alt="Partenariats avicoles"
                                    class="w-full h-full object-cover">
                            </div>

                            <!-- Content -->
                            <div class="col-span-3 p-6 flex flex-col justify-between">
                                <!-- Meta Info -->
                                <div>
                                    <div class="flex items-center gap-2 mb-3">
                                        <span
                                            class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">Partenariats</span>
                                        <div class="flex items-center ml-auto">
                                            <span class="text-xs text-gray-500 mr-1">Publié par</span>
                                            <span class="text-xs font-semibold text-sedima-black">Fatima</span>
                                            <img src="{{ asset('images/Babacar.png') }}" alt="Fatima"
                                                class="w-5 h-5 rounded-full ml-1">
                                        </div>
                                    </div>

                                    <!-- Title -->
                                    <h3
                                        class="text-lg font-bold text-sedima-black mb-3 leading-tight group-hover:text-sedima-red transition">
                                        SEDIMA renforce ses partenariats pour le développement de la filière avicole.
                                    </h3>

                                    <!-- Excerpt -->
                                    <p class="text-gray-600 text-sm mb-4 leading-relaxed line-clamp-3">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nisl turpis.
                                        Etiam rhoncus, magna sit fringilla, lacus null...
                                    </p>
                                </div>

                                <!-- CTA Button -->
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 bg-sedima-black text-white rounded-full text-sm font-medium hover:bg-gray-800 transition self-start">
                                    <svg class="w-3 h-3 mr-1.5 rotate-45" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18">
                                        </path>
                                    </svg>
                                    Lire la suite
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Article 3 -->
                    <div
                        class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="grid grid-cols-5 gap-0">
                            <!-- Image -->
                            <div class="col-span-2 relative h-64">
                                <img src="{{ asset('images/article 3.jpg') }}" alt="Engagements RSE"
                                    class="w-full h-full object-cover">
                            </div>

                            <!-- Content -->
                            <div class="col-span-3 p-6 flex flex-col justify-between">
                                <!-- Meta Info -->
                                <div>
                                    <div class="flex items-center gap-2 mb-3">
                                        <span
                                            class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">RSE</span>
                                        <div class="flex items-center ml-auto">
                                            <span class="text-xs text-gray-500 mr-1">Publié par</span>
                                            <span class="text-xs font-semibold text-sedima-black">Fatima</span>
                                            <img src="{{ asset('images/Babacar.png') }}" alt="Fatima"
                                                class="w-5 h-5 rounded-full ml-1">
                                        </div>
                                    </div>

                                    <!-- Title -->
                                    <h3
                                        class="text-lg font-bold text-sedima-black mb-3 leading-tight group-hover:text-sedima-red transition">
                                        Engagements RSE : SEDIMA agit pour une agriculture durable - RSE, Formation, Actions
                                        terrain.
                                    </h3>

                                    <!-- Excerpt -->
                                    <p class="text-gray-600 text-sm mb-4 leading-relaxed line-clamp-3">
                                        Suspendisse massa lacus, accumsan vel vulputate non, consectetur ut ligula. Nullam.
                                        Phasellus tristique neque eget neque...
                                    </p>
                                </div>

                                <!-- CTA Button -->
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 bg-sedima-black text-white rounded-full text-sm font-medium hover:bg-gray-800 transition self-start">
                                    <svg class="w-3 h-3 mr-1.5 rotate-45" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18">
                                        </path>
                                    </svg>
                                    Lire la suite
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
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
@endsection
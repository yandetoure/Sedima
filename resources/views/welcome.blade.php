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
@endsection
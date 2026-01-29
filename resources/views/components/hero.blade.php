<div class="relative w-full mb-32"> <!-- Increased margin bottom for spacing -->
    <!-- Hero Image Container (Fixed Height & Clipped) -->
    <div class="h-[800px] w-full relative">
        <div class="absolute inset-0 overflow-hidden">
            <img src="{{ asset('images/hero.jpg') }}" alt="Elevage Avicole" class="w-full h-full object-cover">
        </div>

        <!-- Overlay/Content Container -->
        <div class="absolute inset-0 container mx-auto px-4 flex items-center md:items-end pb-10 pointer-events-none">

            <!-- Main Content Card -->
            <!-- TranslateY pushes it down to overlap the bottom edge -->
            <div
                class="pointer-events-auto bg-white rounded-[32px] p-10 md:p-12 md:pb-32 max-w-2xl shadow-2xl relative z-30 translate-y-10 md:translate-y-[70px]">
                <h1 class="text-4xl md:text-6xl font-black text-sedima-black leading-tight mb-8">
                    SEDIMA, leader de l'agrobusiness en Afrique de l'Ouest.
                </h1>
                <p class="text-gray-600 text-lg md:text-xl mb-10 leading-relaxed">
                    Aviculture, provenderie, minoterie et transformation avicole : une maîtrise complète de la chaîne de
                    valeur au service de la sécurité alimentaire.
                </p>
                <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="#"
                        class="px-8 py-4 rounded-full border border-gray-300 text-sedima-black font-semibold hover:bg-gray-50 transition flex items-center w-full sm:w-auto justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                        Découvrir nos métiers
                    </a>
                    <a href="#"
                        class="px-8 py-4 rounded-full bg-sedima-black text-white font-semibold hover:bg-gray-800 transition flex items-center w-full sm:w-auto justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Cards (Below the image) -->
    <!-- Added margin top to accommodate the overlapping valid card above -->
    <div class="container mx-auto px-4 relative z-20 mt-32 md:mt-32">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-[24px] p-6 flex items-center space-x-4 shadow-xl border border-gray-100">
                <div class="w-14 h-14 bg-sedima-yellow rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-sedima-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <div>
                    <div class="text-3xl font-bold text-sedima-black">+4000</div>
                    <div class="text-sm text-gray-500 font-medium">Clients Business/Particuliers</div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-[24px] p-6 flex items-center space-x-4 shadow-xl border border-gray-100">
                <div class="w-14 h-14 bg-sedima-yellow rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-sedima-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                </div>
                <div>
                    <div class="text-3xl font-bold text-sedima-black">+35</div>
                    <div class="text-sm text-gray-500 font-medium">Sites industriels au Sénégal</div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-[24px] p-6 flex items-center space-x-4 shadow-xl border border-gray-100">
                <div class="w-14 h-14 bg-sedima-yellow rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-sedima-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div>
                    <div class="text-3xl font-bold text-sedima-black">+800</div>
                    <div class="text-sm text-gray-500 font-medium">Personnel actif</div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-[24px] p-6 flex items-center space-x-4 shadow-xl border border-gray-100">
                <div class="w-14 h-14 bg-sedima-yellow rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-sedima-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <div class="text-3xl font-bold text-sedima-black">+51</div>
                    <div class="text-sm text-gray-500 font-medium">Années d'existence</div>
                </div>
            </div>
        </div>
    </div>
</div>
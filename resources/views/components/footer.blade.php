<footer>
    <!-- CTA Section "Parler à un expert" -->
    <div class="bg-sedima-black rounded-3xl mx-4 lg:mx-8 mb-8 overflow-hidden relative">
        <!-- Background Image avec overlay -->
        <div class="absolute inset-0 opacity-30">
            <img src="{{ asset('images/footer.jpg') }}" alt="Background" class="w-full h-full object-cover">
        </div>

        <div
            class="relative z-10 container mx-auto px-6 py-16 flex flex-col md:flex-row items-center justify-center gap-6">
            <!-- Texte "Parler à" -->
            <h2 class="text-4xl md:text-5xl font-bold text-white">Parler à</h2>

            <!-- Image de l'expert avec badge jaune -->
            <div class="relative">
                <div class="w-32 h-32 md:w-40 md:h-40 rounded-2xl overflow-hidden bg-gray-800">
                    <img src="{{ asset('images/footer.jpg') }}" alt="Expert SEDIMA"
                        class="w-full h-full object-cover object-center">
                </div>
                <!-- Badge Icône Jaune -->
                <div
                    class="absolute -bottom-3 left-1/2 -translate-x-1/2 w-12 h-12 bg-sedima-yellow rounded-full flex items-center justify-center shadow-lg">
                    <svg class="w-5 h-5 text-sedima-black rotate-45" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                    </svg>
                </div>
            </div>

            <!-- Texte "un expert" -->
            <h2 class="text-4xl md:text-5xl font-bold text-white">un expert</h2>
        </div>
    </div>

    <!-- Footer Content -->
    <div class="bg-white border-t border-gray-200">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Newsletter Section -->
                <div class="lg:col-span-1">
                    <h3 class="text-2xl font-bold text-sedima-black mb-6">
                        S'inscrire aux<br>Newsletters
                    </h3>
                    <form class="space-y-4">
                        <div class="relative">
                            <input type="email" placeholder="Votre e-mail"
                                class="w-full px-4 py-3 pr-24 border border-gray-300 rounded-lg focus:outline-none focus:border-sedima-black">
                            <button type="submit"
                                class="absolute right-2 top-1/2 -translate-y-1/2 px-4 py-1.5 bg-sedima-black text-white rounded-md text-sm font-medium hover:bg-gray-800 transition flex items-center gap-1">
                                Envoyer
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-start gap-2">
                            <input type="checkbox" id="terms" class="mt-1 w-4 h-4 border-gray-300 rounded">
                            <label for="terms" class="text-xs text-gray-600">
                                J'accepte les <a href="#" class="underline hover:text-sedima-red">Termes &
                                    conditions.</a>
                            </label>
                        </div>
                    </form>
                </div>

                <!-- Navigation -->
                <div>
                    <h4 class="font-bold text-sedima-black mb-4">Navigation</h4>
                    <ul class="space-y-2.5 text-sm text-gray-700">
                        <li><a href="#" class="hover:text-sedima-red transition">Accueil</a></li>
                        <li><a href="#" class="hover:text-sedima-red transition">À propos</a></li>
                        <li><a href="#" class="hover:text-sedima-red transition">Nos métiers</a></li>
                        <li><a href="#" class="hover:text-sedima-red transition">Produits</a></li>
                        <li><a href="#" class="hover:text-sedima-red transition">Actualités & Médias</a></li>
                        <li><a href="#" class="hover:text-sedima-red transition">Recrutement</a></li>
                        <li><a href="#" class="hover:text-sedima-red transition">Nous contacter</a></li>
                    </ul>
                </div>

                <!-- Nos métiers -->
                <div>
                    <h4 class="font-bold text-sedima-black mb-4">Nos métiers</h4>
                    <ul class="space-y-2.5 text-sm text-gray-700">
                        <li><a href="#" class="hover:text-sedima-red transition">Aviculture</a></li>
                        <li><a href="#" class="hover:text-sedima-red transition">Provenderie</a></li>
                        <li><a href="#" class="hover:text-sedima-red transition">Minoterie</a></li>
                        <li><a href="#" class="hover:text-sedima-red transition">Produits avicoles</a></li>
                        <li><a href="#" class="hover:text-sedima-red transition">Services</a></li>
                    </ul>
                </div>

                <!-- Informations -->
                <div>
                    <h4 class="font-bold text-sedima-black mb-4">Informations</h4>
                    <ul class="space-y-3 text-sm text-gray-700">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-sedima-black flex-shrink-0 mt-0.5" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="leading-tight">Sortie 9 (SEDIMA): Rufisque-Ouest<br>et cap des Biches(2)</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-sedima-black flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <a href="tel:+221338398000" class="hover:text-sedima-red transition">(+221) 33 839 80 00</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-sedima-black flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <a href="mailto:sedima@sedima.com"
                                class="hover:text-sedima-red transition">sedima@sedima.com</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-sedima-black flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                                </path>
                            </svg>
                            <a href="https://sedima.com" target="_blank"
                                class="hover:text-sedima-red transition">sedima@sedima.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="border-t border-gray-200 pt-8">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <!-- Logo -->
                    <div>
                        <img src="{{ asset('images/logo.png') }}" alt="SEDIMA" class="h-12">
                    </div>

                    <!-- Certifications Badges -->
                    <div class="flex items-center gap-4">
                        <div
                            class="w-14 h-14 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center text-white font-bold text-xs shadow-lg">
                            ISO<br>9001
                        </div>
                        <div
                            class="w-14 h-14 rounded-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center text-white font-bold text-xs shadow-lg">
                            ISO<br>14001
                        </div>
                        <div
                            class="w-14 h-14 rounded-full bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center text-white font-bold text-xs shadow-lg">
                            ISO<br>50001
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright & Social Links -->
            <div class="border-t border-gray-200 mt-8 pt-6">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-gray-600">
                    <!-- Copyright -->
                    <div>
                        © 2026 SEDIMA GROUP
                    </div>

                    <!-- Social Icons -->
                    <div class="flex items-center gap-4">
                        <a href="#"
                            class="w-8 h-8 rounded-full bg-sedima-black text-white flex items-center justify-center hover:bg-gray-800 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-8 h-8 rounded-full bg-sedima-black text-white flex items-center justify-center hover:bg-gray-800 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-8 h-8 rounded-full bg-sedima-black text-white flex items-center justify-center hover:bg-gray-800 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                    </div>

                    <!-- Legal Links -->
                    <div class="flex items-center gap-4">
                        <a href="#" class="hover:text-sedima-red transition">Politique de Confidentialité</a>
                        <a href="#" class="hover:text-sedima-red transition">Termes & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
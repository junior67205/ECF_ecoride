{{-- Composant Hero : section de recherche de covoiturage sur la page d'accueil --}}
<!-- =====================
     SECTION HERO ACCUEIL
====================== -->
<section class="hero-bg relative flex items-center min-h-screen">
    <div class="container flex flex-col items-center justify-center w-full px-4 mx-auto hero-content">
        {{-- Titre principal --}}
        <h1 class="mb-3 text-6xl font-bold leading-tight text-center text-white">TROUVEZ<br>UN COVOITURAGE</h1>
        {{-- Slogan --}}
        <p class="mb-12 text-xl text-center text-white/90">La solution accessible et durable pour tous</p>
        {{-- Formulaire de recherche --}}
        <form action="{{ route('covoiturage.search') }}" method="POST" class="flex flex-col w-full max-w-4xl gap-6 md:flex-row">
            @csrf
            {{-- Champ adresse de départ --}}
            <div class="relative flex-1">
                <div class="absolute transform -translate-y-1/2 left-4 top-1/2 text-emerald-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="text" name="lieu_depart" placeholder="Adresse de départ" class="w-full py-4 pl-12 pr-4 text-lg bg-white search-input rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500" required />
            </div>
            {{-- Champ adresse d'arrivée --}}
            <div class="relative flex-1">
                <div class="absolute transform -translate-y-1/2 left-4 top-1/2 text-emerald-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="text" name="lieu_arrivee" placeholder="Adresse d'arrivée" class="w-full py-4 pl-12 pr-4 text-lg bg-white search-input rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500" required />
            </div>
            {{-- Champ date de départ --}}
            <div class="relative flex-1">
                <div class="absolute transform -translate-y-1/2 left-4 top-1/2 text-emerald-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="date" name="date_depart" min="{{ date('Y-m-d') }}" class="w-full py-4 pl-12 pr-4 text-lg bg-white rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500" required />
            </div>
            {{-- Bouton de recherche --}}
            <button type="submit" class="flex items-center justify-center px-8 py-4 text-lg font-medium text-white transition-all duration-300 rounded-xl bg-emerald-600 hover:bg-emerald-700 hover:shadow-lg">
                <span>Rechercher</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </button>
        </form>
    </div>
</section> 
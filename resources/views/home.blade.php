
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AvTrainer - Personal Training & Nutrizione</title>
    
    <link rel="stylesheet" href="{{ asset('build/assets/app-OcVQNDiz.css') }}">
<script src="{{ asset('build/assets/app-CAICLEjY.js') }}"></script>
</head>
<body class="bg-gray-950 text-gray-100">
    
    <!-- HEADER -->
    <header class="bg-gray-900/95 backdrop-blur-sm fixed w-full top-0 z-50 border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <h1 class="text-2xl font-black">
                    <a href="#" class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600">
                        💪 AvTrainer 🤙
                    </a>
                </h1>
                
                <!-- Menu desktop -->
                <nav class="hidden md:flex gap-8">
                    <a href="#servizi" class="text-gray-300 hover:text-orange-500 transition font-medium">
                        Servizi
                    </a>
                    <a href="#contatti" class="text-gray-300 hover:text-orange-500 transition font-medium">
                        Contatti
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <main class="pt-20">
        <section class="relative min-h-screen flex items-center">
            <!-- Gradiente background -->
            <div class="absolute inset-0 bg-gradient-to-br from-orange-600/20 via-gray-900 to-red-600/20"></div>
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0iZ3JpZCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBkPSJNIDQwIDAgTCAwIDAgMCA0MCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJyZ2JhKDI1NSwyNTUsMjU1LDAuMDMpIiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-30"></div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
                
                <!-- Badge -->
                <div class="inline-block mb-6">
                    <span class="px-4 py-2 bg-orange-500/10 border border-orange-500/30 rounded-full text-orange-400 text-sm font-semibold">
                        🔥 Personal Training & Nutrizione
                    </span>
                </div>
                
                <!-- Titolo principale -->
                <h2 class="text-5xl sm:text-6xl lg:text-7xl font-black mb-6 leading-tight">
                    Trasforma il tuo
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 via-red-500 to-orange-600 animate-pulse">
                        corpo
                    </span>
                    <br />
                    Raggiungi i tuoi
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-lime-400 to-red-500">
                        obiettivi
                    </span>
                </h2>
                
                <!-- Sottotitolo -->
                <p class="text-xl sm:text-2xl text-gray-400 mb-12 max-w-3xl mx-auto leading-relaxed">
                    Allenamenti personalizzati, piani nutrizionali su misura e supporto costante. 
                    <span class="text-orange-400 font-semibold">Il tuo successo è la mia missione.</span>
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">

                    <a href="/prenota" 
                        class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white bg-gradient-to-r from-orange-500 to-red-600 rounded-xl overflow-hidden shadow-2xl shadow-orange-500/50 hover:shadow-orange-500/80 transition-all duration-300 hover:scale-105">
                        <span class="relative z-10">🔥 Prenota Consulenza Gratuita</span>
                    </a>

                    <!-- <a href="IL_TUO_LINK_GOOGLE_CALENDAR_QUI" 
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white bg-gradient-to-r from-orange-500 to-red-600 rounded-xl overflow-hidden shadow-2xl shadow-orange-500/50 hover:shadow-orange-500/80 transition-all duration-300 hover:scale-105">
                        <span class="relative z-10">🔥 Prenota Consulenza Gratuita</span>
                    </a> -->
                    
                    <a href="#servizi" 
                       class="inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white bg-gray-800 hover:bg-gray-700 rounded-xl border-2 border-gray-700 hover:border-orange-500 transition-all duration-300">
                        💪 Scopri i Servizi
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-3 gap-8 max-w-3xl mx-auto pt-8 border-t border-gray-800">
                    <div>
                        <div class="text-4xl font-black text-orange-500 mb-2">500+</div>
                        <div class="text-gray-500 text-sm font-medium">Clienti Trasformati</div>
                    </div>
                    <div>
                        <div class="text-4xl font-black text-lime-500 mb-2">5+</div>
                        <div class="text-gray-500 text-sm font-medium">Anni Esperienza</div>
                    </div>
                    <div>
                        <div class="text-4xl font-black text-red-500 mb-2">100%</div>
                        <div class="text-gray-500 text-sm font-medium">Risultati Garantiti</div>
                    </div>
                </div>
                
            </div>
        </section>

        <!-- SERVIZI SECTION -->
        <section id="servizi" class="py-24 px-4 sm:px-6 lg:px-8 bg-gray-900/50">
            <div class="max-w-7xl mx-auto">
                
                <div class="text-center mb-16">
                    <h3 class="text-4xl sm:text-5xl font-black mb-4">
                        I Miei <span class="text-orange-500">Servizi</span>
                    </h3>
                    <p class="text-gray-400 text-lg">
                        Soluzioni complete per il tuo benessere
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <!-- Card 1: Training -->
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-800 hover:border-orange-500 transition-all duration-300 hover:shadow-2xl hover:shadow-orange-500/20 hover:-translate-y-2">
                        <div class="text-6xl mb-6 group-hover:scale-110 transition-transform duration-300">💪</div>
                        <h4 class="text-2xl font-bold mb-4 text-white">Personal Training</h4>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Allenamenti personalizzati in palestra o online. Programmi su misura per i tuoi obiettivi: dimagrimento, massa muscolare, tonificazione.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-500">
                            <li>✓ Schede personalizzate</li>
                            <li>✓ Monitoraggio progressi</li>
                            <li>✓ Supporto via WhatsApp</li>
                        </ul>
                    </div>
                    
                    <!-- Card 2: Nutrizione -->
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-800 hover:border-lime-500 transition-all duration-300 hover:shadow-2xl hover:shadow-lime-500/20 hover:-translate-y-2">
                        <div class="text-6xl mb-6 group-hover:scale-110 transition-transform duration-300">🥗</div>
                        <h4 class="text-2xl font-bold mb-4 text-white">Piani Nutrizionali</h4>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Diete personalizzate in base alle tue esigenze. Impara a mangiare bene senza rinunce, per risultati duraturi e sani.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-500">
                            <li>✓ Piano alimentare settimanale</li>
                            <li>✓ Liste della spesa</li>
                            <li>✓ Ricette pratiche</li>
                        </ul>
                    </div>
                    
                    <!-- Card 3: Coaching -->
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-800 hover:border-red-500 transition-all duration-300 hover:shadow-2xl hover:shadow-red-500/20 hover:-translate-y-2">
                        <div class="text-6xl mb-6 group-hover:scale-110 transition-transform duration-300">📊</div>
                        <h4 class="text-2xl font-bold mb-4 text-white">Coaching Online</h4>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                            Supporto completo anche da remoto. Training + nutrizione + motivazione in un unico pacchetto. Ovunque tu sia.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-500">
                            <li>✓ Videochiamate settimanali</li>
                            <li>✓ App di monitoraggio</li>
                            <li>✓ Check-in costanti</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- TESTIMONIANZE SECTION -->
        <section id="servizi" class="py-24 px-4 sm:px-6 lg:px-8 bg-gray-900/50">
            <div class="max-w-7xl mx-auto">
                
                <div class="text-center mb-16">
                    <h3 class="text-4xl sm:text-5xl font-black mb-4">
                        <span class="text-orange-500">TESTIMONIANZE</span> dei miei clienti
                    </h3>
                    <p class="text-gray-400 text-lg">
                        Soluzioni programmate per ogni persona
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <!-- Card 1: Training -->
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-800 hover:border-orange-500 transition-all duration-300 hover:shadow-2xl hover:shadow-orange-500/20 hover:-translate-y-2">
                        <div class="text-6xl mb-6 group-hover:scale-110 transition-transform duration-300">🏋</div>
                        <h4 class="text-2xl font-bold mb-4 text-white">Luca</h4>
    
                    </div>
                    
                    <!-- Card 2: Nutrizione -->
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-800 hover:border-lime-500 transition-all duration-300 hover:shadow-2xl hover:shadow-lime-500/20 hover:-translate-y-2">
                        <div class="text-6xl mb-6 group-hover:scale-110 transition-transform duration-300">🤸‍♀️</div>
                        <h4 class="text-2xl font-bold mb-4 text-white">Giovanna</h4>
                        
                    </div>
                    
                    <!-- Card 3: Coaching -->
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-8 border border-gray-800 hover:border-red-500 transition-all duration-300 hover:shadow-2xl hover:shadow-red-500/20 hover:-translate-y-2">
                        <div class="text-6xl mb-6 group-hover:scale-110 transition-transform duration-300">🏃‍♂️</div>
                        <h4 class="text-2xl font-bold mb-4 text-white">Pietro</h4>
                        
                    </div>
                    
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer id="contatti" class="bg-gray-950 border-t border-gray-800 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                
                <!-- Info -->
                <div>
                    <h3 class="text-2xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600">
                        💪 AvTrainer
                    </h3>
                    <p class="text-gray-400 mb-4">
                        Personal Trainer certificato con anni di esperienza nel trasformare vite attraverso fitness e nutrizione.
                    </p>
                </div>
                
                <!-- Contatti -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Contattami</h4>
                    <div class="space-y-3">
                        <a href="mailto:info@avtrainer.it" 
                        target="_blank"
                           class="flex items-center gap-3 text-gray-400 hover:text-orange-500 transition">
                            <span>📧</span>
                            <span>info@avtrainer.it</span>
                        </a>
                        <a href="https://wa.me/3460123371" 
                        target="_blank"
                           class="flex items-center gap-3 text-gray-400 hover:text-lime-500 transition">
                            <span>📱</span>
                            <span>WhatsApp: +39 312 345 6789</span>
                        </a>
                        <a href="https://instagram.com/avtrainer" 
                        target="_blank"
                           class="flex items-center gap-3 text-gray-400 hover:text-pink-500 transition">
                            <span>📸</span>
                            <span>@avtrainer</span>
                        </a>
                    </div>
                </div>
                
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center text-gray-500 text-sm">
                <p>© 2025 AvTrainer. Tutti i diritti riservati.</p>
            </div>
        </div>
    </footer>

</body>
</html>

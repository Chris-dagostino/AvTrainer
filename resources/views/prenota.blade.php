<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenota Consulenza - AvTrainer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-950 text-gray-100">
    
    <!-- Header -->
    <header class="bg-gray-900/95 backdrop-blur-sm border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl font-black">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600">
                        💪 AvTrainer
                    </span>
                </a>
                <a href="/" class="text-gray-400 hover:text-orange-500 transition">
                    👈 Torna alla home
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            
            <!-- Titolo -->
            <div class="text-center mb-12">
                <h1 class="text-4xl sm:text-5xl font-black mb-6">
                    Prenota la tua
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-600">
                        Consulenza Gratuita
                    </span>
                </h1>
                <p class="text-xl text-gray-400">
                    30 minuti per parlare dei tuoi obiettivi e creare insieme un piano personalizzato
                </p>
            </div>

            <!-- Card con informazioni -->
            <div class="bg-gray-900 rounded-2xl p-8 mb-8 border border-gray-800">
                <h2 class="text-2xl font-bold mb-6 text-orange-500">📋 Cosa include la consulenza:</h2>
                <ul class="space-y-4 text-gray-300">
                    <li class="flex items-start gap-3">
                        <span class="text-green-500 text-xl">✓</span>
                        <span>Valutazione del tuo livello di fitness attuale</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-green-500 text-xl">✓</span>
                        <span>Analisi degli obiettivi da raggiungere</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-green-500 text-xl">✓</span>
                        <span>Consigli personalizzati su allenamento e alimentazione</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-green-500 text-xl">✓</span>
                        <span>Presentazione dei pacchetti di training disponibili</span>
                    </li>
                </ul>
            </div>

            <!-- Pulsante per aprire Google Calendar -->
            <div class="text-center">
                <a href="IL_TUO_LINK_GOOGLE_CALENDAR_QUI" 
                   target="_blank"
                   rel="noopener noreferrer"
                   class="inline-flex items-center justify-center px-10 py-5 text-xl font-bold text-white bg-gradient-to-r from-orange-500 to-red-600 rounded-xl shadow-2xl shadow-orange-500/50 hover:shadow-orange-500/80 transition-all duration-300 hover:scale-105">
                    🗓️ Scegli Data e Ora
                </a>
                <p class="text-gray-500 text-sm mt-4">
                    Verrai reindirizzato a Google Calendar per scegliere lo slot disponibile
                </p>
            </div>

            <!-- Info contatti alternativi -->
            <div class="mt-12 text-center">
                <p class="text-gray-400 mb-4">Preferisci contattarmi direttamente?</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="mailto:info@avtrainer.it" 
                       class="text-orange-500 hover:text-orange-400 transition">
                        📧 info@avtrainer.it
                    </a>
                    <a href="https://wa.me/393123456789" 
                       target="_blank"
                       class="text-lime-500 hover:text-lime-400 transition">
                        📱 WhatsApp
                    </a>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-950 border-t border-gray-800 py-8 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-500">
            <p>© 2025 AvTrainer. Tutti i diritti riservati.</p>
        </div>
    </footer>

</body>
</html>

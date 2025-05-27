<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alien Spotter HQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-sans">

    <!-- Header -->
    <header class="text-center py-10 bg-gray-900 shadow-md">
        <h1 class="text-5xl font-bold text-lime-400">UFO Spotten</h1>
        <p class="text-gray-300 mt-2">Welkom, heeft u bewijs van wat u denkt aliens of UFO's te zijn?</p>
        <p class="text-gray-300 mt-2">Er is een hele communitie hierachter om te discussiseren over hoe het allemaal werkt.</p>

        <a href="{{ route('login') }}" class="mt-6 inline-block bg-lime-500 hover:bg-lime-600 text-black font-semibold py-2 px-6 rounded-full transition duration-300">
            Log In to Report a Sighting
        </a>
    </header>

    <!-- Sections -->
    <main class="max-w-4xl mx-auto px-6 py-16 space-y-16">

        <!-- Section 1 -->
        <section class="bg-gray-800 p-8 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold text-lime-300 mb-4">Wie zijn we?</h2>
            <p class="text-gray-300">
                <!-- You can change this placeholder text -->
                 Wij zijn een groep dat een mix is van sceptics overtuigt willen worden en gelovers die de passie wilt delen
              
            </p>
        </section>

        <!-- Section 2 -->
        <section class="bg-gray-800 p-8 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold text-lime-300 mb-4">Waarvoor de website?</h2>
            <p class="text-gray-300">
                <!-- You can change this placeholder text -->
                 Het belangrijkste is dat we alle UFO meldingen documenteren zo goed mogelijk,
                  en met het overduidelijke alien gedrag zo veel mogelijk info hieruit kunnen halen om bij te leren.
                
            </p>
        </section>

        <!-- Section 3 -->
        <section class="bg-gray-800 p-8 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold text-lime-300 mb-4">Maak een account en doe met ons mee!</h2>
            <p class="text-gray-300">
                <!-- You can change this placeholder text -->
                Login in voor meer nieuws en nieuwe fotos geposts
            </p>
        </section>

    </main>

</body>
</html>

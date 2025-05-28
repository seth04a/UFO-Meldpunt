<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UFO Spotten</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-sans">
    
    <header class="text-center py-10 bg-gray-900 shadow-md">
        <h1 class="text-5xl font-bold text-lime-400">UFO Spotten</h1>
        <p class="text-gray-300 mt-2">Welkom, heeft u bewijs van wat u denkt aliens of UFO's te zijn?</p>
        <p class="text-gray-300 mt-2">Er is een hele communitie hierachter om te discussiseren over hoe het allemaal werkt.</p>

        <a href="{{ route('login') }}" class="mt-6 inline-block bg-lime-500 hover:bg-lime-600 text-black font-semibold py-2 px-6 rounded-full transition duration-300">
            Log In to Report a Sighting
        </a>
    </header>
    <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-6">
    <div id="general_info" class="md:w-3/4">
    <main class="max-w-4xl mx-auto px-6 py-16 space-y-16">

        <section class="bg-gray-800 p-8 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold text-lime-300 mb-4">Wie zijn we?</h2>
            <p class="text-gray-300">
                 Wij zijn een groep dat een mix is van sceptics overtuigt willen worden en gelovers die de passie wilt delen
              
            </p>
        </section>

        <section class="bg-gray-800 p-8 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold text-lime-300 mb-4">Waarvoor de website?</h2>
            <p class="text-gray-300">
                 Het belangrijkste is dat we alle UFO meldingen documenteren zo goed mogelijk,
                  en met het overduidelijke alien gedrag zo veel mogelijk info hieruit kunnen halen om bij te leren.
                
            </p>
        </section>

        <section class="bg-gray-800 p-8 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold text-lime-300 mb-4">Maak een account en doe met ons mee!</h2>
            <p class="text-gray-300">
                Login in voor meer nieuws en nieuwe fotos geposts
            </p>
        </section>

    </main>
    </div>
    <div id="latest_sightings" class="md:w-1/4 md:ml-4 py-8">
        <div class="bg-gray-800 p-4 rounded-2xl shadow-lg h-full overflow-y-auto max-h-[700px]">
            <h2 class="text-xl font-bold text-lime-300 mb-4">Laatste nieuwe posts</h2>
            @if(isset($posts) && $posts->count())
    @foreach($posts as $post)
        <div class="mb-6 border-b border-gray-700 pb-4">
            <img src="{{ asset('storage/' . $post->image) }}" alt="Sighting Image" class="w-full h-32 object-cover rounded mb-2">
            <div class="text-gray-200 text-sm">
                <span class="block"><strong>Datum:</strong> {{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</span>
                <span class="block"><strong>Locatie:</strong> {{ $post->location }}</span>
            </div>
        </div>
    @endforeach
@else
    <p class="text-gray-400">Nog geen sightings gevonden.</p>
@endif
        </div>
    </div>
</div>
</body>
</html>

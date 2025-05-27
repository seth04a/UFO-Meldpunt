<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UFO Meldpunt</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Vite assets -->
    @livewireStyles
    @filamentStyles
</head>
<body>
    {{ $slot ?? '' }}

    @livewireScripts
    @filamentScripts
</body>
</html>
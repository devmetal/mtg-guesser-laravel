<!DOCTYPE html>
<html data-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MTG Card Guesser Game</title>

    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="antialiased">
    <livewire:guesser />

    @livewireScripts
</body>

</html>

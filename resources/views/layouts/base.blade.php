<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SkillCode</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style type="text/tailwindcss">
        @theme {
            --font-display: "Montserrat", "sans-serif";
        }
    </style>
</head>
<body class="font-[Montserrat]">
    @include('layouts.partials.header')
    {{ $slot }}
    @include('layouts.partials.footer')
</body>
</html>

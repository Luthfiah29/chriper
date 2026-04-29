<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Chirper' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#0b0b10] text-[#cdd6f4]">

    <x-navbar />

    <main class="py-8">
        {{ $slot }}
    </main>

    <x-footer />
</body>
</html>

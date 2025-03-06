<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Posivitus' }}</title>
</head>

<body class="container mx-auto">
    <div class="mt-0 mx-2 max-w-[1440px] sm:mx-2 xl:mx-[50px] lg:mt-[60px]">

        <livewire:components.layouts.navbar />
        {{ $slot }}
        <livewire:components.layouts.footer />
    </div>
</body>

</html>

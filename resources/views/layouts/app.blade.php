<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body class="container mx-auto">
    <div class="lg:mt-[60px] xl:mx-[50px] mt-0 mx-auto max-w-[1440px]">
        <x-home.hero.navbar />
        {{ $slot }}
        <x-home.footer />
    </div>
</body>

</html>

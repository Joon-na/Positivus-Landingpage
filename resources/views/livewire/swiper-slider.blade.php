<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Livewire Swiper</title>
    
    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    {{-- Tailwind CSS (jika diperlukan) --}}
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200 flex items-center justify-center min-h-screen">
    
    {{-- Swiper Container --}}
    <div class="w-full max-w-6xl p-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($slides as $slide)
                    <div class="swiper-slide flex items-center justify-center bg-white text-lg font-semibold p-10">
                        {{ $slide }}
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    {{-- SwiperJS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 20,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    640: { slidesPerView: 2, spaceBetween: 20 },
                    768: { slidesPerView: 3, spaceBetween: 30 },
                    1024: { slidesPerView: 4, spaceBetween: 40 },
                },
            });
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
 
</head>

<body class="container mx-auto">
    <div class="mt-[60px] mx-auto max-w-[1440px]">
        {{-- <x-home.hero.navbar /> --}}
        <x-home.hero.hero />
        <x-home.services />
        <x-home.cta-block />
        <x-home.case-studies />
        <x-home.process />
        <x-home.team />
        <x-home.testimonial />
        <x-home.contact />
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>

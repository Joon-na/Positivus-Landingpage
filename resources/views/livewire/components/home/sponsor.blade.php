<section>
    <div class="relative flex overflow-hidden whitespace-nowrap mt-[40px] lg:mt-[70px] mb-[80px] lg:mb-[140px]">
        <div class="flex gap-32 animate-marquee">
            <img src="/images/home/amazon.svg" alt="amazon" class="w-[80px] sm:w-[100px]">
            <img src="/images/home/dribble.svg" alt="dribble" class="w-[80px] sm:w-[100px]">
            <img src="/images/home/hub-spot.svg" alt="hubspot" class="w-[80px] sm:w-[100px]">
            <img src="/images/home/netflix.svg" alt="netflix" class="w-[80px] sm:w-[100px]">
            <img src="/images/home/notion.svg" alt="notion" class="w-[80px] sm:w-[100px]">
            <img src="/images/home/zoom.svg" alt="zoom" class="w-[80px] sm:w-[100px]">
        </div>
    </div>

    <style>
        @keyframes marquee {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }

        .animate-marquee {
            @apply flex gap-32;
            animation: marquee 30s linear infinite;
        }
    </style>
</section>

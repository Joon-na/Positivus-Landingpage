<section class="mx-auto flex flex-col-reverse items-center justify-between lg:flex-row px-6 lg:px-0">
    <div class="flex flex-col max-w-lg gap-[25px] text-center lg:text-left">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 lg:text-[60px] leading-tight">
            Navigating the digital landscape for success
        </h1>
        <p class="text-gray-600 text-base sm:text-lg lg:text-xl max-w-[498px]">
            Our digital marketing agency helps businesses grow and succeed online through a range of services including
            SEO, PPC, social media marketing, and content creation.
        </p>
        <button class="mb-6 mt-6 lg:mb-[34px] lg:self-start">
            <a class="py-4 px-4 sm:py-[20px] rounded-[14px] sm:px-[35px] bg-black text-white text-center sm:w-auto" href="#">
                Book a Consultation
            </a>
        </button>
        
    </div>

    <div class="w-full max-w-xs sm:max-w-md lg:max-w-lg">
        <img src="/images/home/hero.png" alt="Hero image of digital marketing services" class="w-full h-auto">
    </div>
</section>

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

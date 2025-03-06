<div>
    <div class="flex flex-col lg:items-center lg:flex-row text-center lg:text-left mb-[80px]">
        <h1
            class="inline-block lg:mr-[40px] mb-2 px-3 py-1 mx-auto sm:mx-0 rounded-[7px] bg-[#B9FF66] text-2xl sm:text-3xl lg:text-[40px] font-bold">
            Testimonials
        </h1>
        <p class="text-lg sm:text-xl mx-auto sm:mx-0 max-w-[90%] sm:max-w-[580px]">
            Hear from Our Satisfied Clients: Read Our Testimonials to Learn More about Our Digital Marketing Services
        </p>
    </div>

    <section class="bg-[#1E1B24] py-12 px-4 rounded-3xl mb-[140px]">
        <!-- Testimonial slider container -->
        <div class="relative max-w-6xl mx-auto">
            <!-- Swiper container -->
            <div class="swiper testimonialSwiper">
                <div class="swiper-wrapper mb-16">
                    <!-- Testimonial slide 1 -->
                    <div class="swiper-slide">
                        <div class="relative">
                            <!-- Testimonial with image bubble -->
                            <div class="relative h-auto">
                                <!-- Bubble background image -->
                                <img class="w-full max-w-[606px] mx-auto" src="/images/home/Bubble.png"
                                    alt="Speech bubble">

                                <!-- Testimonial text positioned over the bubble -->
                                <div class="absolute top-0 left-0 right-0 py-3 px-9 text-white">
                                    <p class="text-sm md:text-base max-w-[500px] mx-auto">
                                        "We have been working with Positivus for the past year and have seen a
                                        significant
                                        increase in website traffic and leads as a result of their efforts. The team is
                                        professional, responsive, and truly cares about the success of our business. We
                                        highly recommend Positivus to any company looking to grow their online
                                        presence."
                                    </p>
                                </div>
                            </div>

                            <!-- Author info positioned below the bubble -->
                            <div class="mt-4 ml-8">
                                <p class="text-[#B9FF66] font-medium">John Smith</p>
                                <p class="text-white text-sm">Marketing Director at XYZ Corp</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial slide 2 -->
                    <div class="swiper-slide">
                        <div class="relative">
                            <!-- Testimonial with image bubble -->
                            <div class="relative h-auto">
                                <!-- Bubble background image -->
                                <img class="w-full max-w-[606px] mx-auto" src="/images/home/Bubble.png"
                                    alt="Speech bubble">

                                <!-- Testimonial text positioned over the bubble -->
                                <div class="absolute top-0 left-0 right-0 py-3 px-9 text-white">
                                    <p class="text-sm md:text-base max-w-[500px] mx-auto">
                                        "We have been working with Positivus for the past year and have seen a
                                        significant
                                        increase in website traffic and leads as a result of their efforts. The team is
                                        professional, responsive, and truly cares about the success of our business. We
                                        highly recommend Positivus to any company looking to grow their online
                                        presence."
                                    </p>
                                </div>
                            </div>

                            <!-- Author info positioned below the bubble -->
                            <div class="mt-4 ml-8">
                                <p class="text-[#B9FF66] font-medium">John Smith</p>
                                <p class="text-white text-sm">Marketing Director at XYZ Corp</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial slide 3 -->
                    <div class="swiper-slide">
                        <div class="relative">
                            <!-- Testimonial with image bubble -->
                            <div class="relative h-auto">
                                <!-- Bubble background image -->
                                <img class="w-full max-w-[606px] mx-auto" src="/images/home/Bubble.png"
                                    alt="Speech bubble">

                                <!-- Testimonial text positioned over the bubble -->
                                <div class="absolute top-0 left-0 right-0 py-3 px-9 text-white">
                                    <p class="text-sm md:text-base max-w-[500px] mx-auto">
                                        "We have been working with Positivus for the past year and have seen a
                                        significant
                                        increase in website traffic and leads as a result of their efforts. The team is
                                        professional, responsive, and truly cares about the success of our business. We
                                        highly recommend Positivus to any company looking to grow their online
                                        presence."
                                    </p>
                                </div>
                            </div>

                            <!-- Author info positioned below the bubble -->
                            <div class="mt-4 ml-8">
                                <p class="text-[#B9FF66] font-medium">John Smith</p>
                                <p class="text-white text-sm">Marketing Director at XYZ Corp</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Combined navigation controls container -->
                <div class="flex items-center justify-center gap-80 mt-6">
                    <!-- Prev arrow -->
                    <div class="swiper-button-prev text-white opacity-70 hover:opacity-100 h-8 w-8 cursor-pointer">
                        <img src="/images/home/arrow-right.svg" alt="Previous" class="h-8 transform rotate-180 w-8" />
                    </div>

                    <!-- Pagination bullets -->
                    <div class="swiper-pagination flex justify-center items-center gap-2"></div>

                    <!-- Next arrow -->
                    <div class="swiper-button-next text-white opacity-70 hover:opacity-100 h-8 w-8 cursor-pointer">
                        <img src="/images/home/arrow-right.svg" alt="Next" class="h-8 w-8" />
                    </div>
                </div>

            </div>
        </div>

        <style>
            /* Custom styles for Swiper elements */
            .swiper-pagination-bullet-active {
                background-color: #B9FF66 !important;
                opacity: 1 !important;
            }

            /* Reset swiper navigation button styles */
            .swiper-button-prev,
            .swiper-button-next {
                position: static !important;
                margin-top: 0 !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .swiper-button-prev::after,
            .swiper-button-next::after {
                display: none !important;
            }
        </style>
    </section>
</div>

@script
    <script>
        new Swiper('.testimonialSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            centeredSlides: true,
            loop: false,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1.5,
                },
                1024: {
                    slidesPerView: 2.2,
                },
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function(index, className) {
                    return '<span class="' + className +
                        ' inline-block w-3 h-3 rounded-full bg-white opacity-50 cursor-pointer transition-opacity duration-300"></span>';
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Make the active pagination bullet green
        const observer = new MutationObserver(function(mutations) {
            document.querySelectorAll('.swiper-pagination-bullet-active').forEach(function(bullet) {
                bullet.style.backgroundColor = '#B9FF66';
                bullet.style.opacity = '1';
            });
        });

        observer.observe(document.body, {
            childList: true,
            subtree: true
        });
    </script>
@endscript

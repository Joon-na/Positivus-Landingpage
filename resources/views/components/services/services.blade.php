<section class="flex flex-col">
    <div class="flex flex-col lg:flex-row text-center lg:text-left mb-[80px]">
        <h1 class="inline-block lg:mr-[40px] px-3 py-1 mx-auto lg:mx-0 rounded-[7px] bg-[#B9FF66] text-[40px]">
            Services
        </h1>
        <p class="text-[18px] mx-auto lg:mx-0 w-[350px] lg:w-[580px]">
            At our digital marketing agency, we offer a range of services to help businesses grow and succeed online.
            These services include:
        </p>
    </div>
    

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[40px] mb-[100px]">
        @livewire('service-card', [
            'title_1' => 'Pay-per-click',
            'title_2' => 'Advertising',
            'background_card' => '#F3F3F3',
            'background_title' => '#FFFFFF',
            'text_color' => '#000000',
            'image' => '/images/home/search-engine.png',
            'arrow' => '/images/home/black-arrow.svg',
            'text_arrow' => '#000000',
        ])

        @livewire('service-card', [
            'title_1' => 'Social Media',
            'title_2' => 'Marketing',
            'background_card' => '#F3F3F3',
            'background_title' => '#FFFFFF',
            'text_color' => '#000000',
            'image' => '/images/home/social-media-marketing.png',
            'arrow' => '/images/home/black-arrow.svg',
            'text_arrow' => '#000000',
        ])

        @livewire('service-card', [
            'title_1' => 'Email',
            'title_2' => 'Marketing',
            'background_card' => '#F3F3F3',
            'background_title' => '#FFFFFF',
            'text_color' => '#000000',
            'image' => '/images/home/email-marketing.png',
            'arrow' => '/images/home/black-arrow.svg',
            'text_arrow' => '#000000',
        ])

        @livewire('service-card', [
            'title_1' => 'Content',
            'title_2' => 'Creation',
            'background_card' => '#F3F3F3',
            'background_title' => '#FFFFFF',
            'text_color' => '#000000',
            'image' => '/images/home/content-creation.png',
            'arrow' => '/images/home/black-arrow.svg',
            'text_arrow' => '#000000',
        ])

        @livewire('service-card', [
            'title_1' => 'Analytics and',
            'title_2' => 'Tracking',
            'background_card' => '#F3F3F3',
            'background_title' => '#FFFFFF',
            'text_color' => '#000000',
            'image' => '/images/home/analytics-and-tracking.png',
            'arrow' => '/images/home/black-arrow.svg',
            'text_arrow' => '#000000',
        ])

        @livewire('service-card', [
            'title_1' => 'Search Engine',
            'title_2' => 'Optimization',
            'background_card' => '#F3F3F3',
            'background_title' => '#FFFFFF',
            'text_color' => '#000000',
            'image' => '/images/home/analytics-and-tracking.png',
            'arrow' => '/images/home/black-arrow.svg',
            'text_arrow' => '#000000',
        ])


    </div>
</section>

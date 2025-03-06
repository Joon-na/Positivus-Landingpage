<section class="flex flex-col">
    <div class="flex flex-col lg:items-center lg:flex-row text-center lg:text-left mb-8">
        <h1 class="inline-block lg:mr-[40px] mb-2 px-3 py-1 mx-auto sm:mx-0 rounded-[7px] bg-[#B9FF66] text-2xl sm:text-3xl lg:text-[40px] font-bold">
            Our Other Services
        </h1>
        <p class="text-lg sm:text-xl mx-auto sm:mx-0 max-w-[90%] sm:max-w-[580px]">
            At our digital marketing agency, we offer a range of services to help businesses grow and succeed online.
            These services include:
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[40px] mb-[100px]">
        @livewire('components.services.service-card', [
            'title_1' => 'Pay-per-click',
            'title_2' => 'Advertising',
            'background_card' => '#F3F3F3',
            'background_title' => '#FFFFFF',
            'text_color' => '#000000',
            'image' => '/images/home/search-engine.png',
            'arrow' => '/images/home/black-arrow.svg',
            'text_arrow' => '#000000',
        ])

        @livewire('components.services.service-card', [
            'title_1' => 'Social Media',
            'title_2' => 'Marketing',
            'background_card' => '#F3F3F3',
            'background_title' => '#FFFFFF',
            'text_color' => '#000000',
            'image' => '/images/home/social-media-marketing.png',
            'arrow' => '/images/home/black-arrow.svg',
            'text_arrow' => '#000000',
        ])

        @livewire('components.services.service-card', [
            'title_1' => 'Email',
            'title_2' => 'Marketing',
            'background_card' => '#F3F3F3',
            'background_title' => '#FFFFFF',
            'text_color' => '#000000',
            'image' => '/images/home/email-marketing.png',
            'arrow' => '/images/home/black-arrow.svg',
            'text_arrow' => '#000000',
        ])

        @livewire('components.services.service-card', [
            'title_1' => 'Content',
            'title_2' => 'Creation',
            'background_card' => '#F3F3F3',
            'background_title' => '#FFFFFF',
            'text_color' => '#000000',
            'image' => '/images/home/content-creation.png',
            'arrow' => '/images/home/black-arrow.svg',
            'text_arrow' => '#000000',
        ])

        @livewire('components.services.service-card', [
            'title_1' => 'Analytics and',
            'title_2' => 'Tracking',
            'background_card' => '#F3F3F3',
            'background_title' => '#FFFFFF',
            'text_color' => '#000000',
            'image' => '/images/home/analytics-and-tracking.png',
            'arrow' => '/images/home/black-arrow.svg',
            'text_arrow' => '#000000',
        ])

        @livewire('components.services.service-card', [
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

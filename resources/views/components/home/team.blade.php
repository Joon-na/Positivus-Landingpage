<section class="mb-[100px] flex flex-col justify-center">
    <div class="flex flex-col lg:items-center lg:flex-row text-center lg:text-left mb-[80px]">
        <h1 class="inline-block lg:mr-[40px] px-3 py-1 mx-auto lg:mx-0 rounded-[7px] bg-[#B9FF66] text-[40px]">
            Team
        </h1>
        <p class="text-[18px] mx-auto lg:mx-0 w-[350px] lg:w-[580px]">
            Meet the skilled and experienced team behind our successful digital marketing strategies
        </p>
    </div>

    {{-- Grid yang responsif dan rata kiri-kanan --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-[40px] w-full">
        @livewire('team-card', [
            'name' => 'John Smith',
            'position' => 'CEO and Founder',
            'image' => '/images/home/team-1.png',
            'description' => '10+ years of experience in digital marketing. Expertise in SEO, PPC, and content strategy' 
        ])
        @livewire('team-card', [
            'name' => 'Jane Doe',
            'position' => 'Director of Operations',
            'image' => '/images/home/team-2.png',
            'description' => '7+ years of experience in project management and team leadership. Strong organizational and communication skills' 
        ])
        @livewire('team-card', [
            'name' => 'Michael Brown',
            'position' => 'Senior SEO Specialist',
            'image' => '/images/home/team-3.png',
            'description' => '5+ years of experience in SEO and content creation. Proficient in keyword research and on-page optimization' 
        ])
        @livewire('team-card', [
            'name' => 'Emily Johnson',
            'position' => 'PPC Manager',
            'image' => '/images/home/team-4.png',
            'description' => '5+ years of experience in SEO and content creation. Proficient in keyword research and on-page optimization' 
        ])
        @livewire('team-card', [
            'name' => 'Brian Williams',
            'position' => 'Social Media Specialist',
            'image' => '/images/home/team-5.png',
            'description' => '5+ years of experience in SEO and content creation. Proficient in keyword research and on-page optimization' 
        ])
        @livewire('team-card', [
            'name' => 'Sarah Kim',
            'position' => 'Content Creator',
            'image' => '/images/home/team-6.png',
            'description' => '5+ years of experience in SEO and content creation. Proficient in keyword research and on-page optimization' 
        ])
    </div>

    <div class="flex justify-end mt-[40px]"> 
        <button><a href="#" class="px-[80px] py-[20px] text-white bg-black rounded-[14px]">See all team</a></button>
    </div>
</section>

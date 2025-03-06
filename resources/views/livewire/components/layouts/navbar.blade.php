<nav class="flex justify-between h-[68px] items-center mb-[70px] bg-white px-4 lg:px-0">
    <a wire:navigate href="/"><img src="/images/home/positivus-logo.svg" alt="logo" class="h-10"></a>
    
    <!-- Hamburger Icon -->
    <button id="menu-toggle" class="lg:hidden text-black focus:outline-none">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>
    
    <!-- Navigation Links -->
    <div id="menu" class="hidden lg:flex lg:gap-[40px] flex-col lg:flex-row absolute lg:static top-[68px] left-0 w-full lg:w-auto bg-white lg:bg-transparent shadow-lg lg:shadow-none p-5 lg:p-0 transition-all duration-300 ease-in-out">
        <ul class="flex flex-col lg:flex-row lg:gap-[40px] text-center lg:text-left">
            <li><a wire:navigate wire:current="font-bold bg-[#B9FF66] px-2 rounded-lg" href="/about-us" class="text-black text-[20px] transition duration-300 ease-in hover:-translate-y-1 hover:scale-110 block py-2">About us</a></li>
            <li><a wire:navigate wire:current="font-bold bg-[#B9FF66] px-2 rounded-lg" href="/services" class="text-black text-[20px] transition duration-300 ease-in hover:-translate-y-1 hover:scale-110 block py-2">Services</a></li>
            <li><a wire:navigate wire:current="font-bold bg-[#B9FF66] px-2 rounded-lg" href="/use-case" class="text-black text-[20px] transition duration-300 ease-in hover:-translate-y-1 hover:scale-110 block py-2">Use Cases</a></li>
            <li><a wire:navigate wire:current="font-bold bg-[#B9FF66] px-2 rounded-lg" href="/pricing" class="text-black text-[20px] transition duration-300 ease-in hover:-translate-y-1 hover:scale-110 block py-2">Pricing</a></li>
            <li><a wire:navigate wire:current="font-bold bg-[#B9FF66] px-2 rounded-lg" href="/blog" class="text-black text-[20px] transition duration-300 ease-in hover:-translate-y-1 hover:scale-110 block py-2">Blog</a></li>
            <li><a wire:navigate wire:current="font-bold bg-[#B9FF66] px-2 rounded-lg" href="/contact" class="text-black border-1 py-[10px] px-[20px] rounded-[14px] text-[20px] block mt-3 lg:mt-0">Request a quote</a></li>
        </ul>
    </div>
</nav>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
    });
</script>
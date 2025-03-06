<section>
    <div class="flex flex-col lg:items-center lg:flex-row text-center lg:text-left">
        <h1
            class="inline-block lg:mr-[40px] mb-2 px-3 py-1 mx-auto sm:mx-0 rounded-[7px] bg-[#B9FF66] text-2xl sm:text-3xl lg:text-[40px] font-bold">
            Frequently Asked Questions
        </h1>
    </div>
    <div class="max-w-[1440px] mx-auto py-10">
        <div class="space-y-4">
            <div class="border-[1px] rounded-4xl border-b-5 border-x-[1px] overflow-hidden" x-data="{ open: false }">
                <div @click="open = !open"
                    class="p-6 flex justify-between items-center font-bold cursor-pointer rounded-t-lg"
                    :class="open ? 'bg-[#B9FF66]' : 'bg-gray-100'">
                    <h2>Are there any additional fees or charges that may apply</h2>
                    <button class="w-10 h-10 flex items-center justify-center bg-white rounded-full">
                        <span x-show="open" class="text-2xl font-bold">&#8722;</span>
                        <span x-show="!open" class="text-2xl font-bold" x-cloak>&#43;</span>
                    </button>
                </div>
                <div x-show="open" x-collapse x-cloak class="bg-[#B9FF66] p-6 border-t text-sm text-black">
                    During the initial consultation, we will discuss your business goals and objectives, target
                    audience, and current marketing efforts. This will allow us to understand your needs and tailor our
                    services to best fit your requirements.
                </div>
            </div>

            <div class="border rounded-4xl border-b-5 border-x-[1px] overflow-hidden" x-data="{ open: false }">
                <div @click="open = !open"
                    class="p-6 flex justify-between items-center font-bold cursor-pointer rounded-t-lg"
                    :class="open ? 'bg-[#B9FF66]' : 'bg-gray-100'">
                    <h2>Can I change or cancel my plan at anytime</h2>
                    <button class="w-10 h-10 flex items-center justify-center bg-white rounded-full">
                        <span x-show="open" class="text-2xl font-bold">&#8722;</span>
                        <span x-show="!open" class="text-2xl font-bold" x-cloak>&#43;</span>
                    </button>
                </div>
                <div x-show="open" x-collapse x-cloak class="bg-[#B9FF66] p-6 border-t text-sm text-black">
                    Our team will conduct extensive research on your industry, competitors, and target market to develop
                    a comprehensive strategy tailored to your business needs.
                </div>
            </div>

            <div class="border-[1px] rounded-4xl border-b-5 border-x-[1px] overflow-hidden" x-data="{ open: false }">
                <div @click="open = !open"
                    class="p-6 flex justify-between items-center font-bold cursor-pointer rounded-t-lg"
                    :class="open ? 'bg-[#B9FF66]' : 'bg-gray-100'">
                    <h2>Do you offer a free trial or consultation</h2>
                    <button class="w-10 h-10 flex items-center justify-center bg-white rounded-full">
                        <span x-show="open" class="text-2xl font-bold">&#8722;</span>
                        <span x-show="!open" class="text-2xl font-bold" x-cloak>&#43;</span>
                    </button>
                </div>
                <div x-show="open" x-collapse x-cloak class="bg-[#B9FF66] p-6 border-t text-sm text-black">
                    During the initial consultation, we will discuss your business goals and objectives, target
                    audience, and current marketing efforts. This will allow us to understand your needs and tailor our
                    services to best fit your requirements.
                </div>
            </div>
        </div>
    </div>
</section>

<div
    class="flex flex-col items-center justify-between border-b-5 border-x-1 border-t-1 border-black shadow-lg rounded-[45px] w-full h-[331px] p-5 bg-white">
    <div class="flex flex-row text-left w-[317px] h-[102px] mt-[40px]">
        <img src="{{ $image }}" alt="Profile Picture"
            class="w-[105px] h-[102px] rounded-full border-2 border-black">
        <div class="mt-[53px] text-left ml-[20px] mr-[9.35px]">
            <p class="text-lg font-bold">{{ $name }}</p>
            <p class="text-gray-600 w-[194px]">{{ $position }}</p>
        </div>
        <div class="mt-3">
            <a href="#">
                <img src="/images/home/linkedin-icon.svg" alt="LinkedIn">
            </a>
        </div>

    </div>

    <div class="w-[317px] h-[1px] bg-black"></div>

    <p class="text-left text-gray-700 text-lg mb-[20px]">{{ $description }}</p>
</div>

<div class="flex flex-row items-center border-t-1 border-b-5 border-x-1 justify-between rounded-[45px] p-[50px]" style="background-color: {{ $background_card }};">
    <div>
        <p class="text-left text-[30px] rounded-[7px]" style="background-color: {{ $background_title }}; color: {{ $text_color }};" class="text-[30px]">
            {{ $title_1 }}
        </p>
        <p class="text-left text-[30px] rounded-[7px]" style="background-color: {{ $background_title }}; color: {{ $text_color }};" class="text-[30px]">
            {{ $title_2 }}
        </p>
        <div class="flex flex-row items-center mt-[93px] gap-x-[15px]">
            <img src="{{ $arrow }}" alt="">
            <p class="text-[20px]" style="color: {{ $text_arrow }};">Learn More</p>
        </div>
    </div>
    <div>
        <img src="{{ $image }}" alt="">
    </div>
</div>

@php
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
$image = get_sub_field('image');
$button_link = get_sub_field('button_link');
$button_label = get_sub_field('button_label');
$custom_class = get_sub_field('custom_class');
@endphp

<section class=" {!! $custom_class ? $custom_class : ' pb-12 lg:pb-20'; !!} ">

    <div class="w-full overflow-hidden lg:flex lg:max-h-[550px]">
        <div class="w-full h-full lg:order-2 order-1 relative">  
            <img class="w-full h-full object-cover absolute image-flip" src="{{ $image['url'] }}" alt="">
            <div class="lg:w-1/3 w-full px-4 py-8 xl:px-24 lg:py-12 bg-transparent lg:order-1 order-2 z-10 h-full overflow-hidden">
                <div class="bg-primary lg:w-1/3 w-full  mix-blend-multiply h-full absolute inset-0"> </div>
                <div class="relative">
                    <h3 class="lg:text-3xl text-2xl font-bold xl:mb-10 lg:mb-6 text-white ">{{ $title }}</h3>
                    <div class="child-p:text-white child-p:font-normal xl:mb-10 lg:mb-6">{!! $paragraph !!}</div>
                    <a href="{{ $button_link }}" class="btn inline-block relative bg-[#E89604] hover:bg-white hover:text-[#39383A] hover:border-none rounded-full text-white" >{{ $button_label }}</a>
                </div>
               
            </div>
        </div>

    </div>
</section>

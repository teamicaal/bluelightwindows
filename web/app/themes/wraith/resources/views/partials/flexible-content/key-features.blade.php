@php
$custom_class = get_sub_field('custom_class');
$image = get_sub_field('image');
$image_alt = get_sub_field('image_alt');
$title = get_sub_field('title');
@endphp
<section id="key-features" class="{{ $custom_class }} relative z-10 lg:py-16 py-10">
    <div class="container flex flex-wrap mx-auto items-center">
        <div class="w-full mx-auto flex flex-wrap items-center ">
            <div class="w-full ml-auto lg:w-1/2 xl:w-3/5 md:pr-16 pr-0 order-last lg:order-first">
                <h2 class="lg:text-4xl text-3xl font-bold text-[#39383A] tracking-wide capitalize border-b border-gray-300 py-4">{!! $title
                    !!}</h2>
                <div id="key-features" class="pl-8">
                    @php
                    $i = 0;
                    @endphp
                    @while(have_rows('accordion'))
                    @php
                    the_row();
                    $i++;
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    @endphp
                    <div class="py-2 {!! $text ? 'accordion-heading ' : null !!} {{ $i !== 1 ? 'collapsed' : null }}">
                        <div class="flex justify-between">
                            <h4 class="accordion-title text-lg  text-[#3B3B3B] tracking-wide relative line-before font-display line-before ">
                                {{ $title }}</h4>
                            {!! $text ? '<i class="fas fa-chevron-up"></i>' : null !!}
                        </div>

                    </div>
                    <div class="accordion-text tracking-wide child-p:text-[#5D5D5D] {{ $i !== 1 ? 'collapse' : null }}">{!! $text !!}</div>

                    @endwhile
                </div>

            </div>
            @if($image)
            <div class="w-full lg:w-1/2 xl:w-2/5 mx-auto order-first lg:order-last mb-2 lg:mb-0">
                <div class="embed embed-4by3 border border-primary">
                    <img src="{{ $image['sizes']['4by3-sm'] }}" alt="{{ $image_alt ? $image_alt : $image['alt'] }}"
                        class="object-cover absolute h-full w-full lozad p-3">
                </div>
            </div>
            @endif
        </div>

    </div>
</section>

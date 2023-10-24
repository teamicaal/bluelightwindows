@php
$custom_class = get_sub_field('custom_class');
    $title = get_sub_field('title');
    $paragraph = get_sub_field('paragraph');
    $title = get_sub_field('title');
    $full_image = null;
@endphp


<section id="color-swatches" class="{!! $custom_class ? $custom_class : ' lg:py-20 py-12'; !!}">
    <div class="container mx-auto flex justify-center">
        <div class="lg:w-1/2 w-full">
            @if ($title)
            <h2 class="text-[#39383A] capitalize font-bold text-center tracking-wide text-3xl lg:text-4xl mb-16">{{ $title }}</h2>
            @endif

            @if ($paragraph)
            <div class="mb-0 child-p:text-base child-p:font-normal child-p:text-[#7C7C7C]">{!! $paragraph !!}</div>
            @endif
            @if (have_rows('colour_swatch'))
                @php
                    $i = 0;
                @endphp
                <div class="flex flex-wrap justify-center gap-x-8 gap-y-16 max-w-[610px] mx-auto">
                    @while (have_rows('colour_swatch'))
                        @php
                            the_row();
                            $swatch = get_sub_field('swatch');
                            $title = get_sub_field('title');
                            $title_clean = strtolower(preg_replace('/\s*/', '', $title));
                            $i++;
                        @endphp

                        <div class="relative flex group">
                            @if ($title)
                            <span
                                class="absolute -top-14 left-1/2 -translate-x-1/2 font-serif bg-secondary text-sm text-white rounded-full py-2 px-4 mb-6 uppercase min-w-max hidden group-hover:inline-block">{{ $title }}</span>
                            @endif
                            <div class="aspect-square h-[75px] rounded-full shadow-lg overflow-hidden cursor-pointer">
                                <img data-image-src="{{ $title_clean }}" class="w-full h-full object-cover"
                                    src="{{ $swatch['url'] }}" alt="{{ $swatch['alt'] }}">

                            </div>
                        </div>
                    @endwhile
                </div>
            @endif
        </div>
    </div>
</section>

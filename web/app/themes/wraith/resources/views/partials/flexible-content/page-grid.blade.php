@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
@endphp

<section class=" {!! $custom_class ? ' ' . $custom_class : 'py-8' !!} container mx-auto ">

    <div class="!px-0 text-center text-primary">
        {!! $title ? '<h2 class="text-[#39383A] capitalize font-bold text-center tracking-wide text-3xl lg:text-4xl mb-12  ">' . $title . '</h2>' : null !!}
        @if (have_rows('page_grid'))
            <div class="flex-wrap flex lg:justify-center snap-x overflow-x-scroll lg:overflow-hidden px-2">
                @while (have_rows('page_grid'))
                    @php
                        the_row();
                        $custom_image = get_sub_field('custom_image');
                        $custom_title = get_sub_field('custom_title');
                    @endphp

                        <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4 product-link" style="flex: 0 0 auto;">
                           <div class="embed-1by1 cursor-pointer w-full relative rounded-sm overflow-hidden mb-6 lg:mb-0">
                              <img data-src="{{ $custom_image['url'] }}" src="{{ $custom_image['url'] }}" alt="{!! $custom_image['alt'] !!}" class="lozad object-fit-cover" />
                                <div class="w-full  product-bottom-bg bottom-0 left-0 p-4">
                                  <h4 class="text-xl lg:text-lg text-white font-bold flex self-center relative z-10  mb-0 tracking-widest">{!! $custom_title !!}</h4>
                                </div>
                           </div>
                        </div>
                @endwhile
            </div>
        @endif
    </div>

</section>

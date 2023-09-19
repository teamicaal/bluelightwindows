@php
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $custom_class = get_sub_field('custom_class');
@endphp


<section class="{!! $custom_class ? ' ' . $custom_class : 'lg:py-20 py-12' !!} overflow-hidden">
    <div class="w-full relative">
        <h2 class="mb-4 font-bold text-center text-2xl md:text-4xl">{{ $title }}</h2>
        @if (have_rows('pages'))
            <div class="w-full slick-products">

                @while (have_rows('pages'))
                    @php
                        the_row();
                        $page = get_sub_field('page');
                        $custom_title = get_sub_field('custom_title');
                        $is_custom_link = get_sub_field('is_custom_link');
                    @endphp
                    @if (!$is_custom_link)
                        <div class="mx-2">
                            <a class="z-20" href="{{ get_the_permalink($page->ID) }}">
                                <div class="embed embed-3by4 relative">
                                    <img class="object-cover absolute inset-0 w-full h-full lozad transform transition hover:scale-105"
                                        data-src="{{ get_the_post_thumbnail_url($page->ID) }}"
                                        src="{{ get_the_post_thumbnail_url($page->ID, 'lozad') }}"
                                        alt="{!! $custom_title ? $custom_title : $page->title !!}" itemprop="thumbnail">
                                        <div class="product-link-overlay mix-blend-multiply absolute w-full h-full"></div>
                                    <h2
                                        class="absolute text-center uppercase -translate-x-1/2 left-1/2 bottom-4 font-bold text-lg  text-white mx-auto tracking-widest">
                                        {!! $custom_title ? $custom_title : $page->post_title !!}</h2>
                                </div>
                            </a>
                        </div>
                    @elseif($is_custom_link)
                        @php
                            $custom_title = get_sub_field('custom_title');
                            $custom_image = get_sub_field('custom_image');
                            $custom_link = get_sub_field('custom_link');
                        @endphp
                        <div class="mx-2">
                            <a class="z-20" href="{{ $custom_link }}">
                                <div class="embed embed-3by4">
                                    <div class="bg-primary w-full h-full"></div>
                                    <img class="object-cover-absolute w-full h-full lozad opacity-30 transform transition hover:scale-105 hover:opacity-100"
                                        data-src="{{ $custom_image['sizes']['4by3-sm'] }}"
                                        src="{{ $custom_image['sizes']['4by3-sm'] }}" alt="{!! $custom_title ? $custom_title : $custom_image['alt'] !!}"
                                        itemprop="thumbnail">
                                    <h2
                                        class="absolute text-center uppercase -translate-x-1/2 left-1/2 bottom-4 font-bold text-lg  text-white mx-auto tracking-widest">
                                        {{ $custom_title }}</h2>
                                </div>
                            </a>
                        </div>
                    @endif
                @endwhile
            </div>
        @endif
    </div>
</section>

@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
  $images = get_sub_field('gallery_items');
@endphp

<section class="pt-4 overflow-hidden {!! $custom_class ? ' ' . $custom_class : 'lg:py-20 py-12' !!}">
  <h2 class="text-[#39383A] capitalize font-bold text-center tracking-wide text-3xl lg:text-4xl mb-12 ">{!! $title !!}</h2>
  <div class="container mx-auto">
    @if ($images)
      <div class="slick-gallery-slider slick-overflow-visible">
        @php
            $i = 0;
            foreach( $images as $image ):
        @endphp
        <div>
          <div class="embed-1by1 m-4 group cursor-pointer">
            <a href="{{ $image['url'] }}" data-fancybox="gallery">
              <img class="lozad object-fit-cover w-full h-full inset-0 cursor-pointer" src="{{ $image['url'] }}" data-src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" itemprop="thumbnail">
              <div class="object-fit-cover flex items-center justify-center bg-primary/90 mix-blend-multiply transition opacity-0 group-hover:opacity-100"></div>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    @endif
  </div>
</section>

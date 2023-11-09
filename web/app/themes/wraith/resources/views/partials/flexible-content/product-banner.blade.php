@php
$banner_type = get_sub_field('banner_type');
$images = get_sub_field('images');
$count = count($images);
$logo = get_sub_field('logo');
@endphp


<section class="product-overlay {{ $banner_type ? 'center' : 'start' }} relative h-[75vh]">
  <div class="!absolute inset-0 h-full w-full {{ $count > 1 ? 'slick-banner ' : '' }}">
    @foreach($images as $key=>$image )
      <div class="relative {!! $key != 0 ? 'hidden' : null !!} lg:!min-h-[75vh] sm:!min-h-[75vh] !min-h-[75vh]">
        @if ($logo)
      <div class="items-center mb-8">
        <img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" class="mx-auto max-h-[60px]">
      </div>
    @endif
        <picture data-iesrc="{!! $image['url'] !!}">
            <source media="(min-width: 768px)" srcset="{!! wp_get_attachment_image_srcset($image['id']) !!}" type="image/jpg" />
          <img src="{{ $image['url'] }}" data-src="{{ $image['url'] }}" class="lozad object-fit-cover w-full h-full inset-0" alt="{!! $image['alt'] !!}" width="100%" height="100%">
        </picture>
      </div>
    @endforeach
    </div>
  <div class="lg:px-24 px-4 h-full w-full relative">
   @if (get_sub_field('logo'))   
    <img class="z-10 absolute top-20 right-0 w-15 h-15 object-contain" src=@sub('logo','url') alt="@sub('logo','alt')">
   @endif
    <div   class="content flex flex-col justify-center items-center text-center  h-full w-full relative z-10 gap-4">
      @if (get_sub_field('subtitle'))
        <h3 class="text-white uppercase ">@sub('subtitle')</h3>
      @endif
      <h1 class="text-white uppercase tracking-wide text-4xl font-bold ">@sub('title')</h1>
      <div class="child-p:text-white child-p:tracking-wide">@sub('paragraph')</div>
      <div  class="flex items-center justify-center gap-4">
          @if (have_rows('buttons'))
            @php $i = 0; @endphp
            @while (have_rows('buttons'))
                @php
                    the_row();
                    $i++;
                    $link = get_sub_field('link');
                    $label = get_sub_field('label');
                    $anchor = get_sub_field('anchor');
                @endphp
                <a href="{{ $link }}"
                    class="btn block md:inline-block {{ $i == 1 ? 'bg-[#E89604] rounded-full text-white hover:bg-primary hover:border-none mb-4 md:mr-4 md:mb-0' : 'bg-white hover:bg-primary hover:text-white text-[#242424] rounded-full mb-4 md:mb-0' }}{{ $anchor ? ' btn-scroll' : null }}">{!! $label !!}</a>
            @endwhile
          @endif
      </div>
    </div>
  </div>
</section>



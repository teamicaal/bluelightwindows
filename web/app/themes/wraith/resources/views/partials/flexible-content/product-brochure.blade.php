@php
$title = get_sub_field('title');
@endphp 

<section id="product-brochure" class="">
  <div class="container mx-auto">
    <h1 class="text-[#39383A] capitalize font-bold text-center tracking-wide text-3xl lg:text-4xl mb-12 ">{!! $title  ? $title : null !!}</h1>
  </div>
  <div class="">
    <div class="container mx-auto">

      <div class="flex flex-wrap justify-center">
        @if (have_rows('brochure_repeater'))
          @while (have_rows('brochure_repeater'))
          @php
            the_row();
            $label = get_sub_field('label');
            $iframe_url = get_sub_field('iframe_url');
            $filter = get_sub_field('filter');
          @endphp
            <div class="md:w-1/2 w-full px-4 mb-8 ">
              <div class="bg-white shadow-xl border border-[#6d6e6a33]">
                @if ($label)
                  <h4 class="bg-[#EEEFEF] font-medium text-xl py-2 text-center text-[#303947] shadow-lg">{{ $label }}</h4>
                @endif
                <div class="p-2">
                  <div class="embed embed-16by9">
                    <iframe 
                    class="object-cover-absolute" 
                    src="{{ $iframe_url }}" 
                    loading="lazy" 
                    width="100%" 
                    height="100%" 
                    seamless="seamless" 
                    scrolling="no" 
                    frameBorder="0" 
                    allowFullScreen allow="autoplay"
                    ></iframe>
                  </div>
                </div>
                
              </div>
            </div>
          @endwhile
        @endif
      </div>
    </div>
  </div>
</section>
@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
@endphp

<section class=" {!! $custom_class ? ' ' . $custom_class : 'py-8' !!} ">

    <div class="!px-0 text-center text-primary">
      <div class="container mx-auto flex justify-center lg:w-[80%] lg:px-0 px-2 w-full mb-12">
        {!! $title ? '<h2 class="text-[#39383A] capitalize font-bold text-center tracking-wide text-3xl lg:text-4xl mr-8 ">' . $title . '</h2>' : null !!}
        <div class="flex items-center justify-center">
          <button class="w-12 page-link-arrow-p flex items-center justify-center h-12 ">
              <i class="fa fa-arrow-left bg-neutral-50 hover:bg-primary text-neutral-500 hover:text-white border border-neutral-200 hover:border-white text-sm p-3"></i>
          </button>
          <button class="w-12  page-link-arrow-n flex items-center justify-center h-12 ">
              <i class="fa fa-arrow-right bg-neutral-50 hover:bg-primary text-neutral-500 hover:text-white border border-neutral-200 hover:border-white text-sm p-3"></i>
          </button>
        </div>
      </div>
        @if (have_rows('pages'))
            <div class="flex-wrap slick-mainpage-link flex lg:justify-center snap-x overflow-x-scroll lg:overflow-hidden px-2">
                @while (have_rows('pages'))
                    @php
                        the_row();
                        $page = get_sub_field('page');
                        $custom_title = get_sub_field('custom_title');
                        $custom_paragraph = get_sub_field('custom_paragraph');
                    @endphp
                    @if ($page)
                        <div class="w-full md:w-1/2 lg:w-1/5 px-2 product-link" style="flex: 0 0 auto;">
                            <a href="{{ get_the_permalink($page->ID) }}" class="embed-1by1 w-full relative rounded-sm overflow-hidden mb-6 lg:mb-0">
                                <img data-src="{{ get_the_post_thumbnail_url($page->ID , $post_thumbnail_id, $size) }}" src="{{ get_the_post_thumbnail_url($page->ID, 'lozad') }}" alt="{!! $custom_title ? $custom_title : $page->title !!}" class="lozad object-fit-cover" />
                                  <div class="w-full  product-bottom-bg bottom-0 left-0 p-4">
                                    <h4 class="text-xl lg:text-lg text-white font-bold flex self-center relative z-10  mb-0 tracking-widest">{!! $custom_title ? $custom_title : get_the_title() !!}</h4>
                                    <div class="product-bottom-content sm:hidden mt-2" >
                                      {!! $custom_paragraph ? '<div class="mb-6 text-sm child-p:text-white child-p:tracking-wide text-left relative z-10">' . $custom_paragraph . '</div>' : null !!}
                                        @if( have_rows('buttons') )
                                          <div class="block sm:flex sm:flex-wrap relative text-left z-10">
                                            @php $i = 0; @endphp
                                            @while( have_rows('buttons') )
                                              @php
                                              the_row();
                                              $i++;
                                              $link = get_sub_field('link');
                                              $label = get_sub_field('label');
                                              @endphp
                                              <button class="text-white border-b-2 border-white block md:inline-block text-center  mb-4 md:mr-4 md:mb-0">{!! $label !!}</button>
                                            @endwhile
                                          </div>
                                        @endif
                                    </div>
                                    
                                  </div>
                            </a>
                        </div>
                    @endif
                @endwhile
            </div>
        @endif
    </div>

</section>

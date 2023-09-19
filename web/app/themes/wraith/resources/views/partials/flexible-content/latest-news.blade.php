@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
@endphp

@query([
  'post_type'      => 'post',
  'posts_per_page' => '3'
])
<div class="{!! $custom_class ? ' ' . $custom_class : ' pb-12' !!}">
  <div class="container mx-auto">
    <h2 class="text-[#39383A] capitalize font-bold text-center tracking-wide text-3xl lg:text-4xl mb-12 ">{!! $title !!}</h2>
    @hasposts($query)
      <div class="flex flex-wrap mb-4">
        @posts($query)
        <article class="w-full lg:w-1/3 p-4 flex flex-col">
          <a href="@permalink" class="hover:border-none mb-0">
            <div class="w-full md:mr-4 relative overflow-hidden" style="min-height: 251px;">
              
              <img data-src="@thumbnail('4by3-md', false)" src="@thumbnail('lozad', false)" width="100%" height="auto" alt="@title" class="lozad object-cover inset-0 w-full h-full absolute">
            </div>
          </a>
            <div class=" bg-white shadow-lg grow">
              <div class="w-full h-full items-start justify-between flex-col flex">
                <div class="relative">
                  <a href="@permalink">
                    <h2 class="entry-title bg-[#BDDCEA] px-6 py-2 font-medium  text-[#242424] text-lg mb-4">@title</h2>
                  </a>
                  <div class="px-6">
                    <div class="text-[#39383A] text-sm font-normal tracking-wide	mb-4"> {!! get_the_date() !!}</div>
                    <div class="child-p:text-sm child-p:font-normal child-p:max-w-[26rem] child-p:tracking-wide child-p:text-[#39383A] post-copy">{!! the_excerpt() !!}</div>
                  </div>
                </div>
                {{-- <a href="@permalink" class=" text-primary font-normal tracking-wide border-b-2 border-primary inline-block max-w-full md:w-auto sec-inverted">READ POST</a> --}}
              </div>
              
            </div>
          </article>
        @endposts
      </div>
    @endhasposts
    @noposts
      <p>
        Sorry, no posts could be found
      </p>
    @endnoposts
  </div>
</div>

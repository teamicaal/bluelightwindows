<div class="container mx-auto">

  <article @php post_class() @endphp>
      <header class="flex flex-col lg:flex-row justify-center mb-12 shadow-none">
          <div class="w-full lg:w-2/5 lg:my-auto mb-2">
              <h1 class="text-3xl md:text-4xl text-[#39383A] font-semibold mb-8">{!! get_the_title() !!}</h1>
              <div class="flex flex-wrap">
                  <a class="btn block md:inline-block bg-primary text-white hover:bg-[#E89604] rounded-full hover:border-none mb-4 md:mr-4 md:mb-0"
                      href="#article">Learn More</a>
                  <a class="btn block md:inline-block bg-transparent border rounded-full border-[#39383A] text-[#39383A] hover:bg-[#39383A] hover:text-white hover:border-[#39383A]"
                      href="/contact-us/">Contact Us</a>
              </div>
          </div>
          <div class="w-full lg:w-3/5">
              <img src="{!! get_the_post_thumbnail_url() !!}" alt="{!! the_title(); !!}"
                  class="object-cover">
          </div>
      </header> <!-- end of top section -->
      <div id="article" class=" article w-full md:w-4/5 lg:w-1/2 mx-auto text-center order-1 lg:order-2">
        <h2 class="lg:text-4xl text-3xl text-[#39383A] font-semibold py-6">{!! get_the_title() !!}</h2>
        @php the_content() @endphp
      </div>
      <footer>
          {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
              <p>' . __('Pages:', 'sage'), 'after' => '</p>
          </nav>']) !!}
      </footer>
      @php comments_template('/partials/comments.blade.php') @endphp
  </article>

</div> <!-- end of displayed article -->

<div class="related-articles">
  @php
  $args = array(
  'category__in' => wp_get_post_categories($post->ID),
  'posts_per_page' => 2,
  'post__not_in' => array($post->ID)
  );
  $query = new WP_Query($args);
  @endphp
  @if( $query->have_posts() )

  <section class="lg:my-20 my-12">
    <div class="md:w-4/5 w-full lg:px-0 px-4 mx-auto">
      <h2 class="lg:text-4xl text-3xl text-[#39383A] font-semibold text-center mb-6">Related Articles</h2>
      <div class="flex flex-wrap justify-center">
        @while( $query->have_posts() )
        @php
        $i = 0;
        $query->the_post();
        @endphp
        @php
        $i++;
        @endphp
        <a href="@permalink">
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
        </a>
        @endwhile
      </div>
    </div>
  </section>
  @php
  endif;
  wp_reset_query();
  @endphp
</div>
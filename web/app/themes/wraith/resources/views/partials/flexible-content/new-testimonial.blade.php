@php
$title = get_sub_field('title');
$custom_class = get_sub_field('custom_class');
@endphp
<section class="{{ $custom_class }} lg:py-16 py-8 bg-[#EFEFEF]">
  <div class=" w-full px-8">
    <h2 class="text-[#39383A] capitalize font-bold text-center tracking-wide text-3xl lg:text-4xl mb-12 ">{!! $title !!}</h2>
    <div class="relative flex flex-wrap justify-between">
      @if( have_rows('testimonial_repeater' , 'option') )
          @php 
            $i = 0; 
          @endphp
          @while( have_rows('testimonial_repeater' , 'option') )
            @php
              the_row();
              $i++;
              $testimonial_platform = get_sub_field('testimonial_platform');
              $testimonial_rating = get_sub_field('testimonial_rating');
            @endphp
            <div class="lg:w-[24%] md:w-[48%] w-full bg-[#f9fafb] shadow-lg rounded-md lg:mb-0 mb-8">
              <div class="py-8 px-8">
                <span class="max-w-[40px] flex items-center 
                  <?php if($testimonial_platform == 'facebook'): ?> facebook"> <img class="w-full mr-2" src="/app/uploads/2023/09/faebook-icon.png" alt="">Facebook
                  <?php elseif($testimonial_platform == 'google'): ?> google "> <img class="w-full mr-2" src="/app/uploads/2023/09/google-review-icon.png" alt="">Google
                  <?php else: ?>  <i class="fa fa-quote-right"></i>  <?php endif; ?> 
                </span>
                <h4 class="text-[#242424] font-medium mt-4"><?php the_sub_field('testimonial_name') ?></h4>
                
                <p class="text-[#717171] text-sm mt-4 tracking-wide"><?php the_sub_field('testimonial_content') ?></p>

                <div class="flex flex-wrap justify-between mt-4">
                  <div class="testimonial-star-rating">
                    <?php if ($testimonial_rating == 'one'): ?>
  
                      <i class="fa fa-star text-[#0284c7]"></i>
  
                    <?php elseif($testimonial_rating == 'two'): ?>
  
                      <i class="fa fa-star text-[#0284c7]"></i>
                      <i class="fa fa-star text-[#0284c7]"></i>
  
                    <?php elseif($testimonial_rating == 'three'): ?>
  
                      <i class="fa fa-star text-[#0284c7]"></i>
                      <i class="fa fa-star text-[#0284c7]"></i>
                      <i class="fa fa-star text-[#0284c7]"></i>
  
                    <?php elseif($testimonial_rating == 'four'): ?>
  
                      <i class="fa fa-star text-[#0284c7]"></i>
                      <i class="fa fa-star text-[#0284c7]"></i>
                      <i class="fa fa-star text-[#0284c7]"></i>
                      <i class="fa fa-star text-[#0284c7]"></i>
  
                    <?php elseif($testimonial_rating == 'five'): ?>
  
                      <i class="fa fa-star text-[#0284c7]"></i>
                      <i class="fa fa-star text-[#0284c7]"></i>
                      <i class="fa fa-star text-[#0284c7]"></i>
                      <i class="fa fa-star text-[#0284c7]"></i>
                      <i class="fa fa-star text-[#0284c7]"></i>
  
                    <?php else: ?>
  
                      <i class="fa fa-star text-[#0284c7]"></i>
                      <i class="fa fa-star text-[#0284c7]"></i>
                      <i class="fa fa-star text-[#0284c7]"></i>
                      <i class="fa fa-star text-[#0284c7]"></i>
                      <i class="fa fa-star text-[#0284c7]"></i>
  
                    <?php endif; ?>
                  </div>
                  <h4 class="text-blue-dark font-medium"><?php the_sub_field('testimonial_date') ?></h4>
                </div>
              </div>
            </div>
          @endwhile
      @endif
    </div>
  </div>
</section>

<script type="text/javascript">
  (function($) {
      $(window).scroll(function() {
          if ($(document).scrollTop() > 100) {
              $('header').addClass('is-scrolled');
          } else {
              $('header').removeClass('is-scrolled');
          }
      });
  })(jQuery);
  </script>
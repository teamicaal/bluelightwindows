@php
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
$image = get_sub_field('image');
$button_label = get_sub_field('button_label');
$button_link = get_sub_field('button_link');
$custom_class = get_sub_field('custom_class');
@endphp


<section id="global-one-cta" class="section_more-information ">
  <div class="flex-row justify-end items-center">
    <div class="relative  mx-auto py-20">
      <div class="bg-[#198cc399] mix-blend-multiply absolute  object-cover w-full h-full inset-0 z-10"></div>
      @if($image)
      <img data-src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" width="100%" height="auto" class="lozad absolute object-cover w-full h-full inset-0 z-0">
      @endif
      <div class="absolute  object-cover w-full h-full inset-0 z-10 opacity-0">
      </div>          
      <div class="container mx-auto">
      <div class="mx-auto lg:p-12 w-11/12 p-6 xl:w-1/3  md:w-2/3 bg-white relative z-10 text-center rounded-lg">
        <h2 class="lg:text-3xl font-bold text-2xl mb-6 text-[#3392BF] tracking-wide"> {!! $title !!} </h2>
        {!! $paragraph ? '<div class="child-p:mb-10 child-p:text-[#39383A] child-p:tracking-wide">' . $paragraph . '</div>' : null !!}
        <a href="{{ $button_link }}" class="btn bg-[#E89604] text-white hover:bg-[#3392BF] rounded-full hover:border-none block md:inline-block text-center  mb-4 md:mr-4 md:mb-0">{!! $button_label !!}</a>
      </div>
      </div>
     
    </div>
  </div>
    

</section>

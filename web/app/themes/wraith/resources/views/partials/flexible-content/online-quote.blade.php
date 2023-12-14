@php
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
$path = get_sub_field('path');
@endphp


<section id="online-quote" class="section_quoting-engine flex-row justify-end items-center py-16">
  <div class="mx-auto p-3 lg:w-1/2 ">
    <div class="mx-auto lg:w-8/12 relative text-center">
      <h2 class="lg:text-3xl text-2xl text-tertiary font-serif">
      {!! $title !!}
      </h2>
    {!! $paragraph ? '<div class="child-p:text-tertiary child-p:font-normal my-6">' . $paragraph . '</div>' : null !!}
    </div>
    <div id="engine-container">

    </div>
  </div>
</section>



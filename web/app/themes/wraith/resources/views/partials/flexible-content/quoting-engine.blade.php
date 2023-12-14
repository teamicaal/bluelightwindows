@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$content = get_sub_field('content');

$qe_key = get_sub_field('quoting_engine_key', 'option');
@endphp

<section class="section_quoting-engine{!! $custom_class ? ' ' . $custom_class : ' md:py-24 py-20' !!}">
  <div class="container mx-auto">
    <div class="lg:w-3/5 w-full mx-auto text-center flex flex-col items-center">
      {!! $title ? '<h2 class="text-4xl mb-6">' . $title . '</h2>' : null !!}
      {!! $content ? $content : null !!}
    </div>
    <div class="w-full mx-auto lg:max-w-5xl mt-14">
      <div class="engine-wrap">
        <div id="engine-container" class="lg:max-w-4xl w-full lg:px-4 px-0 mx-auto bg-white" ></div>
      </div>
    </div>
  </div>
</section>


@php
$custom_class = get_sub_field('custom_class');
    $title = get_sub_field('title');
    $cgi_iframe = get_sub_field('cgi_iframe');
@endphp

<section class="container mx-auto {!! $custom_class ? $custom_class : ' lg:py-20 py-12'; !!}">
    <div>
        <h2 class="text-[#39383A] capitalize font-bold text-center tracking-wide text-3xl lg:text-4xl mb-12 ">{{ $title }}</h2>
        <div>{!! $cgi_iframe !!}</div>
    </div>
    
</section>

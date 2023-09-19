@php
$custom_class = get_sub_field('custom_class');
$title = get_sub_field('title');
$paragraph = get_sub_field('paragraph');
@endphp

<section id="more-information" class="{!! $custom_class ? $custom_class : ' md:py-20 py-12'; !!} ">
    <div class="more-information">
        <div class="container mx-auto px-0 lg:px-1 relative ">
            
            <div class="text-center lg:w-2/3 w-full mx-auto">
                <h2 class="lg:text-4xl text-2xl text-[#39383A] font-semibold mb-4">{{ $title ? $title : ' ' }} </h2>
                {!! $paragraph ? '<div class="child-p:text-[#5D5D5D] child-p:tracking-wide child-p:mx-auto">' . $paragraph . '</div>' : null !!}
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
                            class="btn block md:inline-block {{ $i == 1 ? 'bg-[#E89604] rounded-full text-white hover:bg-primary hover:border-none mb-4 md:mr-4 md:mb-0' : 'bg-white text-[#242424] rounded-full mb-4 md:mb-0' }}{{ $anchor ? ' btn-scroll' : null }}">{!! $label !!}</a>
                    @endwhile
                @endif
            </div>
        </div>
    </div>
</section>

@php
$custom_class = get_sub_field('custom_class');
$colour_options = get_field('colour_options', 'option');
$colour_options_arr = [];
$product = get_sub_field('select_product');
$colour = get_sub_field('colour_options');
$title = get_sub_field('title');
$body = get_sub_field('body');
@endphp

{{-- sort in to filterable array --}}
@if ($colour_options)
    @foreach ($colour_options as $option)
        @php $colour_options_arr[strtolower( $option['manufacture'])] = $option['colour_range'] @endphp
    @endforeach
@endif
<section id="colour_picker" class="{!! $custom_class ? $custom_class : ' lg:py-20 py-12'; !!}">
    {{-- {{ $profile === 'residence' ? 'bg-grayDarkest' : null }} --}}

    <div class="container mx-auto flex flex-wrap justify-center items-center gap-8  h-full relative">

        @if (array_key_exists($colour, $colour_options_arr))
            <div class="w-full {{ $product ? 'lg:w-2/5' : 'container' }} flex flex-wrap justify-center gap-4 overflow-x-auto order-2 lg:order-1 mb-4 pb-4 h-full">
                <div class="{{ $product ? 'hidden lg:flex lg:flex-col w-full mx-auto' : 'w-full text-center' }} ">
                    <h2 class="w-full text-center lg:text-3xl text-2xl text-[#39383A] font-bold mb-8">{{ $title ?: 'Frame Colours' }}</h2>
                    {!! $body 
                        ? '<div class="text-center child-p:mx-auto">'.
                            $body
                        .'</div>'
                        : null
                    !!}
                </div>
                @foreach ($colour_options_arr[$colour] as $clr_option)
                    <div class="scroll-fade-in isolate {{ $product ? 'colourSwtachitem' : null }} w-1/3 {{ $product ? 'md:w-1/4' : 'lg:w-1/6'}} embed-4by3 rounded-xl cursor-pointer">
                        <img data-src="{{ $clr_option['sizes']['large'] }}" src="{{ $clr_option['sizes']['4by3-sm'] }}"
                            alt="{{ $clr_option['title'] }}" width="100%" height="100%" class="lozad object-fit-cover"
                            data-colour="{{ strtolower($clr_option['title']) }}"
                            data-product="{{ strtolower($product) }}">
                        <div
                            class="absolute inset-0 mr-auto mt-auto mb-2 ml-2 h-fit w-fit p-2 bg-white rounded-full z-10">
                            <p class="capitalize m-0 p-0 text-xs">{{ $clr_option['title'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        @if ( $product )
            <div class="lg:hidden flex-col w-fit mx-auto">
                <h2 class="w-full text-center">{{ $title ?: 'Frame Colours' }}</h2>
                {!! $body 
                    ? '<div class="text-center">'.
                        $body
                    .'</div>'
                    : null
                !!}
            </div>
            <div class="w-full lg:w-1/2 max-w-4xl rounded-xl bg-[#EFEFEF] p-8 lg:p-12 order-1 lg:order-2">
                <div class="w-full embed-4by3 overflow-hidden">
                    <img src="/app/uploads/renders/{{ $product }}-white.webp"
                        alt="{{ $product }}-{{ strtolower($clr_option['title']) }}"
                        class="absolute inset-0 w-auto h-full mx-auto colourFrame">
                </div>
            </div>
        @endif
    </div>
</section>
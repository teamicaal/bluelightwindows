@php
$title = get_sub_field('title');
$faq_schema = get_sub_field('faq_schema');
$image_1 = get_sub_field('image_1');
$image_2 = get_sub_field('image_2');
@endphp

<section id="accordion" class="bg-[#3392BF]">
    <div class="relative mx-auto flex lg:py-16 py-8 flex-wrap justify-around {{ $faq_schema ? 'block' : null }}">
        <div class="lg:w-3/4 w-full lg:mx-0 mx-4 flex flex-col-reverse lg:flex-row gap-6 justify-around items-center relative z-10">
            <div class="w-full relative mb-4 md:mb-0 md:pr-8 pr-0 md:w-2/5 z-20 flex flex-col">
                <div class="flex items-center gap-4">
                    <img class="h-36 w-36 rounded-full object-cover" src="{{ $image_1['url'] }}" alt="{{ $image_1['alt'] }}">
                    <div class="arrow  items-end arrow--1">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="arrow  items-end arrow--2">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <img class="h-52 w-52  rounded-full object-cover" src="{{ $image_2['url'] }}" alt="{{ $image_2['alt'] }}">
                </div>
            </div>
           <div>
            <h2 class="mb-8 text-white lg:text-4xl text-3xl font-bold">@sub('title')</h2>
            @if ( have_rows( 'accordion_items' ) )
            @php
            $i = 0 ;
            @endphp
            <div class="w-full  z-20">
                @while ( have_rows( 'accordion_items' ) )
                @php
                the_row();
                $i++;
                $title = get_sub_field('accordion_title');
                $accordion_paragraph = get_sub_field('accordion_paragraph');
                @endphp

                @if($faq_schema)
                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="accordion {{ $i == 1 ? 'active' : null }}">
                    <h4 itemprop="name" class="accordionTitle p-4 bg-neutral-200 text-tertiary mb-0 z-10  cursor-pointer hover:drop-shadow-lg">{{ $title }}</h4>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="accordionBody p-4 -mt-2 pt-6 mb-3 z-0 border border-gray-200 rounded text-sm bg-white">
                        <div itemprop="text">{!! $accordion_paragraph !!}</div>
                    </div>
                </div>
                @else
                <div class="accordion {{ $i == 1 ? 'active' : null }}">
                    <h4 class="accordionTitle p-4 border-b border-white text-white mb-0 z-10 tracking-wide cursor-pointer hover:drop-shadow-lg">{{ $title }}</h4>
                    <div class="accordionBody p-4 -mt-2 pt-6 mb-3 z-0 text-sm child-p:text-white child-p:tracking-wide">{!! $accordion_paragraph !!}</div>
                </div>
                @endif
                @endwhile
            </div>
            @endif
         </div> 
        </div>
    </div>

</section>
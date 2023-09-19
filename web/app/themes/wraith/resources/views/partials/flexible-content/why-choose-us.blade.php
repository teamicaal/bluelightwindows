@php
    $title = get_sub_field('title');
    $count = 0;
    $i = 0;
@endphp

<section id="why-choose-us" class="pb-12">
    <div class="container mx-auto">
        <h2 class="lg:text-4xl text-3xl font-bold text-center text-[#39383A] tracking-wide capitalize"> {{ $title }}</h2>
        <div class="flex flex-wrap justify-center md:pt-8 pt-4">
            @if (get_sub_field('usp'))
                @php $count = count(get_sub_field('usp')); @endphp
            @endif
            @if (have_rows('usp'))
                @while (have_rows('usp'))
                    @php
                        the_row();
                        $i++;
                        $title = get_sub_field('title');
                        $paragraph = get_sub_field('paragraph');
                    @endphp
                    <div class="w-full md:w-1/2 xl:w-1/3 flex">
                        <div class="{{ $i % 2 == 0 ? 'bg-[#F2BB58]' : 'bg-[#80BDD9]' }} rounded-md text-center p-4 lg:p-8 mx-4 mb-8">
                            {!! $title ? '<h3 class="text-white text-center font-semibold text-xl mt-4 mb-4">' . $title . '</h3>' : null !!}
                            <div  class=" child-p:leading-relaxed child-p:text-[0.9rem] child-p:font-normal child-p:text-white child-p:tracking-wide">
                                @if ($paragraph)
                                    {!! $paragraph !!}
                                @endif
                            </div>
                        </div>
                    </div>
                @endwhile
            @endif
        </div>
    </div>
</section>

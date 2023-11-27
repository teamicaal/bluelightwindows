<section class="w-full relative overflow-hidden">
    <img src="{{ get_sub_field('banner_background')['url'] }}" alt="" class="w-full h-full absolute object-cover">
    <div class="tint absolute w-full h-full product-overlay" style="background-color:black"></div>
    <div class="container mx-auto flex flex-wrap lg:flex-row-reverse" style="margin:200px auto 2rem; padding:1rem 0;">
        <div class="w-full lg:w-1/2 p-1">
            @if(have_rows('ppc_panes'))
                @php $ppcCount = 0; @endphp
                @while(have_rows('ppc_panes'))
                    @php $ppcCount++; the_row(); @endphp
                    <div class="w-full h-full flex flex-wrap {{ $ppcCount < 2 ? '' : 'hidden' }}" data-pane="{{ $ppcCount }}">
                        <div class="progress">
                            <div class="progressBar">
                                <div class="progressCompletion"></div>
                            </div>
                            <div>STEP {{ $ppcCount }}</div>
                        </div>
                        <h5 class="w-full text-center">{{ get_sub_field('pane_question') }}</h5>
                        @if(have_rows('ppc_questions'))
                            @while(have_rows('ppc_questions'))
                                @php the_row(); @endphp
                                <div class="w-full lg:w-1/2 p-1">
                                    <div class="relative overflow-hidden hoveror fast cursor-pointer w-full rounded-sm flex align-center justify-center" style="height:100px;">
                                        <img src="{{ get_sub_field('ppc_question_img')['url'] }}" 
                                            alt="{{ get_sub_field('ppc_question_img')['alt'] }}" 
                                            class="w-full h-full absolute object-cover top-o left-0">
                                        <span class="text-white uppercase">{{ get_sub_field('ppc_answer') }}</span>
                                    </div>
                                </div>
                            @endwhile
                        @endif
                    </div>
                @endwhile
            @endif
        </div>
        <div class="w-full lg:w-1/2 p-1 flex flex-col items-center justify-end">
            <h1 class="w-full text-center">{{ get_sub_field('title') }}</h1>
            <div class="content w-full text-center">{!! get_sub_field('content') !!}</div>
        </div>
    </div>
</section>
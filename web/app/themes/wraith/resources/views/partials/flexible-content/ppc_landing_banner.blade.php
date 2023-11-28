<section class="w-full relative overflow-hidden">
    <img src="{{ get_sub_field('banner_background')['url'] }}" alt="" class="w-full h-full absolute object-cover">
    <div class="tint absolute w-full h-full product-overlay"></div>
    <div class="relative container mx-auto flex flex-wrap lg:flex-row-reverse" style="margin:200px auto 2rem; padding:1rem 0;">
        <div class="w-full lg:w-1/2 p-3">
            @if(have_rows('ppc_panes'))
                @php $ppcCount = 0; @endphp
                @while(have_rows('ppc_panes'))
                    @php $ppcCount++; the_row(); @endphp
                    <div class="w-full h-full flex flex-wrap bg-white ppc_pane {{ $ppcCount < 2 ? '' : 'hidden' }} p-3" data-pane="{{ $ppcCount }}">
                        <div class="progress flex w-full">
                            <div class="progressBar flex-grow px-2">
                                <div class="progressCompletion" style=""></div>
                            </div>
                            <div style="padding:0 1.5rem 0 .5rem;">STEP {{ $ppcCount }}</div>
                        </div>
                        <h5 class="w-full text-center uppercase text-2xl font-medium" style="letter-spacing:.25ch;">{{ get_sub_field('pane_question') }}</h5>
                        @if(have_rows('ppc_questions'))
                            @while(have_rows('ppc_questions'))
                                @php the_row(); @endphp
                                <div class="w-full lg:w-1/2 p-1 ppcSingleChoice" data-value="{{ get_sub_field('ppc_answer') }}" style="margin:0;">
                                    <div class="relative overflow-hidden hoveroar fast cursor-pointer w-full rounded-sm flex items-center justify-center" style="height:100px; ">
                                        <img src="{{ get_sub_field('ppc_question_img')['url'] }}" 
                                            alt="{{ get_sub_field('ppc_question_img')['alt'] }}" 
                                            class="w-full h-full absolute object-cover top-o left-0">
                                        <div class="product-overlay top-0 left-0 w-full h-full absolute"></div>
                                        <span class="relative inline-block text-white uppercase"
                                              style="height:fit-content;">{{ get_sub_field('ppc_answer') }}</span>
                                    </div>
                                </div>
                            @endwhile
                        @endif
                    </div>
                @endwhile
                <div class="postcodeCheck w-full h-full flex flex-wrap justify-center items-center bg-white hidden ppc_pane" data-pane="{{ $ppcCount+1 }}">
                    <div class="progress flex w-full">
                        <div class="progressBar flex-grow px-2">
                            <div class="progressCompletion" style=""></div>
                        </div>
                        <div style="padding:0 1.5rem 0 .5rem;">STEP {{ $ppcCount }}</div>
                    </div>
                    <span class="w-full block text-center">Enter your postcode below so we can check that we cover your area.</span>
                    <div class="w-full flex justify-center">
                        <input id="postcode" type="text" class="form-control p-2" name="postcode" placeholder="Postcode" style="border-bottom:2px solid #e89604">
                    </div>
                    <div class="hidden customFormResponse"></div>
                    <button id="validate-postcode" type="button" class="btn btn-primary hoveroar text-white" style="background:#e89604;">Check Postcode</button>
                </div>
                <div class="formProper w-full h-full flex justify-center items-center bg-white hidden ppc_pane pb-2" data-pane="{{ $ppcCount+2 }}" data-lastpane="{{ $ppcCount+2 }}">
                    <form class="icaal-contact-form w-full h-full flex flex-wrap" data-form="ppc_landing_form">
                        <div class="progress flex w-full">
                            <div class="progressBar flex-grow p-2">
                                <div class="progressCompletion" style=""></div>
                            </div>
                            <div style="padding:0 1.5rem 0 .5rem;">STEP {{ $ppcCount+2 }}</div>
                        </div>
                        <input type="text" class="ppc-form-input w-full w-full lg:w-1/2" name="first_name" placeholder="Name">
                        <input type="text" class="ppc-form-input w-full w-full lg:w-1/2" name="last_name" placeholder="Surname">
                        <input type="text" class="ppc-form-input w-full w-full lg:w-1/2" name="email" placeholder="Email">
                        <input type="text" class="ppc-form-input w-full w-full lg:w-1/2" name="phone" placeholder="Phone">
                        <input type="text" class="ppc-form-input hidden postcodeInForm" name="postcode" >
                        <input type="text" class="ppc-form-input hidden chosenValues" name="choices">
                        <div class="w-full flex justify-center">
                            <div class="hidden customFormResponse response"></div>
                            <button id="submit" type="submit" class="btn btn-primary hoveroar text-white" style="background:#e89604; max-height:3rem; margin:1rem;">SUBMIT</button>
                        </div>
                    </form>
                </div>
            @endif
        </div>
        <div class="w-full lg:w-1/2 p-1 flex flex-col items-center justify-end">
            <h1 class="w-full text-center lg:text-left text-white">{{ get_sub_field('title') }}</h1>
            <div class="content w-full text-center lg:text-left text-white children:text-white">{!! get_sub_field('content') !!}</div>
        </div>
    </div>
</section>
@if(have_rows('info_under_banner'))
    <section>
        <div class="container flex">
            @while(have_rows('info_under_banner'))
                <div class="w-full flex flex-col justify-center items-center">
                    @if( get_sub_field('image'))
                        <img src="{{ get_sub_field('image')['url'] }}" alt="{{ get_sub_field('image')['alt'] }}" class="m-2 object-contain mx-auto" style="max-width:100%;">
                    @elseif( get_sub_field('svg'))
                        <div class="mx-auto m-2" style="max-width:5rem; max-height:5rem;">{{ get_sub_field('svg') }}</div>
                    @endif
                    <h3 class="w-full text-center text-xl font-semibold text-white">{{ get_sub_field('title') }}</h3>    
                    <div class="w-full text-center text-white">{{ get_sub_field('text_block') }}</div>
                </div>    
            @endwhile
        </div>
    </section>
@endif
<style>
    .hoveroar{ transition:transform .2s; }
    .hoveroar:hover{ transform:scale(1.02); }
    .hoveroar:active{ transform:scale(.97); }

    .hoveroar img{ transition:transform .6s; }
    .hoveroar:hover img{ transform:scale(1.05); }
    .hoveroar:active img{ transform:scale(.99); }
    .children\:text-white *{ color:white; }
    .progressCompletion{ background-color:#3ea6ce; border-radius:1rem; height:.75rem; width:10%; transition:all .2s; }
    form.icaal-contact-form input.ppc-form-input{ 
        border:none; 
        border-bottom:2px solid #e89604; 
        padding:.3rem; margin:.25rem auto; 
        max-width:35%; border-radius:0;
        height:fit-content;
    }
    .alert.alert-danger * { color:#ff5400; }
    input.ppc-form-input:focus{ outline:none; }
    .is-invalid{ border-bottom:2px solid #ff5400!important; }
    @media(min-width:1024px){
        .lg\:text-left{ text-align:left; }
    }
</style>
<script>
    let pickedVals = []
    let formData = {}
    let maximumPanes = 0
    let ppcHeight = 0
    jQuery(document).ready(function(){
        const $ = jQuery
        maximumPanes = $('[data-lastpane]').data('lastpane')
        ppcHeight = $('.ppc_pane[data-pane=1]').height()
        $('.postcodeCheck, .formProper').css('height',ppcHeight+'px')
        $('.ppcSingleChoice').on('click',function(){
            const val = $(this).data('value')
            const pane = $(this).closest('.ppc_pane').data('pane')
            pickedVals  = [...pickedVals, val]
            console.table({pickedVals,val,pane})
            $('.progressCompletion').css('width', (pane/maximumPanes*100)+'%' )
            $(`.ppc_pane[data-pane=${pane}]`).fadeOut(function(){
                $(`.ppc_pane[data-pane=${pane+1}]`).fadeIn().css('display','flex')
            })
        })
        $('#validate-postcode').click(function(e) {
            console.log('click')
            e.preventDefault()
            let $this = $(this);
            $response = $('.customFormResponse')
            var postcode = $('#postcode').val();
            $this.prop('disabled', true);
            $response.empty();
            $response.append(`<svg class="waitingIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <defs>
                                <style>
                                    .fa-secondary{opacity:.4}</style>
                                </defs>
                            <path class="fa-primary" d="M304 48C304 74.51 282.5 96 256 96C229.5 96 208 74.51 208 48C208 21.49 229.5 0 256 0C282.5 0 304 21.49 304 48zM96 256C96 282.5 74.51 304 48 304C21.49 304 0 282.5 0 256C0 229.5 21.49 208 48 208C74.51 208 96 229.5 96 256zM74.98 74.98C93.73 56.23 124.1 56.23 142.9 74.98C161.6 93.73 161.6 124.1 142.9 142.9C124.1 161.6 93.73 161.6 74.98 142.9C56.24 124.1 56.24 93.73 74.98 74.98V74.98z"/><path class="fa-secondary" d="M437 142.9C418.3 161.6 387.9 161.6 369.1 142.9C350.4 124.1 350.4 93.73 369.1 74.98C387.9 56.24 418.3 56.24 437 74.98C455.8 93.73 455.8 124.1 437 142.9V142.9zM512 256C512 282.5 490.5 304 464 304C437.5 304 416 282.5 416 256C416 229.5 437.5 208 464 208C490.5 208 512 229.5 512 256zM304 464C304 490.5 282.5 512 256 512C229.5 512 208 490.5 208 464C208 437.5 229.5 416 256 416C282.5 416 304 437.5 304 464zM74.98 437C56.24 418.3 56.24 387.9 74.98 369.1C93.73 350.4 124.1 350.4 142.9 369.1C161.6 387.9 161.6 418.3 142.9 437C124.1 455.8 93.73 455.8 74.98 437V437zM437 437C418.3 455.8 387.9 455.8 369.1 437C350.4 418.3 350.4 387.9 369.1 369.1C387.9 350.4 418.3 350.4 437 369.1C455.8 387.9 455.8 418.3 437 437V437z"/></svg>
                            <p class="waitingInfo" >Please do not close or refresh the page</p>
                        `)
            $.ajax({
                url: 'https://api.postcodes.io/postcodes/' + postcode,
                method: 'get'
            }).done(function(response) {
                const postcodePane = $('.postcodeCheck').data('pane')
                $('.progressCompletion').css('width', (postcodePane/maximumPanes*100)+'%' )
				gtag('event', 'ppc_postcode_submit', {
				    'event_category': 'ppc_postcode_submit_event'
				})
                formData.postcode = response.result.postcode
                $response.empty();
                console.log('postcode pane: ',postcodePane)
                $(`[data-pane=${ postcodePane }]`).fadeOut(function(){
                    $(`[data-pane=${ postcodePane + 1 }]`).fadeIn()
                })
                $('.postcodeInForm').val(postcode)
                $('.chosenValues').val( pickedVals.join(', ') )
            }).fail(function(response) {
                $response.empty();
                $response.addAlert('danger', 'Please enter a valid UK postcode.');
                $this.prop('disabled', false);
            });
        });
    })
</script>
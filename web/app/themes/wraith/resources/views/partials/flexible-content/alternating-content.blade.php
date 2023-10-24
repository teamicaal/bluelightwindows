<section class="py-8 lg:py-12 bg-[#EFEFEF]">
	<div class="">
		@php $i = 0; @endphp
		@while(have_rows('rows'))
		@php
			the_row();
			$i++;
			$title = get_sub_field('title');
			$image = get_sub_field('image');
			$video_iframe_url = get_sub_field('video_iframe_url');
			$image_alt = get_sub_field('image_alt');
			$paragraph = get_sub_field('paragraph');
			$label = get_sub_field('label');
			$link = get_sub_field('link');
		@endphp
			<div class="flex flex-col {{ $i % 2 == 0 ? 'lg:flex-row-reverse flex-col' : 'lg:flex-row flex-col' }}">
				@if( $image )
					<div class="w-full lg:w-3/5">
						<div class="embed embed-16by9 ">
							<iframe src="{!! $video_iframe_url !!}" class="object-cover-absolute w-full h-full"></iframe>
						</div>
					</div>
				@else
					<div class="w-full lg:w-1/2">
						<div class="embed-16by9 overflow-hidden">
							<img data-src="{{ $image['url'] }}" alt="{{ $image_alt ? $image_alt : $image['alt'] }}" class="lozad object-fit-cover w-full h-full inset-0">
						</div>
					</div>
				@endif
				<div class="w-full lg:w-1/2 px-4 lg:px-16 py-4 lg:py-0">
					<div class="flex flex-col items-start justify-center h-full lg:max-w-[70%] w-full mx-auto">
						{!! $title ? '<h2 class="lg:text-3xl text-2xl text-[#39383A] font-bold mb-8">' . $title . '</h2>' : null !!}
						{!! $paragraph ? '<div class="mb-0 child-p:text-base child-p:font-normal child-p:tracking-wide child-p:text-[#5D5D5D]">' . $paragraph . '</div>' : null !!}

						@if ($label)
							<a href="{{ $link }}" class="w-fit border-b-2 border-[#4C4C4C] text-[#4C4C4C] font-bold tracking-wide text-sm uppercase text-center block mt-6">{{ $label }}</a>
						@endif
						@if (have_rows('buttons'))
							@php $i = 0; @endphp
							@while (have_rows('buttons'))
								@php
									the_row();
									$i++;
									$link = get_sub_field('link');
									$label = get_sub_field('label');
								@endphp
								<a href="{{ $link }}"
									class="btn block md:inline-block {{ $i == 1 ? 'bg-[#3392BF] hover:bg-[#E89604] rounded-full text-white hover:border-none mb-4 md:mr-4 md:mb-0' : 'bg-white text-[#242424] rounded-full mb-4 md:mb-0' }}">{!! $label !!}</a>
							@endwhile
                		@endif
					</div>
				</div>
			</div>
		@endwhile
	</div>
</section>
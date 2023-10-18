@if (function_exists('get_field') && have_rows('blocks'))
    @while (have_rows('blocks'))
        @php the_row(); @endphp

        @if (get_row_layout() == 'accreditations_row')
            @include('partials.flexible-content.accreditations-row')
        @endif
        @if (get_row_layout() == 'alternating_content')
            @include('partials.flexible-content.alternating-content')
        @endif
        @if (get_row_layout() == 'accordion')
            @include('partials.flexible-content.accordion')
        @endif
        @if (get_row_layout() == 'anchor')
            @include('partials.flexible-content.anchor')
        @endif
        @if (get_row_layout() == 'banner')
            @include('partials.flexible-content.banner')
        @endif
        @if (get_row_layout() == 'product_banner')
            @include('partials.flexible-content.product-banner')
        @endif
        @if (get_row_layout() == 'more_information')
            @include('partials.flexible-content.more-information')
        @endif
        @if (get_row_layout() == 'why_choose_us')
            @include('partials.flexible-content.why-choose-us')
        @endif
        @if (get_row_layout() == 'global_one_cta')
            @include('partials.flexible-content.global-one-cta')
        @endif
        @if( get_row_layout() == 'new_testimonial' )
            @include('partials.flexible-content.new-testimonial')
        @endif
        @if( get_row_layout() == 'products_page_link' )
            @include('partials.flexible-content.products-page-link')
        @endif
        @if (get_row_layout() == 'colour_picker')
            @include('partials.flexible-content.colour_picker')
        @endif
        @if( get_row_layout() == 'products_cta' )
            @include('partials.flexible-content.product-cta')
        @endif
        @if (get_row_layout() == 'product_brochure')
            @include('partials.flexible-content.product-brochure')
        @endif
        @if (get_row_layout() == 'brochure_page')
            @include('partials.flexible-content.brochure-page')
        @endif
        @if (get_row_layout() == 'video_page')
            @include('partials.flexible-content.video-page')
        @endif
        @if (get_row_layout() == 'cta')
            @include('partials.flexible-content.cta-block')
        @endif
        @if (get_row_layout() == 'form_contact')
            @include('partials.flexible-content.form-contact')
        @endif
        @if (get_row_layout() == 'form_conversion')
            @include('partials.flexible-content.form-conversion')
        @endif
        @if (get_row_layout() == 'key_features')
            @include('partials.flexible-content.key-features')
        @endif
        @if (get_row_layout() == 'gallery')
            @include('partials.flexible-content.gallery')
        @endif
        @if (get_row_layout() == 'gallery_page')
            @include('partials.flexible-content.gallery-page')
        @endif
        @if (get_row_layout() == 'gallery_slider')
            @include('partials.flexible-content.gallery-slider')
        @endif
        @if (get_row_layout() == 'gallery_text')
            @include('partials.flexible-content.gallery-text')
        @endif
        @if (get_row_layout() == 'html')
            {!! get_sub_field('html_content') !!}
        @endif
        @if (get_row_layout() == 'latest_news')
            @include('partials.flexible-content.latest-news')
        @endif
        @if (get_row_layout() == 'latest_products')
            @include('partials.flexible-content.latest-products')
        @endif
        @if (get_row_layout() == 'map')
            @include('partials.flexible-content.map')
        @endif
        @if (get_row_layout() == 'page_links_simple')
            @include('partials.flexible-content.page-links-simple')
        @endif
        @if (get_row_layout() == 'products')
            @include('partials.flexible-content.products')
        @endif
        @if (get_row_layout() == 'product_filter')
            @include('partials.flexible-content.product-filter')
        @endif
        @if (get_row_layout() == 'testimonials')
            @include('partials.flexible-content.testimonials')
        @endif
        @if (get_row_layout() == 'text_block')
            @include('partials.flexible-content.text-block')
        @endif
        @if (get_row_layout() == 'text_cta')
            @include('partials.flexible-content.text-cta')
        @endif
        @if (get_row_layout() == 'quoting_engine')
            @include('partials.flexible-content.quoting-engine')
        @endif
    @endwhile
@endif

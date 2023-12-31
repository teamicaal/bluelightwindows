@php
$brand_phone_link = get_field('brand_phone_link', 'option');
$brand_phone_label = get_field('brand_phone_label', 'option');
$brand_phone_alt = get_field('brand_phone_alt', 'option');
$brand_fax = get_field('brand_fax', 'option');
$brand_email = get_field('brand_email', 'option');
$locations = get_field('locations', 'option');
$social_facebook = get_field('social_facebook', 'option');
$social_twitter = get_field('social_twitter', 'option');
$social_instagram = get_field('social_instagram', 'option');
$social_youtube = get_field('social_youtube', 'option');
$social_linkedin = get_field('social_linkedin', 'option');
$social_pinterest = get_field('social_pinterest', 'option');
@endphp
<div class="{!! $colour == 'dark' ? ' bg-white border border-[#D0D0D0] py-5 px-7' : null !!}">
  <ul class="list-reset">
    @if( $brand_phone_label )
    <li class="mb-4">
      <a href="tel:{{ $brand_phone_link }}" class="{!! $colour == 'light' ? 'text-primary' : 'text-[#242D36]' !!}">
        <i class="fa fa-phone float-left mr-3 {!! $colour == 'white' ? 'text-' . $colour   : 'text-primary' !!}"></i>
        <span class="table-cell font-normal font-body">{{ $brand_phone_label }}</span>
      </a>
    </li>
    @endif
    @if( $brand_email )
    <li class="mb-4">
      <a href="mailto:{{ $brand_email }}" class="{!! $colour == 'light' ? 'text-primary' : 'text-[#242D36]' !!}">
        <i class="fa fa-envelope-open float-left mr-3 {!! $colour == 'white' ? 'text-' . $colour   : 'text-primary' !!}"></i>
        <span class="table-cell font-normal font-body">{{ $brand_email }}</span>
      </a>
    </li>
    @endif
    @if( have_rows('locations', 'option') )
    <div class="flex">
      @while( have_rows('locations', 'option') )
      @php
      the_row();
      $address_name = get_sub_field('address_name');
      $address_line_1 = get_sub_field('address_line_1');
      $address_line_2 = get_sub_field('address_line_2');
      $address_city = get_sub_field('address_city');
      $address_county = get_sub_field('address_county');
      $address_post_code = get_sub_field('address_post_code');
      $address_country = get_sub_field('address_country');
      $address_link = get_sub_field('address_link');
      @endphp
      {!! $address_link ? '<a class="flex" href="' . $address_link . '" target="_blank">' : null !!}
        <i class="fa fa-map-marker-alt mr-3 mt-1 {!! $colour == 'white' ? 'text-' . $colour   : 'text-primary' !!}"></i>
        <ul class="list-reset font-font-normal">
          {!! $address_name ? '<li class="mb-4"><h4 class="text-' . $colour . ' font-display uppercase tracking-widest font-base mb-4">' . $address_name . '</h4></li>' : null !!}
          {!! $address_line_1 ? '<li class="font-normal text-[#242D36]">' . $address_line_1 .  ' </li>' : null !!}
          {!! $address_line_2 ? '<li class="font-normal text-[#242D36]">' . $address_line_2 . '</li>' : null !!}
          {!! $address_county ? '<li class="font-normal text-[#242D36]">' . $address_county . '</li>' : null !!}
          {!! $address_city ? '<li class="font-normal text-[#242D36]">' . $address_city . '</li>' : null !!}
          {!! $address_post_code ? '<li class="font-normal text-[#242D36]">' . $address_post_code . '</li>' : null !!}
          {!! $address_country ? '<li class="font-normal text-[#242D36]">' . $address_country . '</li>' : null !!}
        </ul>
      {!! $address_link ? '</a>' : null !!}
      @endwhile
    </div>
    @endif
    <ul class="list-reset text-sm flex flex-wrap py-8">
      @if ($colour == 'dark')
      @include('partials.components.social_icons' , ['location'=>'form'])
      @else
      @include('partials.components.social_icons' , ['location'=>'footer'])
      @endif
    </ul>
  </ul>
</div>


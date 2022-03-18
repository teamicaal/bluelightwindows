<?php
$brand_phone = get_field('brand_phone', 'option');
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
?>

<ul class="list-reset">
  <?php if( $brand_phone ): ?>
  <li class="text-sm mb-4">
    <a href="tel:<?php echo e($brand_phone); ?>" class="<?php echo $colour == 'light' ? 'text-white' : 'text-primary'; ?>">
      <i class="fa fa-phone float-left mr-3"></i>
      <span class="table-cell font-body"><?php echo e($brand_phone); ?></span>
    </a>
  </li>
  <?php endif; ?>
  <?php if( $brand_phone_alt ): ?>
  <li class="text-sm mb-4">
    <a href="tel:<?php echo e($brand_phone_alt); ?>" class="<?php echo $colour == 'light' ? 'text-white' : 'text-primary'; ?>">
      <i class="fa fa-phone-square float-left mr-3"></i>
      <span class="table-cell font-body"><?php echo e($brand_phone_alt); ?></span>
    </a>
  </li>
  <?php endif; ?>
  <?php if( $brand_fax ): ?>
  <li class="text-sm <?php echo $colour == 'light' ? 'text-white' : 'text-gray-800'; ?> mb-4">
    <i class="fa fa-print float-left mr-3"></i>
    <span class="table-cell font-body"><?php echo e($brand_fax); ?></span>
  </li>
  <?php endif; ?>
  <?php if( $brand_email ): ?>
  <li class="text-sm mb-4">
    <a href="mailto:<?php echo e($brand_email); ?>" class="<?php echo $colour == 'light' ? 'text-white' : 'text-primary'; ?>">
      <i class="fa fa-envelope-open float-left mr-3"></i>
      <span class="table-cell font-body"><?php echo e($brand_email); ?></span>
    </a>
  </li>
  <?php endif; ?>
  <?php if( have_rows('locations', 'option') ): ?>
  <div class="flex justify-between">
    <?php while( have_rows('locations', 'option') ): ?>
    <?php
    the_row();
    $address_name = get_sub_field('address_name');
    $address_line_1 = get_sub_field('address_line_1');
    $address_line_2 = get_sub_field('address_line_2');
    $address_city = get_sub_field('address_city');
    $address_county = get_sub_field('address_county');
    $address_post_code = get_sub_field('address_post_code');
    $address_country = get_sub_field('address_country');
    $address_link = get_sub_field('address_link');
    ?>
    <?php echo $address_link ? '<a href="' . $address_link . '" target="_blank">' : null; ?>

      <ul class="list-reset font-light text-sm mt-4">
        <?php echo $address_name ? '<li class="mb-4"><h4 class="text-sm text-gray-' . $colour . ' font-display uppercase tracking-widest font-base mb-4">' . $address_name . '</h4></li>' : null; ?>

        <?php echo $address_line_1 ? '<li>' . $address_line_1 . '</li>' : null; ?>

        <?php echo $address_line_2 ? '<li>' . $address_line_2 . '</li>' : null; ?>

        <?php echo $address_city ? '<li>' . $address_city . '</li>' : null; ?>

        <?php echo $address_county ? '<li>' . $address_county . '</li>' : null; ?>

        <?php echo $address_post_code ? '<li>' . $address_post_code . '</li>' : null; ?>

        <?php echo $address_country ? '<li>' . $address_country . '</li>' : null; ?>

      </ul>
    <?php echo $address_link ? '</a>' : null; ?>

    <?php endwhile; ?>
  </div>
  <?php endif; ?>
  <ul class="list-reset text-sm flex flex-wrap mt-4">
    <?php if( $social_facebook && get_field('social_facebook_display', 'option') ): ?>
    <li>
      <a href="<?php echo e($social_facebook); ?>" class="text-primary inline-block p-3">
        <i class="fab fa-facebook-f"></i>
      </a>
    </li>
    <?php endif; ?>
    <?php if( $social_twitter && get_field('social_twitter_display', 'option') ): ?>
    <li>
      <a href="<?php echo e($social_twitter); ?>" class="text-primary inline-block p-3">
        <i class="fab fa-twitter"></i>
      </a>
    </li>
    <?php endif; ?>
    <?php if( $social_instagram && get_field('social_instagram_display', 'option') ): ?>
    <li>
      <a href="<?php echo e($social_instagram); ?>" class="text-primary inline-block p-3">
        <i class="fab fa-instagram"></i>
      </a>
    </li>
    <?php endif; ?>
    <?php if( $social_youtube && get_field('social_youtube_display', 'option') ): ?>
    <li>
      <a href="<?php echo e($social_youtube); ?>" class="text-primary inline-block p-3">
        <i class="fab fa-youtube"></i>
      </a>
    </li>
    <?php endif; ?>
    <?php if( $social_pinterest && get_field('social_pinterest_display', 'option') ): ?>
    <li>
      <a href="<?php echo e($social_pinterest); ?>" class="text-primary inline-block p-3">
        <i class="fab fa-pinterest"></i>
      </a>
    </li>
    <?php endif; ?>
    <?php if( $social_linkedin && get_field('social_linkedin_display', 'option') ): ?>
    <li>
      <a href="<?php echo e($social_linkedin); ?>" class="text-primary inline-block p-3">
        <i class="fab fa-linkedin"></i>
      </a>
    </li>
    <?php endif; ?>
  </ul>
</ul>
<?php /**PATH /Users/mattpickles/Local Sites/wraith/web/app/themes/wraith/resources/views/partials/contact-details.blade.php ENDPATH**/ ?>
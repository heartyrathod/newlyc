<?php

/**
 * The header.

 * @package WordPress
 * @subpackage lyc
 * @since lyc 1.0 1.0
 */

get_header();
?>


<main>
  <!-- entry header -->
  <section class="lyc-entry-header pt-xxl-5 pt-xl-4 pt-lg-3 pt-md-3 pt-sm-3 pt-3">
    <div class="container">
      <div class="lyc-entry-header-content d-flex flex-column gap-2 ps-xxl-4 ps-xl-4 ps-lg-4 ps-md-3 ps-sm-3 ps-3">
        <h1><?php echo $post->post_title; ?></h1>
        <ul class="d-flex align-items-center gap-2 pb-3">
          <li>
            <a href="<?php echo site_url('home'); ?>" class="lyc-home">Home</a>
          </li>
          <li>-</li>
          <li>
            <p><?php echo $post->post_title; ?></p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- entry header -->
  <section class="lyc-volunteer-counselling my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
    <?php if( have_rows('volunteers') ): ?>
    <?php while( have_rows('volunteers') ): the_row();
            $volunteer_content = get_sub_field('volunteer_content');
            $volunteer_title = get_sub_field('volunteer_title');
            $volunteer_process_title = get_sub_field('volunteer_process_title');
            $volunteer_process_content = get_sub_field('volunteer_process_content');
            $volunteer_other_content = get_sub_field('volunteer_other_content');
          ?>
    <div class="container">
      <div class="row">
        <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
          <div class="lyc-counselling-left d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-3">
            <?php echo $volunteer_content; ?>
            <div class="lyc-volunteer-counselling-slider">
              <?php if( have_rows('volunteer_slider') ): ?>
              <?php while( have_rows('volunteer_slider') ): the_row(); ?>
              <div class="owl-carousel owl-theme lyc-volunteer-slide">
                <?php if( have_rows('volunteer_image_silder') ): ?>
                <?php while( have_rows('volunteer_image_silder') ): the_row();
                          $image = get_sub_field('image');
                        ?>
                <div class="item">
                  <div class="lyc-paid-slide-img">
                    <?php
                        if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>" width="1209" height="500" class="img-fluid">
                    <?php endif; ?>
                  </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <!-- <div class="item">
                      <div class="lyc-paid-slide-img">
                        <img src="assets/media/counselling/paid.webp" alt="paid counselling" width="1209" height="500" class="img-fluid">
                      </div>
                    </div> -->
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <div class="lyc-counselling-points d-flex flex-column gap-4">
              <h2><?php echo $volunteer_title; ?></h2>
              <ul class="lyc-check-list d-flex flex-column gap-3">
                <?php
                        if (have_rows('volunteer_work')) : ?>
                <?php while (have_rows('volunteer_work')) : the_row();
                            $content = get_sub_field('content');
                    ?>
                <li class="d-flex align-items-start gap-3 w-100">
                  <p><?php echo $content; ?></p>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
                </li>
              </ul>
              <h2><?php echo $volunteer_process_title; ?></h2>
              <h3><?php echo $volunteer_process_content; ?></h3>
              <ul class="lyc-check-list d-flex flex-column gap-3">
                <?php
                        if (have_rows('volunteer_process')) : ?>
                <?php while (have_rows('volunteer_process')) : the_row();
                            $content = get_sub_field('content');
                    ?>
                <li class="d-flex align-items-start gap-3 w-100">
                  <p><?php echo $content; ?></p>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
              </ul>
              <?php echo $volunteer_other_content; ?>
              <?php if( have_rows('volunteer_frequently') ): ?>
              <?php while( have_rows('volunteer_frequently') ): the_row();
                      $volunteer_frequently_title = get_sub_field('volunteer_frequently_title');
                      ?>
              <h2><?php echo $volunteer_frequently_title; ?></h2>
              <div class="lyc-counselling-faq">
                <div class="accordion accordion-flush d-flex flex-column gap-2" id="volunteer-faq-heading">
                  <?php
                        if (have_rows('volunteer_frequently_questions')) : ?>
                  <?php while (have_rows('volunteer_frequently_questions')) : the_row();
                            $questions = get_sub_field('questions');
                            $answer = get_sub_field('answer');
                    ?>
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="flush-heading">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#volunteer-faq<?php echo get_row_index(); ?>" aria-expanded="false" aria-controls="volunteer-faq<?php echo get_row_index(); ?>">
                        <?php echo $questions; ?>
                      </button>
                    </h4>
                    <div id="volunteer-faq<?php echo get_row_index(); ?>" class="accordion-collapse collapse" aria-labelledby="volunteer-faq<?php echo get_row_index(); ?>" data-bs-parent="#volunteer-faq-heading">
                      <div class="accordion-body"><?php echo $answer; ?></div>
                    </div>
                  </div>
                  <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
          <div class="lyc-counselling-right">
            <div class="row">
              <div class="col-12">
                <div class="lyc-explore-counselling p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 bg-primary-50 d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-3">
                  <h3>Explore Counselling</h3>
                  <div class="lyc-explore-counselling-btn">
                    <a href="<?php echo site_url('counselling-jobs'); ?>" class="btn d-flex justify-content-between align-items-center w-100 <?php if(is_page('counselling-jobs')) { echo 'lyc-explore-active'; } ?>">Counselling jobs
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M16.0032 9.41421L7.39663 18.0208L5.98242 16.6066L14.589 8H7.00324V6H18.0032V17H16.0032V9.41421Z" fill="white" />
                      </svg>
                    </a>
                    <a href="<?php echo site_url('volunteer'); ?>" class="btn d-flex justify-content-between align-items-center w-100 <?php if(is_page('volunteer')) { echo 'lyc-explore-active'; } ?> ">Volunteer Placements
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M16.0032 9.41421L7.39663 18.0208L5.98242 16.6066L14.589 8H7.00324V6H18.0032V17H16.0032V9.41421Z" fill="white" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-download-counselling p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 bg-primary-50 d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-3">
                  <h3>Download</h3>
                  <?php
                        $link = get_field('download');
                        if( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                  <a href="<?php echo esc_url( $link_url ); ?>" class="btn d-flex align-items-center w-100 btn-downlod gap-2" target="<?php echo esc_attr( $link_target ); ?>">
                    <?php endif; ?>
                    <span class="d-flex justify-content-center align-items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="28" viewBox="0 0 25 28" fill="none">
                        <path d="M3.41667 3.33335H16.75V8.66669H22.0833V24.6667H3.41667V3.33335ZM2.08133 0.666687C1.34665 0.666687 0.75 1.25875 0.75 1.98909V26.011C0.75 26.7263 1.34301 27.3334 2.07453 27.3334H23.4255C24.1568 27.3334 24.75 26.7319 24.75 25.99L24.7496 7.33335L18.0833 0.666687H2.08133ZM10.7499 8.00002C10.7499 10.1033 10.1423 12.5831 9.11657 14.8712C8.08716 17.1676 6.69857 19.1336 5.25032 20.2922L6.82285 22.4428C10.7261 19.8406 15.0477 18.0562 19.228 18.6534L19.8383 16.0684C16.2747 14.8806 13.4165 11.3199 13.4165 8.00002H10.7499ZM11.5499 15.9622C11.9064 15.167 12.2223 14.3418 12.4883 13.5047C13.1171 14.4708 13.8904 15.3576 14.7635 16.1271C13.4544 16.3615 12.172 16.7462 10.9303 17.2368C11.1499 16.8191 11.3568 16.3931 11.5499 15.9622Z" fill="white" />
                      </svg>
                    </span>
                    Placement Information
                  </a>
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-contact-counselling p-xxl-5 p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4 bg-primary d-flex justify-content-center align-items-center flex-column gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-3">
                  <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                    <h4>Have Any Questions?</h4>
                    <h4>Call Us Today</h4>
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="81" height="80" viewBox="0 0 81 80" fill="none">
                    <path d="M60.3447 52.1966L60.9313 52.7866L61.523 52.1966C64.452 49.2676 69.2007 49.2676 72.1297 52.1966C75.0587 55.1256 75.0587 59.8743 72.1297 62.8033L60.934 73.999L49.738 62.8033C46.809 59.8743 46.809 55.1256 49.738 52.1966C52.667 49.2676 57.4157 49.2676 60.3447 52.1966ZM40.8747 46.6666V53.3333C29.829 53.3333 20.8747 62.2876 20.8747 73.3333H14.208C14.208 58.8836 25.7008 47.1183 40.044 46.6793L40.8747 46.6666ZM40.8747 3.33331C51.9247 3.33331 60.8747 12.2833 60.8747 23.3333C60.8747 34.1323 52.327 42.9253 41.6247 43.3196L40.8747 43.3333C29.8247 43.3333 20.8747 34.3833 20.8747 23.3333C20.8747 12.5344 29.4225 3.74121 40.1247 3.34711L40.8747 3.33331ZM40.8747 9.99998C33.5066 9.99998 27.5413 15.9652 27.5413 23.3333C27.5413 30.7014 33.5066 36.6666 40.8747 36.6666C48.2427 36.6666 54.208 30.7014 54.208 23.3333C54.208 15.9652 48.2427 9.99998 40.8747 9.99998Z" fill="#0DCAF0" />
                  </svg>
                  <div class="d-flex flex-column gap-3 justify-content-center align-items-center">

                    <?php if( have_rows('footers', 'option') ): ?>
                    <?php while( have_rows('footers', 'option') ): the_row();
                    if (have_rows('social', 'option')) : ?>
                    <?php while (have_rows('social', 'option')) : the_row();
                    $index = get_row_index();
                        if($index!=1){
                        $title = get_sub_field('title', 'option');
                        $phone = get_sub_field('phone', 'option');
                          if($index==2){
                        ?>
                    <a href="tel:+<?php echo $phone; ?>" class="lyc-contact text-center">Call : +<?php echo $phone; ?></a>
                    <?php } else { ?>
                    <a href="mailto:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                    <?php } ?>
                    <?php } endwhile; ?>
                    <?php endif; ?>

                    <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </section>
</main>


<?php
get_footer();
?>
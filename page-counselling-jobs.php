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
  <section class="lyc-paid-counselling my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
    <?php if( have_rows('paid_counselling') ): ?>
    <?php while( have_rows('paid_counselling') ): the_row();
            $paid_first_content = get_sub_field('paid_first_content');
            $our_placements_title = get_sub_field('our_placements_title');
            $recruitment_process_title = get_sub_field('recruitment_process_title');
            $recruitment_process_content = get_sub_field('recruitment_process_content');
            $recruitment_other_content = get_sub_field('recruitment_other_content');
          ?>
    <div class="container">
      <div class="row">
        <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
          <div class="lyc-counselling-left d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-3">
            <?php echo $paid_first_content; ?>
            <div class="lyc-paid-counselling-slider">
              <?php if( have_rows('slider') ): ?>
              <?php while( have_rows('slider') ): the_row(); ?>

              <div class="owl-carousel owl-theme lyc-paid-slide">
                <?php if( have_rows('image_silder') ): ?>
                <?php while( have_rows('image_silder') ): the_row();
                        $image = get_sub_field('image');
                      ?>
                <div class="item">
                  <div class="lyc-paid-slide-img">
                    <?php
                        if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_attr($image['alt']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="1209" height="500" class="img-fluid">
                    <?php endif; ?>
                  </div>

                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <!-- <div class="item">
                      <div class="lyc-paid-slide-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/counselling/paid.webp" alt="paid counselling" width="1209" height="500" class="img-fluid">
                      </div>
                    </div> -->
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <div class="lyc-counselling-points d-flex flex-column gap-4">
              <h2><?php echo $our_placements_title; ?></h2>

              <ul class="lyc-check-list d-flex flex-column gap-3">
                <?php
                        if (have_rows('our_placements_work')) : ?>
                <?php while (have_rows('our_placements_work')) : the_row();
                            $content = get_sub_field('content');
                    ?>
                <li class="d-flex align-items-start gap-3 w-100">
                  <p><?php echo $content; ?></p>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
              </ul>
              <h2><?php echo $recruitment_process_title; ?></h2>
              <h3><?php echo $recruitment_process_content; ?></h3>
              <ul class="lyc-check-list d-flex flex-column gap-3">
                <?php
                        if (have_rows('recruitment_process')) : ?>
                <?php while (have_rows('recruitment_process')) : the_row();
                            $content = get_sub_field('content');
                    ?>
                <li class="d-flex align-items-start gap-3 w-100">
                  <p><?php echo $content; ?></p>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
              </ul>
              <?php echo $recruitment_other_content; ?>
              <?php if( have_rows('frequently') ): ?>
              <?php while( have_rows('frequently') ): the_row();
                      $frequently_title = get_sub_field('frequently_title');
                      ?>
              <h2><?php echo $frequently_title; ?></h2>

              <div class="lyc-counselling-faq">
                <div class="accordion accordion-flush d-flex flex-column gap-2" id="paid-faq-heading">
                  <?php
                        if (have_rows('frequently_questions')) : ?>
                  <?php while (have_rows('frequently_questions')) : the_row();
                            $questions = get_sub_field('questions');
                            $answer = get_sub_field('answer');

                    ?>
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="flush-heading">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paid-faq<?php echo get_row_index(); ?>" aria-expanded="false" aria-controls="paid-faq<?php echo get_row_index(); ?>">
                        <?php echo $questions; ?>
                      </button>
                    </h4>
                    <div id="paid-faq<?php echo get_row_index(); ?>" class="accordion-collapse collapse" aria-labelledby="paid-faq<?php echo get_row_index(); ?>" data-bs-parent="#paid-faq-heading">
                      <div class="accordion-body"><?php echo $answer; ?></div>
                      <!-- <p class="accordion-body"></p> -->
                    </div>
                  </div>
                  <?php endwhile; ?>
                  <?php endif; ?>
                  <!-- <div class="accordion-item">
                        <h4 class="accordion-header" id="flush-heading">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paid-faq2" aria-expanded="false" aria-controls="paid-faq2">
                            How many days are available?
                          </button>
                        </h4>
                        <div id="paid-faq2" class="accordion-collapse collapse" aria-labelledby="paid-faq2" data-bs-parent="#paid-faq-heading">
                          <p class="accordion-body">This is completely dependant on the schools needs and can vary from 1 day to 5 days. It would be best to speak directly to London Young Counselling about what is available. There could be the potential to work in more than one school.</p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h4 class="accordion-header" id="flush-heading">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paid-faq3" aria-expanded="false" aria-controls="paid-faq3">
                            Is this job for school term time only?
                          </button>
                        </h4>
                        <div id="paid-faq3" class="accordion-collapse collapse" aria-labelledby="paid-faq3" data-bs-parent="#paid-faq-heading">
                          <p class="accordion-body">Yes, this job is for school time term only. Counsellors must be able to attend all academic weeks and only take holidays during school holidays.</p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h4 class="accordion-header" id="flush-heading">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paid-faq4" aria-expanded="false" aria-controls="paid-faq4">
                            Do you provide any CPD?
                          </button>
                        </h4>
                        <div id="paid-faq4" class="accordion-collapse collapse" aria-labelledby="paid-faq4" data-bs-parent="#paid-faq-heading">
                          <p class="accordion-body">Yes, London Young Counselling provide various CPD workshops throughout the year. These are listed on our website and all counsellors are welcome to join any training for free.</p>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h4 class="accordion-header" id="flush-heading">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paid-faq5" aria-expanded="false" aria-controls="paid-faq5">
                            Where in the country are you based, is it just London?
                          </button>
                        </h4>
                        <div id="paid-faq5" class="accordion-collapse collapse" aria-labelledby="paid-faq5" data-bs-parent="#paid-faq-heading">
                          <p class="accordion-body">No, we started off in London but now we are based all over the country. Please contact us directly to discuss the locations we have available.</p>
                        </div>
                      </div> -->
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
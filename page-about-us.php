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
  <!-- Breadcrum -->
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
  <!-- Breadcrum -->
  <!-- After-banner -->
  <section class="lyc-about-after-banner my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
    <?php if( have_rows('experience') ): ?>
    <?php while( have_rows('experience') ): the_row();
        ?>
    <div class="container">
      <div class="row">
        <!-- Box1 -->
        <?php
                if (have_rows('years_experience')) : ?>
        <?php while (have_rows('years_experience')) : the_row();
                    $title = get_sub_field('title');
                    $sub_title = get_sub_field('sub_title');
                    $content = get_sub_field('content');
                ?>
        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="lyc-after-box h-100">
            <span class="bg-white"><?php echo $title;  ?></span>
            <div class="d-flex flex-column gap-2 p-4">
              <h3><?php echo $sub_title;  ?></h3>
              <p><?php echo $content;  ?></p>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <!-- After-banner -->
  <!-- steps towards -->
  <section class="lyc-steps py-xxl-7 py-xl-7 py-lg-5 py-md-5 py-sm-3 py-3 bg-primary-500 mt-xxl-15 mt-xl-10 mt-lg-7 mt-md-5 mt-sm-3 mt-3">
    <div class="container">
      <?php if( have_rows('fitness') ): ?>
      <?php while( have_rows('fitness') ): the_row();

        $title = get_sub_field('title');
        $sub_title = get_sub_field('sub_title');
        $content = get_sub_field('content');
        $image = get_sub_field('image');
        ?>
      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="lyc-steps-content d-flex flex-column gap-4">
            <div class="lyc-heading d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-2">
              <span><?php echo $title; ?></span>
              <h2 class="text-white"><?php echo $sub_title; ?></h2>
              <?php echo $content; ?>
            </div>
            <div class="row">
              <?php
                if (have_rows('fitness_box')) : ?>
              <?php while (have_rows('fitness_box')) : the_row();
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                ?>
              <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="lyc-steps-content-box p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 d-flex flex-column gap-3">
                  <h3><?php echo $title; ?></h3>
                  <?php echo $content; ?>
                </div>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="lyc-steps-img">
            <?php
                if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid w-100" width="800" height="700" title="<?php echo esc_attr($image['alt']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
  <!-- steps towards -->
  <!-- work process -->
  <section class="lyc-work-prc py-xxl-7 py-xl-7 py-lg-5 py-md-5 py-sm-3 py-3">
    <?php if( have_rows('work_process', 6) ): ?>
    <?php while( have_rows('work_process', 6) ): the_row();
        $title = get_sub_field('title');
        $heading = get_sub_field('heading');
        ?>
    <div class="container">
      <div class="lyc-heading my-xxl-5 my-xl-5 my-lg-4 my-md-4 my-sm-3 my-2 ">
        <span><?php echo $title; ?></span>
        <h2><?php echo $heading; ?></h2>
      </div>
      <div class="lyc-work-prc-content">
        <div class="row">
          <!-- Box1 -->
          <?php
                    if (have_rows('box', 6)) : ?>
          <?php while (have_rows('box', 6)) : the_row();
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                    ?>
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="lyc-work-prc-box d-flex flex-column justify-content-center align-items-center gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-2 gap-2">
              <div class="lyc-box-icon d-flex justify-content-center align-items-center position-relative">
                <?php
                    $formatted_text = str_replace(['<p>', '</p>'], '', $icon);
                  ?>
                <?php echo htmlspecialchars_decode($formatted_text); ?>
                <span class="bg-secondary d-flex justify-content-center align-items-center text-white position-absolute top-0 end-0"><?php echo get_row_index(); ?></span>
              </div>
              <h4><?php echo $title; ?></h4>
              <p class="text-center"><?php echo $content; ?></p>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>         
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <!-- work process -->
  <!-- Why-choose-us -->
  <section class="lyc-why-choose-us mt-xxl-7 mt-xl-7 mt-lg-5 mt-md-5 mt-sm-3 mt-3">
    <?php if( have_rows('why_choose_us') ): ?>
    <?php while( have_rows('why_choose_us') ): the_row();
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $content = get_sub_field('content');
            $sub_title = get_sub_field('sub_title');
            $our_imapact_title = get_sub_field('our_imapact_title');
            $after_one_title = get_sub_field('after_one_title');
        ?>
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="lyc-why-choose-us-img">
          <?php
                if (!empty($image)) : ?>
          <img src="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_attr($image['alt']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="800" height="756" class="img-fluid">
          <?php endif; ?>
        </div>
      </div>
      <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="lyc-why-choose-us-text d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-2 ps-xxl-0 ps-xl-0 ps-lg-0 ps-md-3 ps-sm-3 ps-3">
          <div class="lyc-heading d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-2">
            <span><?php echo $title; ?></span>
            <h2><?php echo $sub_title; ?></h2>
            <p><?php echo $content; ?></p>
          </div>
          <!-- row1 -->
          <div class="lyc-row1 d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-2">
            <h4><?php echo $our_imapact_title; ?></h4>
            <div class="row">
              <!-- Box1 -->
              <?php
                    if (have_rows('our_impact')) : ?>
              <?php while (have_rows('our_impact')) : the_row();
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                    ?>
              <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="lyc-choose-box">
                  <span class="bg-white"><?php echo $title; ?></span>
                  <p class="p-4"><?php echo $content; ?></p>
                </div>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
          <!-- row2 -->
          <div class="lyc-row1 d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-2">
            <h4><?php echo $after_one_title; ?></h4>
            <div class="row">
              <!-- Box1 -->
              <?php
                    if (have_rows('after')) : ?>
              <?php while (have_rows('after')) : the_row();
                        $title = get_sub_field('title');
                        $content = get_sub_field('content');
                    ?>
              <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="lyc-choose-box">
                  <span class="bg-white"><?php echo $title; ?></span>
                  <p class="p-4"><?php echo $content; ?></p>
                </div>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <!-- Why-choose-us -->
  <!-- Members -->
  <section class="lyc-members my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
    <?php if( have_rows('expert_member', 6) ): ?>
    <?php while( have_rows('expert_member', 6) ): the_row();

        $title = get_sub_field('title');
        $sub_title = get_sub_field('sub_title');

        ?>
    <div class="container">
      <div class="lyc-members-heading d-flex flex-wrap gap-3 justify-content-between align-items-center lyc-heading mb-xxl-5 mb-xl-5 mb-lg-4 mb-md-4 mb-sm-3 mb-2 ">
        <div class="lyc-heading">
          <span><?php echo $title; ?></span>
          <h2><?php echo $sub_title; ?></h2>
        </div>
        <a href="<?php echo site_url('staff'); ?>" class="btn btn-primary d-flex flex-wrap justify-content-center align-items-center gap-2">View all members
          <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_78_357)">
              <mask id="mask0_78_357" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="13">
                <path d="M12 0.5H0V12.5H12V0.5Z" fill="white"></path>
              </mask>
              <g mask="url(#mask0_78_357)">
                <path d="M10.0034 3.90831L1.41176 12.5L0 11.0882L8.59169 2.49654H1.01905V0.5H12V11.481H10.0034V3.90831Z" fill="#004AAD"></path>
              </g>
            </g>
            <defs>
              <clipPath id="clip0_78_357">
                <rect width="12" height="12" fill="white" transform="translate(0 0.5)"></rect>
              </clipPath>
            </defs>
          </svg>
        </a>
      </div>
      <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-5 row-cols-md-2 row-cols-sm-1 row-cols-1">
        <!-- Box1 -->
        <?php
            if (have_rows('member_box', 6)) : ?>
        <?php while (have_rows('member_box', 6)) : the_row();
                $image = get_sub_field('image');
                $name = get_sub_field('name');
                $position = get_sub_field('position');
              ?>
        <div class="col">
          <div class="lyc-members-box d-flex flex-column justify-content-between gap-xxl-4 gap-xl-4 gap-lg-3 gap-md-3 gap-sm-2 gap-2">
            <div class="lyc-members-box-img w-100">
              <img src="<?php echo $image['url']; ?>" class="img-fluid w-100" width="300" height="400" title="<?php echo $name; ?>" alt="<?php echo $name; ?>">
            </div>
            <div class="lyc-members-box-content d-flex flex-column justify-content-between gap-1">
              <h3><?php echo $name; ?></h3>
              <p><?php echo $position; ?></p>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <!-- Members -->
  <!-- Testimonial -->
  <?php
        $args = array(
            'numberposts' => 5,
            'post_type'   => 'testimonials',
            'post_status'     => 'publish',
            'order' => 'ASC',
        );
        $testimonials = get_posts($args);
        if (count($testimonials) > 0) {
      ?>
  <section class="lyc-testimonial my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3 position-relative">
    <div class="container">
      <div class="lyc-testimonial-heading d-flex justify-content-between align-items-center flex-wrap gap-3 mb-xxl-5 mb-xl-5 mb-lg-4 mb-md-4 mb-sm-3 mb-2 ">
        <div class="lyc-heading d-flex flex-column">
          <?php if( have_rows('testomonial',6) ): ?>
          <?php while( have_rows('testomonial',6) ): the_row();
                  $title = get_sub_field('title');
                  $sub_heading = get_sub_field('sub_heading');
                  ?>
          <span><?php echo $title; ?></span>
          <h2><?php echo $sub_heading; ?></h2>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <a href="<?php echo site_url('testimonial'); ?>" class="btn btn-primary d-flex flex-wrap justify-content-center align-items-center gap-2">View all testimonials
          <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_78_357)">
              <mask id="mask0_78_357" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="13">
                <path d="M12 0.5H0V12.5H12V0.5Z" fill="white"></path>
              </mask>
              <g mask="url(#mask0_78_357)">
                <path d="M10.0034 3.90831L1.41176 12.5L0 11.0882L8.59169 2.49654H1.01905V0.5H12V11.481H10.0034V3.90831Z" fill="#004AAD"></path>
              </g>
            </g>
            <defs>
              <clipPath id="clip0_78_357">
                <rect width="12" height="12" fill="white" transform="translate(0 0.5)"></rect>
              </clipPath>
            </defs>
          </svg>
        </a>
      </div>
      <div class="lyc-testimonial-content">
        <div class="owl-carousel owl-theme lyc-testimonial-slide">
          <!-- Item1 -->
          <?php foreach ($testimonials as $testimonial) {  ?>
          <div class="item">
            <div class="lyc-testimonial-box h-100 d-flex justify-content-between flex-column gap-3">
              <div class="lyc-box-heading d-flex align-items-center gap-3">
                <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                    <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                  </svg></span>
                <div class="lyc-box-title d-flex flex-column gap-1">
                  <h3><?php echo $testimonial->post_title; ?></h3>
                  <p><?php echo $testimonial->post_excerpt; ?></p>
                </div>
              </div>
              <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
                <?php echo $testimonial->post_content; ?>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
    </div>
    <div class="lyc-testimonial-bg position-absolute top-0 bottom-0 end-0 h-100">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/testimonial/Vector.png" title="vector" alt="vector" class="img-fluid h-100">
    </div>
  </section>
  <?php } ?>
  <!-- cta -->
  <section class="lyc-cta bg-primary-500 position-relative pb-xxl-7 pb-xl-7 pb-lg-5 pb-md-5 pb-sm-3 pb-3 pt-xxl-11 pt-xl-11 pt-lg-10 pt-md-10 pt-sm-7 pt-7">
    <div class="container">
      <?php if( have_rows('head_over', 6) ): ?>
      <?php while( have_rows('head_over', 6) ): the_row();

        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $button = get_sub_field('button');
        $image = get_sub_field('image');
        $every = get_sub_field('every');

        ?>
      <div class="row">
        <div class="col-xxl-8 col-xl-8 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-center align-items-center">
          <div class="lyc-heading d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-3 gap-md-3 gap-sm-2 gap-2">
            <h2 class="text-white"><?php echo $title;  ?></h2>
            <p class="text-white"><?php echo $content;  ?></p>
            <!-- <a href="<?php //echo esc_url( $button['url'] ); ?>" class="btn btn-secondary d-flex align-items-center gap-2">
              <?php //echo esc_attr( $button['title'] ); ?>
              <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_78_357)">
                  <mask id="mask0_78_357" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="13">
                    <path d="M12 0.5H0V12.5H12V0.5Z" fill="white"></path>
                  </mask>
                  <g mask="url(#mask0_78_357)">
                    <path d="M10.0034 3.90831L1.41176 12.5L0 11.0882L8.59169 2.49654H1.01905V0.5H12V11.481H10.0034V3.90831Z" fill="#004AAD"></path>
                  </g>
                </g>
                <defs>
                  <clipPath id="clip0_78_357">
                    <rect width="12" height="12" fill="white" transform="translate(0 0.5)"></rect>
                  </clipPath>
                </defs>
              </svg>
            </a> -->
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="lyc-cta-img position-relative d-flex justify-content-center align-items-center">
            <?php
                if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_attr($image['alt']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" width="500" height="500">
            <?php endif; ?>
            <!-- <span class="lyc-cta-in d-flex flex-column justify-content-center align-items-center gap-xxl-2 gap-xl-2 gap-lg-2 gap-md-1 gap-sm-1 gap-1 text-white p-3 position-absolute">
              <?php //echo esc_html($every);  ?>
              <?php
                             //$formatted_text = str_replace(['<p>', '</p>'], '', $every);
                            //  echo esc_html($formatted_text);
                         ?>
              <?php //echo htmlspecialchars_decode($formatted_text); ?>
               <p class="text-white m-0">For every</p>
                  <h4 class="text-white">£1</h4>
                  <p class="text-white m-0">invested</p>
            </span> -->
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="lyc-background position-absolute bottom-0 top-0">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/cta/cta-bg.png" title="cta" alt="cta" class="img-fluid h-100" width="1920" height="660">
    </div>
  </section>
  <!-- cta -->
</main>









<?php
get_footer();
?>
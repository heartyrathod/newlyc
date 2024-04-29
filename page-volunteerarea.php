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
        <h1>
          <?php echo $post->post_title; ?>
        </h1>
        <ul class="d-flex align-items-center gap-2 pb-3">
          <li>
            <a href="<?php echo site_url('home'); ?>" class="lyc-home">Home</a>
          </li>
          <li>-</li>
          <li>
            <p>
              <?php echo $post->post_title; ?>
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- entry header -->

  <!-- After banner -->
  <section class="lyc-service-after-banner my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
    <?php if (have_rows('counsellors_areas')) : ?>
      <?php while (have_rows('counsellors_areas')) : the_row();
        $title = get_sub_field('title');
        $content = get_sub_field('content');
      ?>
        <div class="container">
          <div class="lyc-counsellor-after-banner-content">
            <div class="mx-xxl-7 mx-xl-7 mx-lg-5 mx-md-5 mx-sm-3 mx-3 d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-3">
              <h2>
                <?php echo $title; ?>
              </h2>
              <?php echo $content; ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <!-- After banner -->

  <!-- Service -->
  <section class="lyc-counsellor-area py-xxl-7 py-xl-7 py-lg-5 py-md-5 py-sm-3 py-3 bg-primary-100 bg-opacity-15">
    <?php if (have_rows('counsellors_areas')) : ?>
      <?php while (have_rows('counsellors_areas')) : the_row();

      ?>
        <div class="container">
          <div class="lyc-why-std-come-content-details grid">
            <!-- <div class="row"> -->
            <?php
            if (have_rows('areas_pages')) : ?>
              <?php while (have_rows('areas_pages')) : the_row();
                $link = get_sub_field('pages_links');
                $icon = get_sub_field('icon');
              ?>
                <div class="g-col-xxl-3 g-col-xl-3 g-col-lg-4 g-col-md-6 g-col-sm-6 g-col-6">
                  <a class="lyc-volunteerarea-box" target="_blank" href="<?php echo esc_url($link['url']); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                      <g>
                        <path d="M11.6707 3.97636L1.64706 14L0 12.353L10.0236 2.32929H1.1889V0H14V12.8111H11.6707V3.97636Z" />
                      </g>
                    </svg>
                    <h3><?php echo esc_attr($link['title']); ?></h3>
                    <?php echo $icon; ?>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur. Fermentum aliquet justo commodo adipiscing.</p> -->
                  </a>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
            <!-- </div> -->
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <!-- Service -->
  <!-- ICO -->
  <section class="lyc-ico my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
    <?php if (have_rows('the_ico')) : ?>
      <?php while (have_rows('the_ico')) : the_row();

        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $ico_image = get_sub_field('ico_image');
        $ico_icon = get_sub_field('ico_icon');
        $the_ico_content = get_sub_field('the_ico_content');

      ?>
        <div class="container">
          <div class="lyc-ico-contents d-flex flex-column gap-4">
            <div class="lyc-ico-content d-flex align-items-center gap-4 flex-wrap">
              <div class="lyc-icon-logo d-flex align-items-center justify-content-center p-4">
                <?php
                if (!empty($ico_image)) : ?>
                  <img src="<?php echo esc_url($ico_image['url']); ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" width="200" height="120" class="img-fluid">
                <?php endif; ?>
              </div>
              <div class="lyc-ico-text d-flex flex-column gap-2">
                <h3>
                  <?php echo $title; ?>
                </h3>
                <?php echo $content; ?>
              </div>
            </div>
            <div class="lyc-ico-note d-flex flex-xxl-nowrap flex-xl-nowrap flex-lg-nowrap flex-md-nowrap flex-sm-wrap flex-wrap align-items-center gap-3 p-xxl-5 p-xl-5 p-lg-4 p-md-4 p-sm-3 p-3">
              <?php $formatted_text = str_replace(['<p>', '</p>'], '', $ico_icon); ?>
              <?php echo htmlspecialchars_decode($formatted_text); ?>
              <?php echo $the_ico_content; ?>
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
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
  <!-- contents -->
  <section class="lyc-events my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
    <div class="container">
      <?php echo do_shortcode('[events]'); ?>
    </div>
  </section>
  <!-- contents -->




</main>









<?php
get_footer();
?>
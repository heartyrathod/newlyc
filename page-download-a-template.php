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
    <?php if( have_rows('download_template') ): ?>
    <?php while( have_rows('download_template') ): the_row();
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        ?>
    <div class="container">
      <div class="lyc-service-after-banner-content">

        <div class="my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3 d-flex flex-column gap-3">
          <?php echo $content; ?>

          <div class="row">
          <?php if( have_rows('downloads_links') ): ?>
            <?php while( have_rows('downloads_links') ): the_row();
                $title = get_sub_field('title');
                //$template_title = get_sub_field('template_title');
                //$template = get_field('template');

                ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="lyc-temp-box p-4 d-flex flex-column gap-3">
                <h3><?php echo $title; ?></h3>
                
                <?php if( have_rows('templates') ): ?>
                <?php while( have_rows('templates') ): the_row();
                    $template_title = get_sub_field('template_title');
                    $template_form = get_sub_field('template_form');
                    ?>

                    <?php if( $template_form ): ?>
                      <a href="<?php echo $template_form['url']; ?>" target="_blank">
                          <?php echo $template_title; ?>
                      </a>
                    <?php endif; ?>
               
                <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
            
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <!-- After banner -->


</main>









<?php
get_footer();
?>
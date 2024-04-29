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

      <!-- After banner -->
      <section class="lyc-service-after-banner my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
      <?php if( have_rows('counsellor_handbook') ): ?>
            <?php while( have_rows('counsellor_handbook') ): the_row();
        $handbook = get_sub_field('handbook');
        
        ?>
        <div class="container">
          <div class="lyc-service-after-banner-content">
          
            <div class="mx-xxl-7 mx-xl-7 mx-lg-5 mx-md-5 mx-sm-3 mx-3 d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-3 gap-sm-3 gap-3">  
            
              <iframe	src="<?php echo $handbook; ?>" width="100%"	height="1000px"	style="border: none;"	>			</iframe>      
            <!-- <embed src="http://192.168.1.2/wordpress/lyc/wp-content/uploads/2024/03/Aartika-Brochure-For-Mail-31.01.2020-1.pdf"	type="application/pdf"	width="100%"	height="100%"/> -->
              
                <?php //echo $handbook; ?>

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
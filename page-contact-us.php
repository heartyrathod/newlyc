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
      <section class="lyc-map">
      <?php if( have_rows('conatct_us') ): ?>
            <?php while( have_rows('conatct_us') ): the_row();
                $map = get_sub_field('map');
        ?>
        <div class="container">
          <div class="lyc-map-content">
            <?php echo $map; ?>
          </div>
        </div>
      </section>
      <?php endwhile; ?>
      <?php endif; ?>
<section class="lyc-contact-us">
          <?php if( have_rows('conatct_us') ): ?>
                <?php while( have_rows('conatct_us') ): the_row();
                    $content = get_sub_field('content');
            ?>
        <div class="container">
            <?php if( have_rows('footers', 'option') ): ?>
                <?php while( have_rows('footers', 'option') ): the_row();
            $title = get_sub_field('title', 'option');
            $copy_right = get_sub_field('copy_right', 'option');
            $design = get_sub_field('design', 'option');

            ?>
              <div class="lyc-contact-us-content">
                  <div class="row">
                  <?php
                    if (have_rows('social')) : ?>
                    <?php while (have_rows('social')) : the_row();
                        $title = get_sub_field('title');
                        $phone = get_sub_field('phone');
                        $index = get_row_index();
                    ?>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                      <div class="lyc-contact-us-box">
                        <h2><?php echo $title;  ?></h2>
                        <?php
                      if($index==1){ ?>
                        <p class="text-white"><?php echo $phone; ?></p>
                        <?php }else{ ?>
                          <a href="tel:+<?php echo $phone; ?>"><?php echo $phone; ?></a>
                          <?php }?>
                      </div>
                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>

                  </div>
                <?php endwhile; ?>
                <?php endif; ?>

                  <div class="row">
                    <?php
                      if (have_rows('contact_ext')) : ?>
                      <?php while (have_rows('contact_ext')) : the_row();
                          $title = get_sub_field('title');
                          $ext = get_sub_field('ext');
                      ?>
                      <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="lyc-contact-us-box lyc-contact-us-box2">
                          <h2><?php echo $ext; ?> -</h2>
                          <h2> <?php echo $title; ?></h2>
                        </div>
                      </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="col-12">
                      <h3><?php echo $content; ?></h3>
                    </div>
                  </div>

              </div>
        </div>
          <!--  -->


        <?php endwhile; ?>
      <?php endif; ?>

</section>
      <section class="lyc-contact-us-form">
        <div class="container">
          <form id="contact_form" method="post" enctype="multipart/form-data">
          <div class="row justify-content-center">
            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-10 col-sm-12 col-12">
              <div class="row g-xxl-4 g-xl-4 g-lg-4 g-md-4 g-3">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="lyc-form-group">
                    <label for="lyc-name" class="lyc-required">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="enter your name" required="">
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="lyc-form-group">
                    <label for="lyc-email" class="lyc-required">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="enter your email address" required="">
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="lyc-form-group">
                    <label for="lyc-telephone" class="lyc-required">Telephone</label>
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="enter your telephone number" required="">
                  </div>
                </div>
                <div class="col-12">
                  <div class="lyc-form-group">
                    <label for="lyc-message" class="lyc-required">Message</label>
                    <textarea id="msg" name="msg" class="form-control" required="" placeholder="write your word here..."></textarea>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-end align-items-center gap-3">
                    <div class="contactsuccess"></div>
                  <input type="hidden" name="action" value="contact_form">
                  <button type="submit" id="contact_btn" name="contact_btn" class="btn btn-primary d-flex flex-wrap justify-content-center align-items-center gap-2">
                    Send
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                      <g clip-path="url(#clip0_282_3041)">
                        <mask id="mask0_282_3041" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="13">
                          <path d="M12 0.5H0V12.5H12V0.5Z" fill="white"></path>
                        </mask>
                        <g mask="url(#mask0_282_3041)">
                          <path d="M10.0034 3.90831L1.41176 12.5L0 11.0882L8.59169 2.49654H1.01905V0.5H12V11.481H10.0034V3.90831Z" fill="white"></path>
                        </g>
                      </g>
                      <defs>
                        <clipPath id="clip0_282_3041">
                          <rect width="12" height="12" fill="white" transform="translate(0 0.5)"></rect>
                        </clipPath>
                      </defs>
                    </svg>
                    <span class="btn-ringiq"></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </section>


    </main>







<?php
get_footer();
?>
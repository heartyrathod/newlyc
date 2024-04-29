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
  <section class="lyc-children-content lyc-upload-doc my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
    <div class="container">
      <!-- <h2>Coming soon</h2> -->
      <div class="lyc-upload-doc-content grid">
        <!-- <ul class=""> -->
        <?php


            $form_id = 3;
            $search_criteria['field_filters'][] = array( 'key' => 'created_by', 'value' => get_current_user_id() );
            $entries = GFAPI::get_entries( $form_id, $search_criteria );

            if ( !empty( $entries ) ) {

                foreach ( $entries as $entry ) {
                    $name = rgar( $entry, '2.3' );
                    $email = rgar( $entry, '7' );
                    $type = rgar( $entry, '4' );
                    $school = rgar( $entry, '5' );
                    $attachment_id = rgar( $entry, '6' );
                    $attachment_id = '';
                    $icon_html = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                  <path d="M20 13C18.3221 13 16.7514 13.4592 15.4068 14.2587C16.5908 15.6438 17.5269 17.2471 18.1465 19H20V13ZM16.0037 19C14.0446 14.3021 9.4079 11 4 11V19H16.0037ZM4 9C7.82914 9 11.3232 10.4348 13.9738 12.7961C15.7047 11.6605 17.7752 11 20 11V3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934C2 3.44476 2.45531 3 2.9918 3H6V1H8V5H4V9ZM18 1V5H10V3H16V1H18ZM16.5 10C15.6716 10 15 9.32843 15 8.5C15 7.67157 15.6716 7 16.5 7C17.3284 7 18 7.67157 18 8.5C18 9.32843 17.3284 10 16.5 10Z"></path></svg>';

                          if ( isset( $entry['6'] ) && !empty( $entry['6'] ) ) {
                            // Get attachment URL
                            $attachment_id = rgar( $entry, '6' );
                            $icon_html     = kp_get_icon_url( $attachment_id );
                            // $image_url = wp_get_attachment_url( $attachment_id );
                          }

        ?>
        <div class="g-col-xxl-4 g-col-xl-4 g-col-lg-4 g-col-md-6 g-col-sm-12 g-col-12 lyc-upload-doc-content-item d-flex flex-wrap">
          <div class="lyc-upload-doc-content-item-head">
            <span class="lyc-upload-doc-content-item-head-icon">
              <?php echo $icon_html; ?>
              <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M20 13C18.3221 13 16.7514 13.4592 15.4068 14.2587C16.5908 15.6438 17.5269 17.2471 18.1465 19H20V13ZM16.0037 19C14.0446 14.3021 9.4079 11 4 11V19H16.0037ZM4 9C7.82914 9 11.3232 10.4348 13.9738 12.7961C15.7047 11.6605 17.7752 11 20 11V3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934C2 3.44476 2.45531 3 2.9918 3H6V1H8V5H4V9ZM18 1V5H10V3H16V1H18ZM16.5 10C15.6716 10 15 9.32843 15 8.5C15 7.67157 15.6716 7 16.5 7C17.3284 7 18 7.67157 18 8.5C18 9.32843 17.3284 10 16.5 10Z"></path>
              </svg> -->
            </span>
            <div class="lyc-upload-doc-content-item-head-wrap">
              <h2><?php echo $name; ?></h2>
              <p><?php echo $email; ?></p>
            </div>
          </div>
          <ul>
            <li>
              <h3>Form Type</h3>
              <p><?php echo $type; ?></p>
            </li>
            <li>
              <h3>School</h3>
              <p><?php echo $school; ?></p>
            </li>
          </ul>
              <?php
                  if ( !empty( $attachment_id ) ) {
                ?>
          <a href="<?php echo $attachment_id ?>" target="_blank" class="btn btn-primary">View Attachment</a>
          <?php } ?>
        </div>
        <?php } ?>
        <?php } ?>

      </div>
    </div>
  </section>
</main>








<?php
get_footer();
?>
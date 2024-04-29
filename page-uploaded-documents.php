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
  <section class="lyc-document-content lyc-upload-doc my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
    <div class="container">
      <div class="row">
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
          <div class="lyc-profile-navigation">
            <ul class="d-flex flex-column">
              <li>
                <a href="<?php echo site_url('your-profile'); ?>">Profile</a>
              </li>
              <li class="is-active">
                <a href="<?php echo site_url('uploaded-documents'); ?>">Documents</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
          <div class="lyc-profile-content">

            <?php if(isset($_GET['form_type']) && $_GET['form_type']!=null && $_GET['form_type']!=''){ ?>
            <div class="lyc-document-name">
              <h3>Form Type:</h3>
              <p><?php echo $_GET['form_type']; ?></p>
            </div>
            <?php
              $form_id = 3;
                  $search_criteria['field_filters'][] = array( 'key' => 'created_by', 'value' => get_current_user_id() );
                  $search_criteria['field_filters'][] = array( 'key' => '4', 'value' => $_GET['form_type'] );
                  $entries = GFAPI::get_entries( $form_id, $search_criteria );

                  if ( count($entries)>0 && !empty( $entries ) ) {
                    ?>
            <div class="lyc-upload-doc-content grid">
              <?php




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
              <div class="g-col-xxl-4 g-col-xl-4 g-col-lg-6 g-col-md-6 g-col-sm-12 g-col-12 lyc-upload-doc-content-item d-flex flex-wrap">
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


            </div>
            <?php } else { ?>
            <h2 class="h4">No documents found!</h2>
            <?php } ?>
            <?php } else { ?>
            <div class="lyc-upload-doc-content grid">
              <div class="g-col-xxl-4 g-col-xl-4 g-col-lg-6 g-col-md-6 g-col-sm-12 g-col-12 lyc-upload-doc-content-item d-flex flex-wrap">
                <a href="<?php echo site_url('uploaded-documents'); ?>?form_type=Intake Form" class="lyc-upload-doc-content-item-head">
                  <span class="lyc-upload-doc-content-item-head-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M9 2.00318V2H19.9978C20.5513 2 21 2.45531 21 2.9918V21.0082C21 21.556 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5501 3 20.9932V8L9 2.00318ZM5.82918 8H9V4.83086L5.82918 8ZM11 4V9C11 9.55228 10.5523 10 10 10H5V20H19V4H11Z"></path>
                    </svg>
                  </span>
                  <h2>Intake Form</h2>
                </a>
              </div>
              <div class="g-col-xxl-4 g-col-xl-4 g-col-lg-6 g-col-md-6 g-col-sm-12 g-col-12 lyc-upload-doc-content-item d-flex flex-wrap">
                <a href="<?php echo site_url('uploaded-documents'); ?>?form_type=Ending Form" class="lyc-upload-doc-content-item-head">
                  <span class="lyc-upload-doc-content-item-head-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M9 2.00318V2H19.9978C20.5513 2 21 2.45531 21 2.9918V21.0082C21 21.556 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5501 3 20.9932V8L9 2.00318ZM5.82918 8H9V4.83086L5.82918 8ZM11 4V9C11 9.55228 10.5523 10 10 10H5V20H19V4H11Z"></path>
                    </svg>
                  </span>
                  <h2>Ending Form</h2>
                </a>
              </div>
              <div class="g-col-xxl-4 g-col-xl-4 g-col-lg-6 g-col-md-6 g-col-sm-12 g-col-12 lyc-upload-doc-content-item d-flex flex-wrap">
                <a href="<?php echo site_url('uploaded-documents'); ?>?form_type=Case Review" class="lyc-upload-doc-content-item-head">
                  <span class="lyc-upload-doc-content-item-head-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M9 2.00318V2H19.9978C20.5513 2 21 2.45531 21 2.9918V21.0082C21 21.556 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5501 3 20.9932V8L9 2.00318ZM5.82918 8H9V4.83086L5.82918 8ZM11 4V9C11 9.55228 10.5523 10 10 10H5V20H19V4H11Z"></path>
                    </svg>
                  </span>
                  <h2>Case Review</h2>
                </a>
              </div>
              <div class="g-col-xxl-4 g-col-xl-4 g-col-lg-6 g-col-md-6 g-col-sm-12 g-col-12 lyc-upload-doc-content-item d-flex flex-wrap">
                <a href="<?php echo site_url('uploaded-documents'); ?>?form_type=Feedback Form" class="lyc-upload-doc-content-item-head">
                  <span class="lyc-upload-doc-content-item-head-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M9 2.00318V2H19.9978C20.5513 2 21 2.45531 21 2.9918V21.0082C21 21.556 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5501 3 20.9932V8L9 2.00318ZM5.82918 8H9V4.83086L5.82918 8ZM11 4V9C11 9.55228 10.5523 10 10 10H5V20H19V4H11Z"></path>
                    </svg>
                  </span>
                  <h2>Feedback Form</h2>
                </a>
              </div>
              <div class="g-col-xxl-4 g-col-xl-4 g-col-lg-6 g-col-md-6 g-col-sm-12 g-col-12 lyc-upload-doc-content-item d-flex flex-wrap">
                <a href="<?php echo site_url('uploaded-documents'); ?>?form_type=Monthly Attendance Record" class="lyc-upload-doc-content-item-head">
                  <span class="lyc-upload-doc-content-item-head-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M9 2.00318V2H19.9978C20.5513 2 21 2.45531 21 2.9918V21.0082C21 21.556 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5501 3 20.9932V8L9 2.00318ZM5.82918 8H9V4.83086L5.82918 8ZM11 4V9C11 9.55228 10.5523 10 10 10H5V20H19V4H11Z"></path>
                    </svg>
                  </span>
                  <h2>Monthly Attendance Record</h2>
                </a>
              </div>
              <div class="g-col-xxl-4 g-col-xl-4 g-col-lg-6 g-col-md-6 g-col-sm-12 g-col-12 lyc-upload-doc-content-item d-flex flex-wrap">
                <a href="<?php echo site_url('uploaded-documents'); ?>?form_type=At Risk Form" class="lyc-upload-doc-content-item-head">
                  <span class="lyc-upload-doc-content-item-head-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M9 2.00318V2H19.9978C20.5513 2 21 2.45531 21 2.9918V21.0082C21 21.556 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5501 3 20.9932V8L9 2.00318ZM5.82918 8H9V4.83086L5.82918 8ZM11 4V9C11 9.55228 10.5523 10 10 10H5V20H19V4H11Z"></path>
                    </svg>
                  </span>
                  <h2>At Risk Form</h2>
                </a>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>








<?php
get_footer();
?>
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
  <?php


    $user_id = get_current_user_id();
    // $user = new WP_User(get_current_user_id());


    if ( isset( $_POST['profile_submit'] ) ) {
      $first_name = sanitize_text_field( $_POST['first_name'] );
      $last_name = sanitize_text_field( $_POST['last_name'] );
      $description = sanitize_text_field( $_POST['description'] );
      $lyc_phone = sanitize_text_field( $_POST['lyc_phone'] );
      $lyc_school = sanitize_text_field( $_POST['lyc_school'] );
      $email = sanitize_email( $_POST['user_email'] );




      update_user_meta( $user_id, 'first_name', $first_name );
      update_user_meta( $user_id, 'last_name', $last_name );
      update_user_meta( $user_id, 'description', $description );
      update_user_meta( $user_id, 'lyc_phone', $lyc_phone );
      update_user_meta( $user_id, 'lyc_school', $lyc_school );
      wp_update_user( array( 'ID' => $user_id, 'user_email' => $email ) );

      if(isset($_FILES['wp-user-avatar'])){
        $filename = $_FILES["file"]["wp-user-avatar"];

        $filetype = wp_check_filetype( basename( $filename ), null );

        $wp_upload_dir = wp_upload_dir();

        $attachment = array(
            'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ),
            'post_mime_type' => $filetype['type'],
            'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
            'post_content'   => '',
            'post_status'    => 'inherit'
        );


        $attachment_id = wp_insert_attachment( $attachment, $filename );
        require_once( ABSPATH . 'wp-admin/includes/image.php' );
        $attach_data = wp_generate_attachment_metadata( $attachment_id, $filename );
        wp_update_attachment_metadata( $attachment_id, $attach_data );
          $avatarArra = wp_get_attachment_image_src( $attachment_id, 'full' );
          wp_user_avatars_update_avatar( $user_id, $avatarArra[0] );
          update_user_meta( $user_id, 'wp_user_avatars_rating', 'G' );
          update_user_meta($user_id, "wp_user_avatar", $attachment_id);

      $path = preg_replace( '/wp-content(?!.*wp-content).*/', '', __DIR__ );
      require_once( $path . 'wp-load.php' );
      //require_once("../../../../wp-load.php");
      /*if (current_user_can('administrator')) {
          update_user_meta(wp_get_current_user()->id, "wp_user_avatar", $_POST['wp-user-avatar']);
      } else {*/
          $upload = wp_upload_bits( $_FILES['wp-user-avatar']['name'], null, file_get_contents( $_FILES['wp-user-avatar']['tmp_name'] ) );
          $wp_filetype = wp_check_filetype( basename( $upload['file'] ), null );
          $wp_upload_dir = wp_upload_dir();
          $attachment = array(
              'guid' => $wp_upload_dir['baseurl'] . _wp_relative_upload_path( $upload['file'] ),
              'post_mime_type' => $wp_filetype['type'],
              'post_title' => preg_replace('/\.[^.]+$/', '', basename( $upload['file'] )),
              'post_content'   => '',
              'post_status'    => 'inherit'
          );
          $attach_id = wp_insert_attachment( $attachment, $upload['file']);
          require_once(ABSPATH . 'wp-admin/includes/image.php');
          $attach_data = wp_generate_attachment_metadata( $attach_id, $upload['file'] );
          wp_update_attachment_metadata( $attach_id, $attach_data );
          $avatarArra = wp_get_attachment_image_src( $attach_id, 'full' );
          wp_user_avatars_update_avatar( $user_id, $avatarArra[0] );
          update_user_meta( $user_id, 'wp_user_avatars_rating', 'G' );
          update_user_meta($user_id, "wp_user_avatar", $attach_id);
          //update_user_meta(wp_get_current_user()->ID, "wp_user_avatar", $attach_id);

      //}
       }



  }
  ?>
  <!-- profile content -->
  <section class="lyc-profile my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
    <div class="container">
      <form class="lyc-profile-form" id="update-profile-form" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="form-group">
              <label for="profileImg" class="form-label">
                Avatar
                <div id="lyc-img-preview" class="ratio ratio-1x1 ">
                  <div class="lyc-img-preview-icon">
                    <?php
                    // $avatarArray = get_user_meta( wp_get_current_user()->ID, 'wp_user_avatar', true );
                    $avatar_id = get_user_meta( $user_id, 'wp_user_avatars' , true );
                    // $avatarArray = get_user_meta( wp_get_current_user()->ID, 'wp_user_avatars', true );
                    //$avatarArra = wp_get_attachment_image_src( $avatar_id, 'full' );
                    if($avatar_id!='' && isset($avatar_id['full'])){
                      $avatarUrl = $avatar_id['full'];
                    } else {
                      $avatarUrl = get_avatar_url( $user_id,['size' => '500'] );
                    }
                    ?>

                    <img src="<?php echo $avatarUrl; ?>" />
                    <?php //echo get_avatar(wp_get_current_user()->id, ); ?>

                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M5 20H19V22H5V20ZM12 18C7.58172 18 4 14.4183 4 10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10C20 14.4183 16.4183 18 12 18ZM12 16C15.3137 16 18 13.3137 18 10C18 6.68629 15.3137 4 12 4C8.68629 4 6 6.68629 6 10C6 13.3137 8.68629 16 12 16Z"></path>
                    </svg> -->
                  </div>
                </div>
                <?php //do_action('edit_user_avatar', $user); ?>
                <input type="file" accept="image/*" id="profileImg" name="wp-user-avatar" value="" class="form-control  d-none" onchange="loadFile(event)">
              </label>
            </div>
          </div>
          <div class="col-xxl-9 col-xxl-9 col-lg-9 col-md-6 col-sm-12 col-12">
            <div class="row">
              <?php
                $current_user = wp_get_current_user();
                $username = $current_user->user_login;
                $first_name = $current_user->first_name;
                $last_name = $current_user->last_name;
                $email = $current_user->user_email;
                $lyc_phone = $current_user->lyc_phone;
                $lyc_school = $current_user->lyc_phone;
                $description = $current_user->description;

              ?>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="lyc-form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo esc_attr( $first_name ); ?>" placeholder="" required="" aria-required="true">
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="lyc-form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo esc_attr( $last_name ); ?>" placeholder="" required="" aria-required="true">
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="lyc-form-group">
                  <label for="email">Email</label>
                  <input type="email" name="user_email" id="user_email" class="form-control" value="<?php echo esc_attr( $email ); ?>" placeholder="" required="" aria-required="true">
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="lyc-form-group">
                  <label for="email">Telephone Number</label>
                  <input type="text" name="lyc_phone" id="lyc_phone" class="form-control" value="<?php echo esc_attr( $lyc_phone ); ?>" placeholder="" required="" aria-required="true">
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="lyc-form-group">
                  <label for="email">School</label>
                  <input type="text" name="lyc_school" id="lyc_school" class="form-control" value="<?php echo esc_attr( $lyc_school ); ?>" placeholder="" required="" aria-required="true">
                </div>
              </div>
              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="lyc-form-group">
                  <label for="people">About your self</label>
                  <textarea type="text" name="description" id="description" value="<?php echo esc_attr( $description ); ?>" class="form-control" placeholder="write your word here"><?php echo esc_attr( $description ); ?></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="lyc-update-profile-btn d-flex justify-content-end align-items-end mt-4">
          <button type="submit" name="profile_submit" class="btn btn-primary">Update profile</button>
        </div>
      </form>
    </div>
  </section>
  <!-- profile content -->





</main>









<?php
get_footer();
?>
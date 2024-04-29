<?php

/**
 * The header.

 * @package WordPress
 * @subpackage lyc
 * @since nyc 1.0.0
 */


?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LYC - London Young Counselling</title>
    <!-- Owl -->
    <!-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css"> -->
    <!-- Google font -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=DM+Serif+Display:ital@0;1" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/main.min.css"> -->
    <!-- <link rel="shortcut icon" href="" type="image/x-icon"> -->
    <?php wp_head(); ?>
  </head>

  <body>
    <!-- Drawer menu -->
    <div class="lyc-drawer-menu bg-primary p-3 d-flex flex-column gap-4">
      <?php
    $custom_logo_id = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
    ?>
      <a href="#" class="lyc-header-nav-logo p-2">
        <img src="<?php echo $image[0]; ?>" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" class="img-fluid" width="<?php echo $image[1]; ?>" height="<?php echo $image[1]; ?>">
      </a>
      <div class="lyc-drawer-menu-content d-flex flex-column gap-4">
        <?php
        $twentytwentyone_unique_id = wp_unique_id( 'search-form-' );

        $twentytwentyone_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
        ?>
        <form class="lyc-drawer-search d-xxl-none d-xl-none d-lg-none d-md-flex d-sm-flex d-flex" role="search" <?php echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <span class="d-flex align-items-center gap-2">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 0C13.968 0 18 4.032 18 9C18 13.968 13.968 18 9 18C4.032 18 0 13.968 0 9C0 4.032 4.032 0 9 0ZM9 16C12.8675 16 16 12.8675 16 9C16 5.1325 12.8675 2 9 2C5.1325 2 2 5.1325 2 9C2 12.8675 5.1325 16 9 16ZM17.4853 16.0711L20.3137 18.8995L18.8995 20.3137L16.0711 17.4853L17.4853 16.0711Z" fill="white" fill-opacity="0.5" />
            </svg>
            <input type="text" id="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>" class="border-0" value="<?php echo get_search_query(); ?>" name="s" placeholder="Search" autocomplete="off" required />
            <input type="submit" class="search-submit d-none" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwentyone' ); ?>" />
          </span>
        </form>
        <!-- <form action="" class="lyc-drawer-search d-xxl-none d-xl-none d-lg-none d-md-flex d-sm-flex d-flex">
          <span class="d-flex align-items-center gap-2">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 0C13.968 0 18 4.032 18 9C18 13.968 13.968 18 9 18C4.032 18 0 13.968 0 9C0 4.032 4.032 0 9 0ZM9 16C12.8675 16 16 12.8675 16 9C16 5.1325 12.8675 2 9 2C5.1325 2 2 5.1325 2 9C2 12.8675 5.1325 16 9 16ZM17.4853 16.0711L20.3137 18.8995L18.8995 20.3137L16.0711 17.4853L17.4853 16.0711Z" fill="white" fill-opacity="0.5" />
            </svg>
            <input type="text" placeholder="Search" class="border-0" name="" id="">
          </span>
        </form> -->
              <?php
                    echo wp_nav_menu(array(
                      'container' => '',
                      'menu'        => 'Mobile Menu',
                      'menu_id'     => '',
                      'menu_class'  => 'lyc-drawer-list d-flex flex-column gap-3',
                      'fallback_cb' => false,
                      'depth'       => 0,
                    ));
            ?>
      </div>
      <div class="lyc-drawer-menu-action d-flex flex-column gap-3">
        <div class="lyc-account d-xxl-none d-xl-none d-lg-none d-md-none d-sm-flex d-flex gap-2 flex-column">
          <div class="lyc-account-head d-flex gap-2 align-items-center">
            <span class="bg-white d-flex align-items-center justify-content-center">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_323_22)">
                  <path d="M5 20H19V22H5V20ZM12 18C7.58172 18 4 14.4183 4 10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10C20 14.4183 16.4183 18 12 18ZM12 16C15.3137 16 18 13.3137 18 10C18 6.68629 15.3137 4 12 4C8.68629 4 6 6.68629 6 10C6 13.3137 8.68629 16 12 16Z" fill="#004AAD" />
                </g>
                <defs>
                  <clipPath id="clip0_323_22">
                    <rect width="24" height="24" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </span>
            Counsellors
          </div>
          <div class="lyc-account-submenu d-flex flex-column gap-2">
            <?php
          if (is_user_logged_in()) {
          ?>
            <a class="dropdown-item" href="<?php echo site_url('volunteerarea'); ?>">Counsellors Area</a>
            <a class="dropdown-item" href="<?php echo site_url('my-account'); ?>">My-Account</a>
            <?php if( current_user_can('administrator') ) { ?>
            <!-- <a class="dropdown-item" href="<?php echo site_url('counsellors'); ?>">Counsellors</a> -->
            <?php } ?>
            <?php if( current_user_can('administrator') || current_user_can('um_counsellor') ) { ?>
            <a class="dropdown-item" href="<?php echo site_url('uploaded-documents'); ?>">Uploaded Documents</a>
            <?php } ?>
            <a class="dropdown-item" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
            <?php
            if( current_user_can('administrator') ) { $url = esc_url( admin_url() ); ?>
            <a class="dropdown-item" href="<?php echo $url; ?>">Dashboard</a>
            <?php } ?>
            <?php } else { ?>
            <a class="dropdown-item" href="<?php echo site_url('my-account'); ?>">Login</a>
            <a class="dropdown-item" href="<?php echo site_url('register'); ?>">Register</a>
            <?php } ?>
          </div>
        </div>
        <a href="<?php echo site_url('cart'); ?>" class="lyc-cart-btn btn btn-secondary align-items-center d-xxl-none d-xl-none d-lg-none d-md-none d-sm-none d-flex w-100 gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M4.00436 6.41686L0.761719 3.17422L2.17593 1.76001L5.41857 5.00265H20.6603C21.2126 5.00265 21.6603 5.45037 21.6603 6.00265C21.6603 6.09997 21.6461 6.19678 21.6182 6.29L19.2182 14.29C19.0913 14.713 18.7019 15.0027 18.2603 15.0027H6.00436V17.0027H17.0044V19.0027H5.00436C4.45207 19.0027 4.00436 18.5549 4.00436 18.0027V6.41686ZM6.00436 7.00265V13.0027H17.5163L19.3163 7.00265H6.00436ZM5.50436 23.0027C4.67593 23.0027 4.00436 22.3311 4.00436 21.5027C4.00436 20.6742 4.67593 20.0027 5.50436 20.0027C6.33279 20.0027 7.00436 20.6742 7.00436 21.5027C7.00436 22.3311 6.33279 23.0027 5.50436 23.0027ZM17.5044 23.0027C16.6759 23.0027 16.0044 22.3311 16.0044 21.5027C16.0044 20.6742 16.6759 20.0027 17.5044 20.0027C18.3328 20.0027 19.0044 20.6742 19.0044 21.5027C19.0044 22.3311 18.3328 23.0027 17.5044 23.0027Z"></path>
          </svg>
          <span>
            <?php echo WC()->cart->get_cart_contents_count() ?> items
          </span>
        </a>
      </div>
    </div>
    <!-- Overlay -->
    <div class="lyc-overlay"></div>
    <!-- Header -->
    <div class="lyc-top-header d-flex justify-content-between align-items-center bg-primary">
      <?php
    $custom_logo_id = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
    ?>
      <a href="<?php echo site_url('home'); ?>" title="<?php bloginfo('name'); ?>" class="lyc-header-nav-logo p-2">
        <img src="<?php echo $image[0]; ?>" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" class="img-fluid" width="<?php echo $image[1]; ?>" height="<?php echo $image[1]; ?>">
      </a>
      <div class="lyc-top-header-action d-flex align-items-center">
        <div class="lyc-top-header-action-content d-flex justify-content-center align-items-center">
          <!-- search -->
          <?php
        $twentytwentyone_unique_id = wp_unique_id( 'search-form-' );

        $twentytwentyone_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
        ?>
          <form class="lyc-search d-xxl-flex d-xl-flex d-lg-flex d-md-none d-sm-none d-none" role="search" <?php echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <span class="d-flex align-items-center gap-2">
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 0C13.968 0 18 4.032 18 9C18 13.968 13.968 18 9 18C4.032 18 0 13.968 0 9C0 4.032 4.032 0 9 0ZM9 16C12.8675 16 16 12.8675 16 9C16 5.1325 12.8675 2 9 2C5.1325 2 2 5.1325 2 9C2 12.8675 5.1325 16 9 16ZM17.4853 16.0711L20.3137 18.8995L18.8995 20.3137L16.0711 17.4853L17.4853 16.0711Z" fill="white" fill-opacity="0.5" />
              </svg>
              <input type="text" id="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>" class="border-0" value="<?php echo get_search_query(); ?>" name="s" placeholder="Search"  autocomplete="off" required />
              <input type="submit" class="search-submit d-none" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwentyone' ); ?>" />
            </span>
          </form>
          <!-- <form action="" class="lyc-search d-xxl-flex d-xl-flex d-lg-flex d-md-none d-sm-none d-none">
            <span class="d-flex align-items-center gap-2">
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 0C13.968 0 18 4.032 18 9C18 13.968 13.968 18 9 18C4.032 18 0 13.968 0 9C0 4.032 4.032 0 9 0ZM9 16C12.8675 16 16 12.8675 16 9C16 5.1325 12.8675 2 9 2C5.1325 2 2 5.1325 2 9C2 12.8675 5.1325 16 9 16ZM17.4853 16.0711L20.3137 18.8995L18.8995 20.3137L16.0711 17.4853L17.4853 16.0711Z" fill="white" fill-opacity="0.5" />
              </svg>
              <input type="text" placeholder="Search" class="border-0" name="" id="">

            </span>
          </form> -->
          <!-- contact -->
          <a href="tel:+44 20 7157 9733" class="lyc-contact d-xxl-flex d-xl-flex d-lg-flex d-md-none d-sm-none d-none flex-column align-items-end gap-1">
            <span>Call Us</span>
            <p>+44 20 7157 9733</p>
          </a>
          <!-- login -->
          <div class="lyc-account d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-none d-none align-items-center gap-2 dropdown">
          <?php
            if (is_user_logged_in()) {
            ?>
            <a href="<?php echo site_url('volunteerarea'); ?>" class="dropdown-toggle d-flex gap-2 align-items-center" >
              <span class="bg-white d-flex align-items-center justify-content-center">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_323_22)">
                    <path d="M5 20H19V22H5V20ZM12 18C7.58172 18 4 14.4183 4 10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10C20 14.4183 16.4183 18 12 18ZM12 16C15.3137 16 18 13.3137 18 10C18 6.68629 15.3137 4 12 4C8.68629 4 6 6.68629 6 10C6 13.3137 8.68629 16 12 16Z" fill="#004AAD" />
                  </g>
                  <defs>
                    <clipPath id="clip0_323_22">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </span>
              Counsellors Area
            </a>
            <?php } else { ?>
              <a href="<?php echo site_url('my-account'); ?>" class="dropdown-toggle d-flex gap-2 align-items-center">
              <span class="bg-white d-flex align-items-center justify-content-center">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_323_22)">
                    <path d="M5 20H19V22H5V20ZM12 18C7.58172 18 4 14.4183 4 10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10C20 14.4183 16.4183 18 12 18ZM12 16C15.3137 16 18 13.3137 18 10C18 6.68629 15.3137 4 12 4C8.68629 4 6 6.68629 6 10C6 13.3137 8.68629 16 12 16Z" fill="#004AAD" />
                  </g>
                  <defs>
                    <clipPath id="clip0_323_22">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </span>
              Login
            </a>
            <?php } ?>
            <ul class="dropdown-menu">
              <?php
            if (is_user_logged_in()) {
            ?>
              <!-- <li><a class="dropdown-item" href="<?php echo site_url('volunteerarea'); ?>">Counsellors Area</a></li> -->
              <li><a class="dropdown-item" href="<?php echo site_url('my-account'); ?>">My Account</a></li>
              <?php if( current_user_can('administrator') ) { ?>
              <!-- <li><a class="dropdown-item" href="<?php echo site_url('counsellors'); ?>">Counsellors</a></li> -->
              <?php } ?>
              <?php if( current_user_can('administrator') || current_user_can('um_counsellor') ) { ?>
              <li><a class="dropdown-item" href="<?php echo site_url('uploaded-documents'); ?>">Uploaded Documents</a></li>
              <?php } ?>
              <?php
              if( current_user_can('administrator') ) { $url = esc_url( admin_url( ) ); ?>
              <li><a class="dropdown-item" href="<?php echo $url; ?>">Dashboard</a></li>
              <?php } ?>
              <li><a class="dropdown-item" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></li>
              <?php } else { ?>
              <!-- <li><a class="dropdown-item" href="<?php echo site_url('my-account'); ?>">Login</a></li> -->
              <li><a class="dropdown-item" href="<?php echo site_url('register'); ?>">Register</a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="lyc-header-btn d-flex align-items-center">
          <a href="<?php echo site_url('cart'); ?>" class="lyc-cart-btn btn btn-secondary align-items-center gap-2 d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-flex d-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M4.00436 6.41686L0.761719 3.17422L2.17593 1.76001L5.41857 5.00265H20.6603C21.2126 5.00265 21.6603 5.45037 21.6603 6.00265C21.6603 6.09997 21.6461 6.19678 21.6182 6.29L19.2182 14.29C19.0913 14.713 18.7019 15.0027 18.2603 15.0027H6.00436V17.0027H17.0044V19.0027H5.00436C4.45207 19.0027 4.00436 18.5549 4.00436 18.0027V6.41686ZM6.00436 7.00265V13.0027H17.5163L19.3163 7.00265H6.00436ZM5.50436 23.0027C4.67593 23.0027 4.00436 22.3311 4.00436 21.5027C4.00436 20.6742 4.67593 20.0027 5.50436 20.0027C6.33279 20.0027 7.00436 20.6742 7.00436 21.5027C7.00436 22.3311 6.33279 23.0027 5.50436 23.0027ZM17.5044 23.0027C16.6759 23.0027 16.0044 22.3311 16.0044 21.5027C16.0044 20.6742 16.6759 20.0027 17.5044 20.0027C18.3328 20.0027 19.0044 20.6742 19.0044 21.5027C19.0044 22.3311 18.3328 23.0027 17.5044 23.0027Z"></path>
            </svg>
            <span id="cart-count">
              <?php echo WC()->cart->get_cart_contents_count()  ?> items
            </span>
          </a>
          <!-- <p>Total Product Quantity: <span id="product-quantity"></span></p> -->
          <a href="#" class="btn btn-info lyc-drawer-menu-btn d-xxl-none d-xl-none d-lg-none d-md-flex d-sm-flex d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <header class="lyc-header bg-white d-xxl-block d-xl-block d-lg-block d-md-none d-sm-none d-none align-items-center">
      <div class="container">
        <?php
      echo wp_nav_menu(array(
        'container' => '',
        'menu'        => 'Main Menu',
        'menu_id'     => '',
        'menu_class'  => 'lyc-bottom-header-list',
        'fallback_cb' => false,
        'depth'       => 0,
      ));
      ?>
      </div>
    </header>
    <!-- Header -->

  <!-- <script>
      $(document).ready(function () {
            $('.dropdown').hover(function () {
                $(this).find('.dropdown-menu')
                   .stop(true, true).delay(100).fadeIn(200);
            }, function () {
                $(this).find('.dropdown-menu')
                  .stop(true, true).delay(100).fadeOut(200);
            });
        });
    </script> -->
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
  <section class="lyc-counsellors my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
    <div class="container">
      <div class="d-flex flex-column gap-3">
        <div class="lyc-counsellors-content-wrap grid">
          <?php

            /*$form_id = 1;
            $pagination_links = '';
            $page_size = 4;
            $current_page    = max( 1, $_REQUEST['pagenum'] );
            $offset   = ($current_page - 1) * $page_size;
            $sorting = [];
            $paging = ['offset' => $offset, 'page_size' => $page_size];
            $total_count = 0;
            //$search_criteria['field_filters'][] = array( 'key' => 'created_by', 'value' => get_current_user_id() );

            $search_criteria = array();
            $entries = GFAPI::get_entries( $form_id, $search_criteria, $sorting, $paging, $total_count);
            $total_pages = ceil( $total_count / $page_size );
            // Pagination Links
            if ( $total_pages > 1 ) {
            $pagination_links   = '<div class="pagination pull-right">';
            $pagination_links  .= paginate_links([
                        'base'      => @add_query_arg('pagenum','%#%'),
                        'format'    => '&pagenum=%#%',
                        'current'   => $current_page,
                        'total'     => $total_pages,
                        'prev_next' => false

                    ]);

            $pagination_links .= '</div>';

            }
            if ( !empty( $entries ) ) {
                foreach ( $entries as $entry ) {
                    $first = rgar( $entry, '3.3' );
                    $last = rgar( $entry, '3.6' );
                    $username = rgar( $entry, '1' );
                    $email = rgar( $entry, '4' );

                    $avatar = get_avatar($email, 200);*/
                   

                    $args = array(
                                'role'    => 'um_counsellor',
                                'orderby' => 'ID',
                                'order'   => 'DESC'
                            );
                            $entries = get_users( $args );
                            $total_users = count($entries);
                            foreach ( $entries as $entry ) {
                              $avatar = get_avatar($entry->user_email, 200);
                   ?>
          <div class="g-col-xxl-2 g-col-xl-3 g-col-lg-4 g-col-md-6 g-col-sm-12 g-col-12 lyc-counsellors-content-item d-flex flex-column">

            <?php echo $avatar; ?>
            <div class="lyc-counsellors-content-item-wrap">
              <h2><?php echo $entry->user_firstname ; ?> <?php echo $entry->user_lastname; ?></h2>
              <ul>
                <li class="d-flex align-items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C13.6418 20 15.1681 19.5054 16.4381 18.6571L17.5476 20.3214C15.9602 21.3818 14.0523 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12V13.5C22 15.433 20.433 17 18.5 17C17.2958 17 16.2336 16.3918 15.6038 15.4659C14.6942 16.4115 13.4158 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C13.1258 7 14.1647 7.37209 15.0005 8H17V13.5C17 14.3284 17.6716 15 18.5 15C19.3284 15 20 14.3284 20 13.5V12ZM12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9Z"></path>
                  </svg>
                  <p><?php echo $entry->user_login; ?></p>
                </li>
                <li class="d-flex align-items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z"></path>
                  </svg>
                  <p><?php echo $entry->user_email; ?></p>
                </li>
              </ul>
                              
            </div>
          </div>
          <?php } ?>

        </div>

        <div class="pagination">
          <?php echo $pagination_links;?>
        </div>
      </div>
    </div>
  </section>
</main>






<?php
get_footer();
?>
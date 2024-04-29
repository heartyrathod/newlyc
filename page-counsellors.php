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
      <div class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-end align-items-end">
          <form action="" method="GET" class="lyc-search1 d-flex justify-content-end align-items-end">
            <!-- <input type="text" placeholder="Search by city" class="border-0" name="city" id="city"> -->
            <div class="lyc-form-group d-flex justify-content-end gap-2">
              <select class="form-select " name="lyc_city" id="filter_city">
                <option value="">All</option>
                <?php

                        $cities = get_users(array(
                        'fields'  => 'ID',
                        'meta_key' => 'lyc_city',
                        'meta_query' => array(
                            'relation' => 'OR',
                            array(
                            'key' => 'lyc_city',
                            'compare' => 'EXISTS',
                            ),
                        ),
                        ));
                        $unique_cities = array();
                        foreach ($cities as $user_id) {
                        $city = get_user_meta($user_id, 'lyc_city', true);
                        if ($city && !in_array($city, $unique_cities)) {
                          $is_selected = '';
                          if(isset($_GET['lyc_city']) && $_GET['lyc_city']!='' && $_GET['lyc_city']==$city){
                            $is_selected = 'selected';
                          }
                            echo '<option value="' . $city . '" '.$is_selected.'>' . $city . '</option>';
                            $unique_cities[] = $city;
                        }
                        }
                        ?>
              </select>
              <!-- <button class="btn btn-primary" type="submit">Search</button> -->
            </div>

          </form>
        </div>

        <?php
            $user_id = get_current_user_id();


            $number = 12;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $offset = ($paged - 1) * $number;
            $args1 = array(
              'role'    => 'um_counsellor',
              'role__not_in' => array( 'staff' ),
              'orderby' => 'ID',
              'order'   => 'DESC',
          );
          if(isset($_GET['lyc_city']) && $_GET['lyc_city']!=''){
            $args1['meta_query'] = array(
                array(
                  'key'     => 'lyc_city',
                  'value'   => $_GET['lyc_city'],
                  'compare' => 'LIKE',
                ),
              );
          }
          $users    = get_users($args1);
          $total_users = count($users);
          $total_pages = intval($total_users / $number) + 1;

            $args = array(
              'role' => 'um_counsellor',
              'role__not_in' => array( 'staff' ),
              'orderby' => 'ID',
              'order' => 'DESC',
              'offset' => $offset,
              'number' => $number,
            );

            if (isset($_GET['lyc_city']) && !empty($_GET['lyc_city'])) {
              $args['meta_query'][] = array(
                array(
                  'key'     => 'lyc_city',
                  'value'   => $_GET['lyc_city'],
                  'compare' => 'LIKE',
                ),
              );
            }

            $entries = get_users( $args );
            $total_query = count($entries);


            if(count($entries)>0){ ?>
        <div class="lyc-counsellors-content-wrap grid">
          <?php

              foreach ( $entries as $entry ) {


                $avatarUrl = '';
                 $avatarArray = get_user_meta( $entry->ID, 'wp_user_avatars' , true );
                 if(isset($avatarArray) &&  isset($avatarArray['full']) && $avatarArray['full']!=null && $avatarArray['full']!='' ){
                  $avatarUrl = $avatarArray['full'];
                 } else {
                  $avatarUrl = get_avatar_url( $entry->ID,['size' => '500'] );
                 }

 ?>




          <div class="g-col-xxl-3 g-col-xl-3 g-col-lg-4 g-col-md-6 g-col-sm-12 g-col-12 lyc-counsellors-content-item d-flex flex-column justify-content-between">
            <div class="lyc-counsellors-content-item-wrap d-flex flex-column">
            <?php if ($entry->description != null && $entry->description != '') { ?>
              <a href="#" data-bs-toggle="modal" data-bs-target="#readmoreModal_<?php echo $entry->ID; ?>">
                <div class="lyc-counsellors-img ratio ratio-1x1">
                  <img src="<?php echo $avatarUrl; ?>" class="img-fluid" alt="<?php echo $entry->user_firstname ; ?>" title="<?php echo $entry->user_firstname ; ?>">
                </div>
              </a>
              <?php } else { ?>
               
                <div class="lyc-counsellors-img ratio ratio-1x1">
                  <img src="<?php echo $avatarUrl; ?>" class="img-fluid" alt="<?php echo $entry->user_firstname ; ?>" title="<?php echo $entry->user_firstname ; ?>">
                </div>
              
              <?php } ?>
              
              <div class="lyc-counsellors-content-item-wrap-body d-flex flex-column">
              <?php if ($entry->description != null && $entry->description != '') { ?>
                <a href="#" data-bs-toggle="modal" data-bs-target="#readmoreModal_<?php echo $entry->ID; ?>">
                  <h2><?php echo $entry->user_firstname ; ?> <?php echo $entry->user_lastname; ?></h2>
                </a>
                <?php } else { ?>
                  <h2><?php echo $entry->user_firstname ; ?> <?php echo $entry->user_lastname; ?></h2>
                  <?php } ?>

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
                  <?php if($entry->lyc_phone!=null && $entry->lyc_phone!=''){  ?>
                  <li class="d-flex align-items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z"></path>
                    </svg>
                    <p><?php echo $entry->lyc_phone; ?></p>
                  </li>
                  <?php } ?>
                  <?php if($entry->lyc_school!=null && $entry->lyc_school!=''){  ?>
                  <li class="d-flex align-items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M4 11.3333L0 9L12 2L24 9V17.5H22V10.1667L20 11.3333V18.0113L19.7774 18.2864C17.9457 20.5499 15.1418 22 12 22C8.85817 22 6.05429 20.5499 4.22263 18.2864L4 18.0113V11.3333ZM6 12.5V17.2917C7.46721 18.954 9.61112 20 12 20C14.3889 20 16.5328 18.954 18 17.2917V12.5L12 16L6 12.5ZM3.96927 9L12 13.6846L20.0307 9L12 4.31541L3.96927 9Z"></path>
                    </svg>
                    <p><?php echo $entry->lyc_school; ?></p>
                  </li>
                  <?php } ?>
                  <?php if($entry->lyc_city!=null && $entry->lyc_city!=''){  ?>
                  <li class="d-flex align-items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z"></path>
                    </svg>
                    <p><?php echo $entry->lyc_city ; ?></p>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>

            <?php if($entry->description!=null && $entry->description!=''){  ?>
            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#readmoreModal_<?php echo $entry->ID; ?>">
                    Read more
                </button> -->
            <!-- Readmore -->
            <div class="modal" id="readmoreModal_<?php echo $entry->ID; ?>" tabindex="-1" aria-labelledby="readmoreModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="readmoreModalLabel"><?php echo $entry->user_login; ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <h2>Description</h2>
                    <p><?php echo $entry->description; ?></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Of Readmore -->

            <?php } ?>
          </div>



          <?php } ?>
        </div>
        <?php  } else { ?>
              <h2 class="h4">No Counsellors found!</h2>
        <?php } ?>
        <?php
              if ($total_users > $total_query) {
                $link_unescaped = get_pagenum_link( 1, false ); // esc=false so parse_url works.
                $url_components = wp_parse_url( $link_unescaped );
                $add_args       = array();
                if ( isset( $url_components['query'] ) ) {
                    wp_parse_str( $url_components['query'], $add_args ); // $add_args is updated.
                }
              echo '<div id="pagination" class="clearfix">';
                $current_page = max(1, get_query_var('paged'));
                echo paginate_links(array(
                  'base'      => strtok( $link_unescaped, '?' ) . '%_%',
                  'format' => 'page/%#%/',
                  'current' => $current_page,
                  'total' => $total_pages,
                  'prev_next'    => false,
                  'type'         => 'list',
                  'add_args'  => $add_args,
                  ));
              echo '</div>';
                }
              ?>

      </div>
    </div>
  </section>
</main>






<?php
get_footer();
?>
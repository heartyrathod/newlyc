<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<section class="lyc-entry-header pt-xxl-5 pt-xl-4 pt-lg-3 pt-md-3 pt-sm-3 pt-3">
        <div class="container">
          <div class="lyc-entry-header-content d-flex flex-column gap-2 ps-xxl-4 ps-xl-4 ps-lg-4 ps-md-3 ps-sm-3 ps-3">
            <h1 class="mb-4">Page Not Found</h1>            
          </div>
        </div>
      </section>

	
	<section class="lyc-children-content my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
    <div class="container">
      <h2><?php esc_html_e( 'It looks like nothing was found at this location.', 'twentytwentyone' ); ?></h2>
	  <?php //get_search_form(); ?>
    </div>
  </section>

<?php
get_footer();

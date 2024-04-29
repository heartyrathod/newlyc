<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if ( have_posts() ) {
	?>
<section class="lyc-entry-header pt-xxl-5 pt-xl-4 pt-lg-3 pt-md-3 pt-sm-3 pt-3">
  <div class="container">
    <div class="lyc-entry-header-content d-flex flex-column gap-2 ps-xxl-4 ps-xl-4 ps-lg-4 ps-md-3 ps-sm-3 ps-3">
      <h1>
        <?php
				printf(
					/* translators: %s: Search term. */
					esc_html__( 'Results for "%s"', 'twentytwentyone' ),
					'' . esc_html( get_search_query() ) . ''
				);
				?>
      </h1>
      <!-- <h1>
        <?php echo $post->post_title; ?>
      </h1> -->
      <ul class="d-flex align-items-center gap-2 pb-3 ">

      </ul>
    </div>
  </div>
</section>
<!-- <header class="page-header alignwide">
  <h1 class="page-title">
    <?php
			printf(

				esc_html__( 'Results for "%s"', 'twentytwentyone' ),
				'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			);
			?>
  </h1>
</header> -->
<section class="lyc-about-after-banner my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
  <div class="container">
		<div class="lyc-service-search-result-wrap">
			<div class="search-result-count default-max-width">
			<?php
							printf(
								esc_html(

									_n(
										'We found %d result for your search.',
										'We found %d results for your search.',
										(int) $wp_query->found_posts,
										'twentytwentyone'
									)
								),
								(int) $wp_query->found_posts
							);
							?>
			</div>
		
    <!-- .search-result-count -->

    	<?php
				 //Start the Loop.
				while ( have_posts() ) {
					the_post();

					/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
				} // End the loop.

				// Previous/next page navigation.
				twenty_twenty_one_the_posts_navigation();

				// If no content, include the "No posts found" template.
			} else {
				get_template_part( 'template-parts/content/content-none' );
			}
			?>
 	</div>
	</div>
  </div>
  <?php
get_footer();
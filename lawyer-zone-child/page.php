<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */
get_header();
global $lawyer_zone_customizer_all_values;
$lawyer_zone_hide_front_page_header = $lawyer_zone_customizer_all_values['lawyer-zone-hide-front-page-header'];

if(
	( is_front_page() && 1 != $lawyer_zone_hide_front_page_header )
	|| !is_front_page()
){
	?>
	<div class="wrapper inner-main-title">
		<?php
		echo lawyer_zone_get_header_normal_image();
		?>
		<div class="container">
			<header class="entry-header init-animate">
				<?php
                the_title( '<h1 class="entry-title">', '</h1>' );
                if( 1 == $lawyer_zone_customizer_all_values['lawyer-zone-show-breadcrumb'] ){
					// lawyer_zone_breadcrumbs();
				}
				?>
			</header><!-- .entry-header -->
		</div>
	</div>
	<?php
}
?>
<div id="content" class="site-content container clearfix">
	<?php
	$sidebar_layout = lawyer_zone_sidebar_selection();
	if( 'both-sidebar' == $sidebar_layout ) {
		echo '<div id="primary-wrap" class="clearfix">';
	}
	?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php
	get_sidebar( 'left' );
	//get_sidebar();

	if( 'both-sidebar' == $sidebar_layout ) {
		echo '</div>';
	}
	?>
</div><!-- #content -->
<?php get_footer();
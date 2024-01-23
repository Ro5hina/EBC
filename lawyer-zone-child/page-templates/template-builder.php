<?php
/**
 * Template Name: AT Builder Page
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */
get_header();
?>
<div class="container">
    <?php
    while ( have_posts() ) : the_post();

        the_content();

    endwhile; // End of the loop.
    ?>
</div>
<?php
get_footer();
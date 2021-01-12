<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jeverly
 */

get_header();
?>

	<main id="primary" class="site-main">

        <div class="decor__wrap">
            <hr class="decor-hr">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/decor.png" alt="decor">
            <hr class="decor-hr">
        </div>

        <div class="content__wrap">
            <h2><?php the_field( 'head_text' ); ?></h2>
            <h3><?php the_field( 'sub_head' ); ?></h3>
        </div>

        <div class="slider__wrap">

            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </div>

        <div class="social__wrap">
            <a href="<?php the_field( 'instagram' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/instagram.png" alt="instagram"></a>
            <a href="<?php the_field( 'pinterest' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/pinterest.png" alt="pinterest"></a>
            <a href="<?php the_field( 'facebook' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/facebook.png" alt="facebook"></a>
        </div>

        <div class="bottom-block__wrap">
            <?php the_field( 'bottom_text' ); ?>
        </div>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

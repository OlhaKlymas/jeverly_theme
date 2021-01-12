<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jeverly
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="decor__wrap">
        <hr class="decor-hr">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/decor.png" alt="decor">
        <hr class="decor-hr">
    </div>

    <?php
        the_title( '<h2 class="title-full-post">', '</h2>' );
    ?>


    <?php jeverly_post_thumbnail(); ?>

	<header class="entry-header">
		<?php

        if ( 'post' === get_post_type() ) :
            ?>
            <div class="entry-meta">
                <?php
                jeverly_posted_on();
                jeverly_posted_by();
                ?>
            </div><!-- .entry-meta -->
        <?php endif;

		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>

	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'jeverly' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jeverly' ),
				'after'  => '</div>',
			)
		);
		'<a href="' . get_permalink() . '" class="read-more">read-more</a>'?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

        <a href="<?php echo get_permalink(); ?>">Read  more</a>

<!--		--><?php //jeverly_entry_footer(); ?>

	</footer>


    <hr class="post-hr">
    <hr class="post-hr">
</article><!-- #post-<?php the_ID(); ?> -->

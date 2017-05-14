<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--	--><?php
//		// Post thumbnail.
//		twentyfifteen_post_thumbnail();
//	?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
<!--    </div>-->
<!--    </div>-->
    <!--should be outside of container and full width-->
    <div class="featured-image-internal">
<!--        <img src="--><?php //bloginfo('template_url'); ?><!--/img/featured-img-internal.jpg" alt="with your help we save children and improve lives"/>-->
        <?php
        // Post thumbnail.
        the_post_thumbnail('full');
//        the_post_thumbnail('full');
        ?>
    </div>
    <!--start container after this -->
<!--    <div class="container">-->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->

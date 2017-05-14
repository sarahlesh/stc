<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main single-blog" role="main">

		<?php if ( have_posts() ) : ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<header>
					<h1 class="page-title screen-reader-text"><?php the_title(); ?></h1>
					<div class="single-blog-meta">
						<p>
						<a href="<?php echo get_home_url() ?>/blog" class="meta-info blog-listings"><img src="<?php echo get_template_directory_uri() ?>/img/dark-green-arrow.png" alt="back arrow"> Back to Blog Listing Page</a>
						|
						<span class="meta-info single-author-meta"><?php the_author_posts_link(); ?></span>
						|
						<span class="meta-info single-meta-date"><?php the_date() ?></span>

					</div>
				</header>
				<div class="flex-container">
					<div class="blog-posts">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php
						if ( has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail('blogSingle') ?>
						<?php }
						else{ ?>
							<!-- display nothing -->
						<?php }
						?>
						<div class="blog-single-content">
							
							<?php the_content() ?>
							<div class="sincerely">
							<?php $signoff = get_field( "sign_off" );

							if( $signoff ) {
							$author_id = get_the_author_meta('ID'); 
								?>
							    
							<?php echo get_avatar( $author_id); ?>
							    <p class="signoff"><?php echo $signoff ?></p>

							<?php }
							?>
							<p class="author"><?php 
							the_author() ?></p>
							<p><?php
								$author_id = get_the_author_meta('ID');
							 the_field('job_title', "user_{$author_id}"); ?></p>
							</div>
						</div>
					</article><!-- #post-## -->
					</a>
				<?php endwhile; endif; ?>
			</div>
			<div class="blog-sidebar">
				<?php dynamic_sidebar( 'sidebar-1' ); ?> 
			</div>
			</div>
			<?php 

			$prevPost = get_previous_post(true);

			$nextPost = get_next_post(true);

			$nextthumbnail = get_the_post_thumbnail($nextPost->ID);

			$prevthumbnail = get_the_post_thumbnail_url($prevPost->ID);

			$nextthumbnail = get_the_post_thumbnail_url($nextPost->ID);

			 ?>
			<div class="flex-container">
				<div class="prev-post next-prev-posts" style="background-image: url(<?php echo $prevthumbnail ?>)">
				<?php previous_post_link('%link',"<div class='prev-next-content'><h3>Previous Post</h3><p>%title<p></div>", TRUE);?>
				</div>
				<div class="next-post next-prev-posts" style="background-image: url(<?php echo $nextthumbnail ?>)">
				<?php next_post_link('%link',"<div class='prev-next-content'><h3>Next Post</h3><p>%title<p></div>", TRUE);?>
				</div>
			</div>
		<?php endif;
		?>

		<?php echo do_shortcode('[fbcomments url="" count="off" num="5" countmsg="wonderful comments!"]'); ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>

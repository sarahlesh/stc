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
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					<p>Learn more about Save The Children’s field work and its life-changing impact on those in need.</p>
				</header>
			<?php endif; ?>
			<div class="flex-container">
				<div class="blog-posts flex-container">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php
						if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink() ?>" class="post-link">
							<div class="post-image" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);"></div>
							</a>
						<?php }
						else{ ?>
							<a href="<?php the_permalink() ?>" class="post-link">
							<div class="post-image" style="background-image: url(<?php echo home_url() ?>/wp-content/themes/2015_save_the_children/img/their-story.jpg)"></div>
							</a>
						<?php }
						?>
						<div class="blog-archive-post-content">
							<a href="<?php the_permalink() ?>" class="post-link">
							<h2><?php the_title() ?></h2>
							</a>
							<?php echo the_excerpt() ?>
							<div class="meta">
								<span class="meta-item"><?php the_author() ?></span> | <span class="meta-item"><?php the_date() ?></span>
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

		<? endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_footer(); ?>

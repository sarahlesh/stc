<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="entry-content">
<!--        --><?php //get_template_part( 'content-career', get_post_format() ); ?>
        <h2><?php the_title();?></h2>
        <div><?php the_field('content');?></div>
        <div><?php the_content() ;?></div>
        <?php
        if ( get_field('add_file') ) { ?>
            <div class="french-container optional-link">
                <a href="<?php the_field('add_file');?>" target="_blank">View Document</a>
            </div>
        <?php }
        ?>
        <div class="view-all"><a href="<?php echo esc_url( home_url( '/careers' ) ); ?>">View All</a></div>
        </div>
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>

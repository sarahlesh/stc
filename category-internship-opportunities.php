<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <header class="entry-header">
            <h1 class="entry-title">Internship Opportunities</h1>
        </header>
        <?php>
        $cat_id = 6;
        //            $cat_id = get_cat_ID('canadian-opportunities');
        $args = array('post_type' => 'career','cat'=>$cat_id);
        $posts = new WP_Query( $args );
        ?>

        <?php

        if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post();

            get_template_part( 'content-career', get_post_format() ); ?>

            <!--        <div class="test"> --><?php //the_title();?><!-- </div>-->
            <?php

            ?>



        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <!--        --><?php //print_r($posts);?>
        <?php endif; ?>

    </main><!-- .site-main -->
</section><!-- .content-area -->

<?php get_footer(); ?>

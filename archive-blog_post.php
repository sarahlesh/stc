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

        <?php if ( have_posts() ) : ?>



            <header class="page-header">
                <!--                --><?php
                ////                the_archive_title( '<h1 class="page-title">', '</h1>' );
                ////                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                //
                //                ?>
                <h1 class="page-title">Voices From the Field</h1>

            </header><!-- .page-header -->

            <?php
            // Start the Loop.
            while ( have_posts() ) : the_post(); ?>



                <article id="post-<?php the_ID(); ?>" <?php post_class("archive-blog cpt-archive"); ?>>
                    <?php
                    // Post thumbnail.
                    twentyfifteen_post_thumbnail();


                    ?>
                <div class="header-container overflow">
                    <header class="entry-header col-lg-10 col-md-10 col-sm-6 col-xs-6">
                        <?php
                        if ( is_single() ) :

                            the_title( '<h1 class="entry-title">', '</h1>' );
                        else :
                            the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                        endif;
                        ?>
                        <div class="the-date"><p><?php echo the_field('date'); ?></p></div>


                    </header><!-- .entry-header-->
                    <div class="blog-thumb col-lg-2 col-md-2 col-sm-6 col-xs-6">
                        <img src="<?php the_field('post_thumbnail'); ?>" alt="autoalt" height="100px"/>
                    </div>
</div>

                    <div class="entry-content">
                        <?php
                        /* translators: %s: Name of current post */
                        the_content( sprintf(
                            __( 'Continue reading %s', 'twentyfifteen' ),
                            the_title( '<span class="screen-reader-text">', '</span>', false )
                        ) );

                        wp_link_pages( array(
                            'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
                            'after'       => '</div>',
                            'link_before' => '<span>',
                            'link_after'  => '</span>',
                            'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
                            'separator'   => '<span class="screen-reader-text">, </span>',
                        ) );
                        ?>
<!--                        <div>-->
                            <div class="col-lg-9 post-author"><p><?php the_field( "author" );?></p></div>
<!--                        </div>-->

                    </div><!-- .entry-content -->
                    <?php
                    // Author bio.
                    if ( is_single() && get_the_author_meta( 'description' ) ) :
                        get_template_part( 'author-bio' );
                    endif;
                    ?>
                    <footer class="entry-footer">
                        <?php twentyfifteen_entry_meta(); ?>
                        <?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-## -->


            <?php endwhile;


            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous Page', 'twentyfifteen' ),
                'next_text'          => __( 'Next page', 'twentyfifteen' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
            ) );

        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'content', 'none' );

        endif;
        ?>

    </main><!-- .site-main -->
</section><!-- .content-area -->

<?php get_footer(); ?>

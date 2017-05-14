<?php
/**
 * The template for displaying news pages
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
                //                ?>
                <h1 class="page-title">News</h1>
                <p>Media Contacts: Katharine Harris, National Senior Manager, Communications, PR & Engagement. <br>
                <p><a href="tel:+1647-973-1185">Tel: 1-647-973-1185</a></p>
                <p><a href="tel:+1-416-221-5501,295">1-416-221-5501 Ext. 295</a></p>
                <p><a href="mailto:kharris@savethechildren.ca">Email: kharris@savethechildren.ca</a></p>
            </header><!-- .page-header -->
            <?php
            // Start the Loop.
            while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class("archive-page articles-archive archive-article cpt-archive"); ?>>
                    <?php
                    // Post thumbnail.
                    twentyfifteen_post_thumbnail();
                    ?>
                    <header class="entry-header ">
                        <?php
                        if ( is_single() ) :

                            the_title( '<h1 class="entry-title">', '</h1>' );
                        else :
                            the_title( sprintf( '<h2 class="entry-title col-lg-10"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                        endif;
                        ?>
                        <div class="col-lg-2 the-date"><p><?php echo the_field('Date'); ?></p></div>

                    </header><!-- .entry-header-->
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
                        <div>
                            <div class="col-lg-9"><span><a href="<?php echo the_field('publication_doc'); ?>"><?php the_field( "title" );?></a></span><span class="date"><?php the_field('date')?></span></div>
                        </div>
                        <hr>

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
                'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                'next_text'          => __( 'Next page', 'twentyfifteen' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
            ) );
        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'content', 'none' );
        endif;
        ?>
        <div>
            <a class="red-action" href="http://www.savethechildren.ca/newsroom" target="_blank">View Older Stories</a>
        </div>
    </main><!-- .site-main -->
</section><!-- .content-area -->

<?php get_footer(); ?>

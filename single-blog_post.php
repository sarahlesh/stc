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
        <?php
        /**
         * The default template for displaying content
         *
         * Used for both single and index/archive/search.
         *
         * @package WordPress
         * @subpackage Twenty_Fifteen
         * @since Twenty Fifteen 1.0
         */
        ?>

        <article id="post-<?php the_ID(); ?> "<?php post_class('single-blog'); ?>>
            <?php
            // Post thumbnail.
            twentyfifteen_post_thumbnail();


            ?>

            <header class="entry-header overflow">
                <?php
                if ( is_single() ) :

                    the_title( '<h1 class="entry-title">', '</h1>' );

                else :
                    the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                endif;
                ?>
                <div class="entry-header-details overflow">
                    <div class="col-lg-9 post-date"><p>Published on: <?php the_field( "date" );?></p></div>
                    <div class="col-lg-9 post-author"><p>Written by: <?php echo the_field( "author" );?></p></div>
                </div>
            </header><!-- .entry-header -->
            <!--            <div><p>--><?php //the_field('Date');  ?><!--</p></div>-->

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

                <!--                <div class="post-type-title"><h2>--><?php //the_field( "title" );  ?><!--</h2></div>-->

                <!--                <div><img src= alt=""/> publication_thumbnail</div>-->

                <!--                <img src="--><?php //the_field('attachment'); ?><!--" alt="STCC logo" height="100px"/>-->
                <div><?php the_field('content');?></div>

                <!--                <div>--><?php //the_field('taxonony');?><!--</div>-->
                <?php

                $terms = get_field('taxonomy');

                if( $terms ): ?>
                    <ul>
                        <?php foreach( $terms as $term ): ?>

                            <h2><?php echo $term->name; ?></h2>
                            <p><?php echo $term->description; ?></p>
                            <a href="<?php echo get_term_link( $term ); ?>">View all '<?php echo $term->name; ?>' posts</a>

                        <?php endforeach; ?>

                    </ul>
                <?php endif; ?>

                <div class="view-all red-action"><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">View all Blog Posts</a></div>

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

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>

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

        <article id="post-<?php the_ID(); ?> "<?php post_class('single-article'); ?>>
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
                <div class="the-date"><p><?php the_field('Date');  ?></p></div>
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
                <?php the_field('content') ;?>
                <?php the_content() ;?>

                <?php
                $terms = get_field('taxonomy');
                if( $terms ): ?>
                    <ul>
                        <?php foreach( $terms as $term ): ?>
                            <h2><?php echo $term->name; ?></h2>
                            <p><?php echo $term->description; ?></p>
                            <a class="red-action" href="<?php echo get_term_link( $term ); ?>">View all '<?php echo $term->name; ?>' posts</a>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div class="single-article-contact">
                    <p>
                        For additional information, please contact:</p>
                    <p class="news-contact-name"><?php the_field('contact_name')?><span class="person-title"></p>
                        <p class="news-contact-numbers"><span class="tel-1"><a href="tel:+<?php echo the_field('contact_number1')?>"><?php the_field('contact_number1')?></a></p>
                        <p class="tel-2"><a href="tel:+<?php echo the_field('contact_number_2')?>"><?php the_field('contact_number_2')?></a></p>
                    </p>
                    <p class="news-email-address"><a href="mailto:kharris@savethechildren.ca"><?php the_field('contact_email')?></a></p>
                    <p class="news-about">
                        <span class="about-title">About Save the Children</span>
                    Save the Children is the world’s leading independent organization for children, delivering programs and improving children’s lives in more than 120 countries worldwide. We save children’s lives. We fight for their rights. We help them fulfil their potential. We believe that all children have the right to survive, learn, and be protected, and we will do whatever it takes to reach every last child. Our programs reached more than 157 million children in 2016.
                        Learn more here: <a href="http://www.savethechildren.ca">www.savethechildren.ca</a> or  <a href="http://www.twitter.com/savechildrencan">follow us on Twitter</a>,  <a href="http:/www.facebook.com/savethechildren.ca">Facebook</a> and <a href="http://www.instagram.com/savethechildrencanada">Instagram @savechildrencanada</a>

                </div>
                <a class="red-action" href="<?php echo esc_url( home_url( '/news' ) ); ?>">View All News</a>
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

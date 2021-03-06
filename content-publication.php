
<article id="post-<?php the_ID(); ?>" <?php post_class('publication-single'); ?>>
    <?php
    // Post thumbnail.
    twentyfifteen_post_thumbnail();
    ?>

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

        <div class="post-type-title"><h2><?php the_field( "title" );  ?></h2></div>
        <div><?php the_field( "publication_url" );  ?></div>
        <!--                <div><img src= alt=""/> publication_thumbnail</div>-->
        <img src="<?php the_field('publication_thumbnail'); ?>" alt="STCC logo" height="100px"/>
        <div class="view-all"><a href="<?php echo esc_url( home_url( '/reports-and-briefings/' ) ); ?>">View All</div>

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

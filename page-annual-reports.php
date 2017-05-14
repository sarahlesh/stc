<?php
/**
/* Template Name: Annual Reports */


get_header(); ?>
<?php get_template_part( 'publications_header' ); ?>
            <?php
            // args
            $args = array(
                'numberposts'	=> -1,
                'post_type'		=> 'publication',
                'meta_key'		=> 'type',
                'meta_value'	=> 'Annual Reports',
                'posts_per_page' => -1
            );            // query
            $the_query = new WP_Query( $args );
            $tags = get_tags();
            $html = '<div class="post_tags container">';
            $tag_link = get_tag_link( $tag->term_id );
            ?>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php
                    // Include the page content template.
                    ?>
                    <div class="overflow publications-item-container">
                        <div class="publications-thumb col-lg-2 col-md-2 col-sm-3" >
                            <a href="<?php echo the_field('publication_doc'); ?>" target="_blank">
                                <img src="<?php the_field('publication_thumbnail'); ?>" alt="STCC logo" height="300px"/>
                            </a>
                        </div>
                        <div class="publications-title col-lg-9 col-md-9 col-sm-9"><span><a href="<?php echo the_field('publication_doc'); ?>" target="_blank">
                                    <?php the_field( "title" );?></a>
                            </span>
                            <span class="date"><?php the_field( 'date' )?></span>
                            <?php
                            if ( get_field('french') ) { ?>
                                <div class="french-container optional-link">
                                    <a href="<?php echo the_field('french'); ?>" target="_blank">French</a>
                                </div>
                            <?php }
                            ?>
                            <?php
                            if ( get_field('detailed_financial_statement') ) { ?>
                                <div class="french-container optional-link">
                                    <a href="<?php echo the_field('detailed_financial_statement'); ?>" target="_blank">Detailed Financial Statements <?php echo the_field('the date')?></a>
                                </div>
                            <?php }
                            ?>
                            <?php
                            if ( get_field('executive_summary') ) { ?>
                                <div class="french-container optional-link">
                                    <a href="<?php echo the_field('executive_summary'); ?>" target="_blank">Executive Summary <?php echo the_field('the date')?></a>
                                </div>
                            <?php }
                            ?>
                            <?php
                            if ( get_field('spanish') ) { ?>
                                <div class="french-container optional-link">
                                    <a href="<?php echo the_field('spanish'); ?>" target="_blank">Spanish</a>
                                </div>
                            <?php }
                            ?>
                            <?php
                            if ( get_field('multi-langauge') ) { ?>
                                <div class="french-container optional-link">
                                    <a href="<?php echo the_field('multi-langauge'); ?>" target="_blank">Multi-langauge</a>
                                </div>
                            <?php }
                            ?>
                        </div>


                    </div>

                    <!--                    --><?php

                endwhile; ?>

<a class="red-action" href="http://www.savethechildren.ca/publications" target="_blank">View Older Publications</a>

<!--                <div class="more-details"><a class="red-action" href="http://savethechildren.ca/publications#ARs">Click here to view older Annual Reports</a></div>-->
<!--            --><?php //endif; ?>
            <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
        </main><!-- .site-main -->
    </div><!-- .content-area -->
</div>
<?php get_footer(); ?>




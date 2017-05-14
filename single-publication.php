<?php
/**
/* Template Name: Reports and Briefings */


get_header(); ?>

<!--<div class="red-header-section">-->
<!--    <h2>Working to Improve lives For Children Everywhere</h2>-->
<!--</div>-->
<?php get_template_part( 'publications_header' ); ?>
<?php
// args
$args = array(
    'numberposts'	=> -1,
    'post_type'		=> 'publication',
    'meta_key'		=> 'type',
    'meta_value'	=> 'Reports and Briefings',
    'posts_per_page' => -1
//                'tag_id' => $id

);
// query
$the_query = new WP_Query( $args );
$tags = get_tags();
$html = '<div class="post_tags container">';
$tag_link = get_tag_link( $tag->term_id );
?>
<?php if( $the_query->have_posts() ): ?>
    <?php $tags = get_tags();
    if ($tags) {
        echo $html;
        foreach ($tags as $tag) {
            echo '
<div class="tag-item">
<a class="tag-filter" data="' .$tag->slug. '" href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'
</a>
</div>';
            $html .= '</div>';
        }
        echo '</div>';
    }?>

    <div class="publication-posts-outer">
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php
            $classes = '';
            foreach (get_the_tags() as $tag){
                $classes = $classes . ' tag-' . $tag->slug;
            }
            ?>
            <div class="overflow publications-item-container tag-has-no-tag <?php echo $classes ?>">
                <div class="publications-thumb col-lg-2 col-md-2 col-sm-3">
                    <a href="<?php echo the_field('publication_doc'); ?>">
                        <img src="<?php the_field('publication_thumbnail'); ?>" alt="STCC logo" height="300px"/>
                    </a>
                    <!--                            <p class="publication-type">Type: --><?php //the_field('type');?><!--</p>-->
                </div>
                <div class="publications-title col-lg-9 col-md-9 col-sm-9"><span><a href="<?php echo the_field('publication_doc'); ?>"><?php the_field( "title" );?></a></span><span class="date"><?php the_field( 'date' )?></span></div>
            </div>
            <!--                    --><?php
        endwhile; ?>
    </div>
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
</main><!-- .site-main -->
</div><!-- .content-area -->
</div>
<?php get_footer(); ?>




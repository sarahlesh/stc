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

        <header class="page-header">
            <!--                --><?php
            //                the_archive_title( '<h1 class="page-title">', '</h1>' );
            //                the_archive_description( '<div class="taxonomy-description">', '</div>' );
            //                ?>
            <h1 class="page-title">Publications</h1>
            <p>Our objective at Save the Children is to create positive change in Children’s lives, in Canada and around the world. Our publications can help you stay informed on the current challenges and issues facing children, and advise on how you can help make a difference.</p>
        </header><!-- .page-header -->

        <?php

        $cat_args=array(
            'orderby' => 'name',
            'order' => 'ASC'
        );
        $categories=get_categories($cat_args);
        foreach($categories as $category) {
            $args=array(
                'showposts' => 25,
                'category__in' => array($category->term_id),
                'post_type' => array('publication')
            );
            $posts=get_posts($args);
            if ($posts) {
                ?>
                <h3 class="page-title"><?php echo $category->name ?></h3>
                <?php
                foreach($posts as $post) {
                    setup_postdata($post); ?>
                    <div class="overflow publications-item-container">
                        <div class="publications-thumb col-lg-2 col-md-2 col-sm-3" >
                            <a href="<?php echo the_field('publication_doc'); ?>">
                                <img src="<?php the_field('publication_thumbnail'); ?>" alt="STCC logo" height="300px"/>
                            </a>
                            <p class="publication-type">Type: <?php the_field('type');?></p>
                        </div>
                        <div class="publications-title col-lg-9 col-md-9 col-sm-9"><span><a href="<?php echo the_field('publication_doc'); ?>"><?php the_field( "title" );?></a></span><span class="date"><?php the_field( 'date' )?></span></div>
                    </div>
                <?php
                }
            }
        }
        ?>
    </main><!-- .site-main -->
</section><!-- .content-area -->

<?php get_footer(); ?>

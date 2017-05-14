<?php
/**
Template Name: Search Page
 */

get_header(); ?>

<!--<div class="red-header-section">-->
<!--    <h2>Working to Improve lives For Children Everywhere</h2>-->
<!--</div>-->
<div class="container main-outer">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php

                // Include the page content template.

                get_template_part( 'content', 'page' );
            get_search_form();

         ?>

        </main><!-- .site-main -->
    </div><!-- .content-area -->
</div>
<?php get_footer(); ?>

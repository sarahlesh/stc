<?php

/**
 * Template Name: Front Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
</div>
<div>


    </div>

<div class="slider-container">

<!--slider goes here-->
<!--    --><?php //layerslider(1) ?>
    <?php layerslider('homepage_slider') ?>
    <!--<img src="--><?php //bloginfo('template_url'); ?><!--/img/slider-img1.jpg" alt="with your help we save children and improve lives"/>-->
</div>
    <div id="primary" class="content-area homepage-container">
        <?php get_template_part( 'action-section' ); ?>
    </div>
</div>
<section class="main-content-area save-the-children">
    <div class="main-content-area-inner container">
        <h1 class="red-title">Save <span class="no-caps">the</span> Children</h1>
        <p>Working towards a world where every child attains the right to survival, protection, development and participation.</p>
        <p>Inspiring breakthroughs in the way the world treats children to achieve immediate and lasting change.</p>
    </div>
</section>
<section class="you-can-help max-width overflow">
    <div class="be-a-lifeline you-can-help-link col-lg-6 col-md-6 col-sm-6 col-sm-12">
        <div class="link-details">

        <h2><a href="https://support.savethechildren.ca/givemonthly" target="_blank">Be a lifeline</a></h2>
        <p><a href="https://support.savethechildren.ca/givemonthly" target="_blank">Lift up children struggling for survival</a></p>

        </div>
    </div>
    <div class="their-story you-can-help-link col-lg-6 col-md-6 col-sm-6 col-sm-12">
        <div class="link-details">
        <h2><a href="http://youthinaction.savethechildren.ca/" target="_blank">Creating Change</a></h2>
            <p><a href="<?php echo esc_url( home_url( '/youth-action/' ) ); ?>">You can help youth in action</a></p>
        </div>
    </div>
</section>
<!-- .content-area -->



<?php get_footer(); ?>

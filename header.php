<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/5.5.2/core/css/jquery.mmenu.all.css" />
    <link href="//designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css" rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-96x96.png" />
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=949919905097521";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body <?php body_class('yd-stcc'); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
    <header class="main-site-header-outer">
    <nav class="header-container-outer">
        <div class="header-container-inner container">

        <ul class="top-black-header site-nav-black">
            <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
            <li><a href="<?php echo esc_url( home_url( '/news' ) ); ?>">News</a></li>
            <li><a href="<?php echo esc_url( home_url('/publications'));?>">Publications</a></li>
            <li><a href="<?php echo esc_url( home_url('/our-partners/'));?>">Our Partners</a></li>
            <li><a href="<?php echo esc_url( home_url( '/careers' ) ); ?>">Careers</a></li>
            <li><a class="last" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
        </ul>
            <div class="nav-header-search">
                <div class="search-button">
                    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
                    <!--                    <button type="submit" value="GO">GO</button>-->
                </div>
            </div>
    </nav><!-- .site-header -->
    <div class="primary-site-header ">
        <div class="primary-header-inner container">
            <a href='#my-menu' id="mobile-menu-btn" class="col-xs-2"><span class="glyphicon glyphicon-menu-hamburger col-sm-1 col-xs-6"></span></a>
            <div class="mobile-donate-button col-sm-3 col-xs-3"><a href="https://www.savethechildren.ca/DonatetoChildren">Donate</a></div>
            <div class="logo-container col-xs-12 col-sm-8 col-md-6 col-lg-6">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/stcc-logo.png" alt="STCC logo" height="100px"/></a>
        </div>
<!--social nav here-->

            </div>
        </div>
<!--        </a>-->
        <div id="main-nav" >
            <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => 'main-site-navigation container', 'menu_class'=> 'menu main-site-nav container')); ?>
        </div>
        </header>
</div>
	<div id="content" class="container">

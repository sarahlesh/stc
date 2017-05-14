<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
</div><!-- .site-content -->

<?php if (!( is_home()) && ! is_front_page()) : ?><?php get_template_part( 'action-section' ); ?>

     <?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
            <section class="whats-happening">
                <div class="container">
                    <h2>What's Happening</h2>
                    <div class="info-div col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="canadian-programs img-link ">
                        </div>
                        <div class="whats-happening-details">
                            <h3>National Indigenous Programs</h3>
<p>Save the Children has ambitious plans for its Indigenous programs. We believe Indigenous children have a right to develop to their full potential as valued and engaged citizens within their Nations and Canada, where their culture and identity are celebrated.</p>                        </div>

                        <div class="more-details">
                            <a href="<?php echo esc_url( home_url( '/national-indigenous-programs/' ) ); ?>">Read More </a>
                        </div>
                    </div>
                    <div class="info-div col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="work-around-the-globe img-link ">
                            </div>
                            <div class="whats-happening-details">
                                <h3>International Programs</h3>
<p>We work worldwide to deliver programs and advocate for better practices and policies to fulfill children’s rights. We strive to ensure that children’s voices are heard, particularly children who are marginalized, living in poverty or struggling to survive in the aftermath of violence or disasters. Learn more about our international work.
</p>                            </div>

                        <div class="more-details">
                            <a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>">Read More </a>
                        </div>
                    </div>
                    <div class="info-div col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="news-and-views img-link">
                        </div>
                        <div class="whats-happening-details">
                            <h3>News</h3>
<p>Read the latest press releases from Save the Children. Learn about the organization’s programs, impact, issues and more. </p>                        </div>

                        <div class="more-details">
<!--                            <li><a href="--><?php //echo esc_url( home_url( '/news' ) ); ?><!--">Media</a></li>-->
                            <a href="<?php echo esc_url( home_url( '/news' ) ); ?>">See all News</a>
                        </div>
                    </div>
            </section>
            <section class="footer-links footer-links-outer">
                <div class="footer-links-inner container">
                    <div class="accountability-row row">
                    <div class="container accountability">

                        <div class="where-money-goes-container accountability-img col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h3>Where your money goes</h3>
                            <div class="row outer">
                                <div class="inner-container">
                            <a href="http://www.savethechildren.ca/wp-content/uploads/2016/03/2014-Annual-Report-1.pdf" target="_blank"><img class="col-lg-6" src="<?php bloginfo('template_url'); ?>/img/where-money-goes.jpg" alt="where money goes graph"/></a>
                            <div class="chart-legend col-lg-6">
                                <span class="square square-programs"></span><p class="programs">Programs 92.5%</p>
                                <span class="square square-fundraising"></span><p class="fundraising">Fundraising 4%</p>
                                <span class="square square-administration"></span><p class="administration">Administration 3.5%</p>
                            </div>
                            </div>
                                </div>
                        </div>
                        <div class="imagine-canada-container accountability-img col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h3>An Organization You Can Trust</h3>
                           <a href="http://www.imaginecanada.ca/" target="_blank"><img class="ic-logo"src="<?php bloginfo('template_url'); ?>/img/imagine-canada.jpg" alt="imagine canada logo" height="100px"/></a>
                           <a href="http://humanitariancoalition.ca/" target="_blank"><img class="hc-logo"src="<?php bloginfo('template_url'); ?>/img/hc-logo-670px.png" alt="where money goes graph"/></a>
                        </div>
                    </div>
                        </div>
                    </div>
                <div class="row blurb-row-outer max-width overflow">
                    <div class="blurb-footer container">
                        <p>Save the Children is the world’s leading independent organization for children.</p>
                        <p>We are committed to ensuring children realize the rights to which they are entitled under the UN Convention on the Rights of Children.</p>
                    </div>
                </div>
        </div>
                        </div>
                    </div>
                    </div>
<div class="row footer-nav-container-outer">

                <div class="footer-navigation-menu container">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => 'main-site-navigation container', 'menu_class'=> 'menu main-site-nav container')); ?>

                </div>
</div>
        <div class="row address-section max-width overflow">
            <div class="footer-address container">
                <p>Save the Children Canada | 4141 Yonge Street, Suite 300, Toronto, ON M2P 2A8 | <span class="phone-number"><a href="tel:+18006685036">1-800-668-5036 </a></span>| Charitable #: 10795 8621 RR0001</p>
               <div class="footer-black-nav">
                <ul class="site-nav-black">
                    <li><a href="<?php echo esc_url( home_url( '/news' ) ); ?>">Media</a></li>
                    <li><a href="<?php echo esc_url( home_url('//privacy-policy'));?>">Privacy Policy</a></li>
                    <li><a href="<?php echo esc_url( home_url('/our-partners/'));?>">Our Partners</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/careers' ) ); ?>">Careers</a></li>
                    <li><a class="last" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us</a></li>
                </ul>

                   </div>
<p class="yd-tag">Built With <i class="fa fa-heart" aria-hidden="true"></i> by <a href="http://www.wellspringpro.com">Wellspring Productions Inc.</a></p>
            </div>
        </div>
                </div>
            </section>
		</div><!-- .site-info -->
        </div>
	</footer><!-- .site-footer -->
</div><!-- .site -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/5.5.2/core/js/jquery.mmenu.min.all.js"></script>


<script>
//add active class to links depending on url
$(function() {
    var pgurl = window.location.href.substr(window.location.href
        .lastIndexOf("/")+1);
    $(".publication-directory ul li a").each(function(){
        if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
            $(this).addClass("active");
    })
});
</script>
<script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/chalk.js"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/continentsLow.js"></script>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom_ammaps.js"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56d08ea0a1fdbefc"></script>
<script type="text/javascript">
/*<![CDATA[*/
(function() {
var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
sz.src = '//siteimproveanalytics.com/js/siteanalyze_6087089.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
})();
/*]]>*/
</script>
<?php wp_footer(); ?>
</body>
</html>

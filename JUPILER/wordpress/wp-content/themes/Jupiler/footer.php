<div class="footer-container">
    <footer class="wrapper">
        <a href="<?php bloginfo('rss2_url'); ?>" target="_blank" class="footer-menu"><i class="fa fa-rss fa-2x" aria-hidden="true"> </i>Sociale media</a>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        <a href="<?php echo get_page_link(115); ?>" id= "footertext">Disclaimer</a>
        <a href="<?php echo get_page_link(112); ?>" id= "footertext">Privacy Policy</a>
    </footer>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<?php wp_footer(); ?>
</body>
</html>

<footer id="footer"
        class="clearfix">
  <p class="center">
    &copy; <?php echo date( 'Y' ); ?>
    <?php bloginfo( 'name' ); ?>
  </p>
</footer>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<?php wp_footer(); ?>

<?php if(!is_preview()): ?>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<?php endif; ?>

</body>
</html>
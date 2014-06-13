<footer id="footer" class="clearfix">
  <p class="center">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
</footer>

<?php wp_footer(); ?>

<script type="text/javascript">
/* Uncomment this for a .svg to .png fallback (IE8 and below)
 * Filenames must be identical except the extension
 */
  
/*jQuery(document).ready(function($) {
    if(!Modernizr.svg) {
      $('img[src*="svg"]').attr('src', function() {
        return $(this).attr('src').replace('.svg', '.png');
      });
    }
});*/
</script>

<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('.nav-toggle').click(function() {
      $('#menu-main-nav').slideToggle('fast');
      $(this).toggleClass('active');
    });
  });
</script>

<!-- Enable LiveReload. Change localhost to your IP address. Delete if not needed. -->
<script src="//localhost:35729/livereload.js"></script>

</body>
</html>
<footer id="footer" class="clearfix" role="contentinfo">
  <p class="center">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
</footer>

<?php wp_footer(); ?>

<!--<script type="text/javascript">
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
</script>-->

<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('.nav-toggle').click(function() {
      $('nav ul.main-nav').slideToggle('fast');
      $(this).toggleClass('active');
    });
    $('.popup-link').magnificPopup({
      type:'inline',
      midClick: true
    });
    $('.popup-gallery').each(function() {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1]
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title');
                }
            }
        });
    });
    $('.scroll-link').click(function(e) {
      e.preventDefault();
      $(this).blur();
      var string = $(this).attr('href').split('#')[1];
      $('#' + string)
        .velocity('scroll', 400);
    });
    $('.slider').glide({
      autoplay: false,
      arrowRightText: '',
      arrowLeftText: ''
    });
  });
</script>

<!-- Enable LiveReload. Change localhost to your IP address. Delete if not needed. -->
<script src="//localhost:35729/livereload.js"></script>

</body>
</html>
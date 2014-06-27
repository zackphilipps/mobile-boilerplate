<footer id="footer" class="clearfix" role="contentinfo">
  <p class="center">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
</footer>

<div id="outdated">
   <h6>Your browser is out-of-date!</h6>
   <p>Update your browser to view this website correctly. <a id="btnUpdateBrowser" href="http://outdatedbrowser.com/">Update my browser now </a></p>
   <p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p>
</div>

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
    outdatedBrowser({
        bgColor: '#f25648',
        color: '#ffffff',
        lowerThan: 'transform'
    });
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
      $($(this).attr('href'))
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
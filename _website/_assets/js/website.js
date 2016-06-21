jQuery(document).ready(function($) {
  if (!Modernizr.touch) {
    $('#docs-main').waypoint(function(dir) {
      if (dir === 'down') {
        $('#docs-nav').addClass('fixed').css('width', $('#sidebar').width());
      } else {
        $('#docs-nav').removeClass('fixed').css('width', 'auto');
      }
    }, {
      offset: 82
    });
  }
});

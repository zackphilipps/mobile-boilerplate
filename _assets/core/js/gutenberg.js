jQuery(document).ready(function($) {
  'use strict';

  function imgFixHeight(el) {

    setTimeout(function() {
      el.each(function() {
        // get image original height
        var imgOriginalHeight = $(this).height();

        // Get Line-height
        var lineHeight = parseInt($('p').css('line-height'));

        // Calculate the new image height
        var div = Math.floor(imgOriginalHeight/lineHeight);
        var imgNewHeight = lineHeight * div;

        // Apply the new image height
        $(this).css('height', imgNewHeight);
      });
    }, 100);

  };

  //Fix once on first page load
  imgFixHeight($('img:not(#header .logo img, .glide__slide img)'));

  //Make sure that we fix images on each window resize (add debounce for performance)
  window.addEventListener('resize', debounce(imgFixHeight($('img:not(#header .logo img, .glide__slide img)')), 50), true);


  //helper: debounce
  function debounce(func, wait, immediate) {
    var timeout;
    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  };

});

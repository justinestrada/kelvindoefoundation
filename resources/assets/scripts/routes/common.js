export default {
  init() {
    $(window).on('scroll', function() {
        if($(this).scrollTop() > 10) {
          $('header.banner').addClass('shadow');
        } else {
          $('header.banner').removeClass('shadow');
        }
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

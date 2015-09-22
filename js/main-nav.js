jQuery(document).ready(function($) {
    
    var  mn = $(".scroll");
        mns = "-on";
        hdr = $('header').height();

    $(window).scroll(function() {
      if( $(this).scrollTop() > hdr ) {
        mn.addClass(mns);
      } else {
        mn.removeClass(mns);
      }
    });
    
});
(function ($) {
  $(document).ready(function() {
    $(window).on( "resize", function() {
      $( "#nav-wrapper" ).height($( "#site-navigation" ).height());
      $( ".menu-toggle" ).click(function() {
        $( "#nav-wrapper" ).height($( "#site-navigation" ).height());
      });
      var mainbottom = $( "hgroup" ).offset().top + $( "hgroup" ).height();
      $(window).on( "scroll",function(){
        var stop = Math.round($(window).scrollTop());
        if (stop > mainbottom) {
          $( ".main-navigation" ).addClass( "scroll-affix" );
        } else {
          $( ".main-navigation" ).removeClass( "scroll-affix" );
        }
      }).trigger( "scroll" );
    }).trigger( "resize" );
  });
}(jQuery));
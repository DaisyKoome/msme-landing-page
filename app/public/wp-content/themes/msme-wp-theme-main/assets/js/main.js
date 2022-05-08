$(document).ready(function(){

  /*--- Mobile Menu ---*/
  $('.menu-icon').bind('touchstart mousedown', function(e){
      $(".mobile-nav li").removeClass("open");
      $(".sub-nav").slideUp(200);
      $("body").toggleClass("menu-open");
      if($("body").hasClass("search-open")){
          $("body").removeClass("search-open");
      }
      return false;
  });

  $(".has-children .toggle").click(function(e) {
      var sub_nav = $(this).closest("li").children(".sub-nav");
      if(sub_nav.is(':visible'))
      {
          $(this).closest("li").removeClass("open");
          sub_nav.slideUp(200);
      }
      else
      {
          $(".mobile-nav li").removeClass("open");
          $(this).closest("li").addClass("open");
          $(".sub-nav").slideUp(200);
          sub_nav.slideDown(200);
      }

      return false;

  });

  $("#content_mask, .menu-close").bind('touchstart mousedown', function(e){
      $(window).scrollTop(0);
      $(".mobile-nav li").removeClass("open");
      $(".sub-nav").slideUp(200);
      $("body").removeClass("menu-open search-open");
      return false;
  });

});
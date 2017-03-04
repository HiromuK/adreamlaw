$(function(){
    $(".acMenu1 p").click(function(){
      $(this).next("ul").slideToggle();
      $(this).children("span").toggleClass("active");
    });

    $(".acMenu2 dt").on("click", function() {
      $(this).next("dd").slideToggle();
      $(this).next("dd").siblings("dd").slideUp();
      $(this).toggleClass("active");
      $(this).siblings("dt").removeClass("active");
    });
});

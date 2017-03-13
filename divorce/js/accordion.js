$(function(){
    $(".sidecolumn-sp__acordion_lists p").click(function(){
      $(this).next("ul").slideToggle();
      $(this).children("span").toggleClass("active");
    });
});

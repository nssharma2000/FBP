


















$("#MENU_DIV").click(function(){
  a=$("#MENU");
  if($(window).width()>480)
  {
    $(a).animate({marginRight: "80.5vw"}, 700);
  }
  else
  {
    $(a).animate({marginRight: "82vw"}, 700);
  }
  $("#MENU_COVER").show();
});

$("#MENU_COVER").click(function()
{
  $(this).hide();
  $("#MENU").animate({marginRight: "1920px"});
});

$(document).ready(function() {
  $("#MENU_COVER").hide();
});

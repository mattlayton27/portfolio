/***** Toggle Hamburger Menu *****/
$(document).ready(function(){
  $("#hamburger_menu").click(function(){
    $("#mobile_navigation").toggle();
  });
});

/***** Auto Scroll Console Nav *****/
$(document).ready(function(){
  $("#worknav").click(function(){
      $("body").animate({scrollTop:100}, 1000);
  });
});
$(document).ready(function(){
  $("#aboutnav").click(function(){
      $("body").animate({scrollTop:6000}, 1000);
  });
});
$(document).ready(function(){
  $("#gitnav").click(function(){
      $("body").animate({scrollTop:6600}, 1000);
  });
});
$(document).ready(function(){
  $("#contactnav").click(function(){
      $("body").animate({scrollTop:7150}, 1000);
  });
});


/***** Auto Scroll Mobile Nav *****/
$(document).ready(function(){
  $("#mobileworknav").click(function(){
      $("body").animate({scrollTop:100}, 1000);
      $("#mobile_navigation").toggle();
  });
});
$(document).ready(function(){
  $("#mobileaboutnav").click(function(){
      $("body").animate({scrollTop:5800}, 1000);
      $("#mobile_navigation").toggle();
  });
});
$(document).ready(function(){
  $("#mobilegitnav").click(function(){
      $("body").animate({scrollTop:7100}, 1000);
      $("#mobile_navigation").toggle();
  });
});
$(document).ready(function(){
  $("#mobilecontactnav").click(function(){
      $("body").animate({scrollTop:7850}, 1000);
      $("#mobile_navigation").toggle();
  });
});

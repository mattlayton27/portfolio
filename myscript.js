/***** Toggle Hamburger Menu *****/
$(document).ready(function(){
  $("#hamburger_menu").click(function(){
    $("#mobile_navigation").toggle();
  });
});

/***** Auto Scroll Console Nav *****/
$(document).ready(function(){
  $("#scrollHome").click(function(){
      $("body").animate({scrollTop:0}, 1000);
  });
});
$(document).ready(function(){
  $("#worknav").click(function(){
    $("html,body").animate({
      scrollTop: $("#work").offset().top - 90
    });
  });
});
$(document).ready(function(){
  $("#aboutnav").click(function(){
    $("html,body").animate({
      scrollTop: $("#about_me").offset().top - 65
    });
  });
});
$(document).ready(function(){
  $("#gitnav").click(function(){
    $("html,body").animate({
      scrollTop: $("#github").offset().top - 65
    });
  });
});
$(document).ready(function(){
  $("#contactnav").click(function(){
    $("html,body").animate({
      scrollTop: $("#contact").offset().top - 65
    });
  });
});


/***** Auto Scroll Mobile Nav *****/
$(document).ready(function(){
  $("#mobileworknav").click(function(){
    $("body").animate({
      scrollTop: $("#work").offset().top - 90
    });
    $("#mobile_navigation").toggle();
  });
});
$(document).ready(function(){
  $("#mobileaboutnav").click(function(){
    $("html,body").animate({
      scrollTop: $("#about_me").offset().top - 65
    });
    $("#mobile_navigation").toggle();
  });
});
$(document).ready(function(){
  $("#mobilegitnav").click(function(){
    $("html,body").animate({
      scrollTop: $("#github").offset().top - 65
    });
    $("#mobile_navigation").toggle();
  });
});
$(document).ready(function(){
  $("#mobilecontactnav").click(function(){
    $("html,body").animate({
      scrollTop: $("#contact").offset().top - 65
    });
    $("#mobile_navigation").toggle();
  });
});

$(window).load(function(){
      $('#slider').flexslider({
        selector: ".project-slides > li",
        maxItems: 1,
        animation: "fade",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
jQuery(function($){
  "use strict";

    // Search focus handler
    function searchFocusHandler() {
        const searchFirstTab = $('.inner_searchbox input[type="search"]');
        const searchLastTab = $('button.search-close');

        $(".open-search").click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            $('body').addClass("search-focus");
            searchFirstTab.focus();
        });

        $("button.search-close").click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            $('body').removeClass("search-focus");
            $(".open-search").focus();
        });

        // Redirect last tab to first input
        searchLastTab.on('keydown', function(e) {
            if ($('body').hasClass('search-focus') && e.which === 9 && !e.shiftKey) {
                e.preventDefault();
                searchFirstTab.focus();
            }
        });

        // Redirect first shift+tab to last input
        searchFirstTab.on('keydown', function(e) {
            if ($('body').hasClass('search-focus') && e.which === 9 && e.shiftKey) {
                e.preventDefault();
                searchLastTab.focus();
            }
        });

        // Allow escape key to close menu
        $('.inner_searchbox').on('keyup', function(e) {
            if ($('body').hasClass('search-focus') && e.keyCode === 27) {
                $('body').removeClass('search-focus');
                searchLastTab.focus();
            }
        });
    }

    // Initialize search focus handler
    searchFocusHandler();
});

function hair_spa_salon_menu_open() {
  jQuery(".sidenav").addClass('open');
}
function hair_spa_salon_menu_close() {
  jQuery(".sidenav").removeClass('open');
}

jQuery(function($){
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {
      $('#return-to-top').fadeIn(200);
    } else {
      $('#return-to-top').fadeOut(200);
    }
  });
  $('#return-to-top').click(function() {
    $('body,html').animate({
      scrollTop : 0
    }, 500);
  });
});

jQuery(function($){
  $(window).load(function() {
    $(".loader").delay(2000).fadeOut("slow");
  })
});

// ===== services ====

jQuery('document').ready(function(){
  var slider_loop = jQuery('#services').attr('slider-loop');
  var owl = jQuery('#services .owl-carousel');
    owl.owlCarousel({
    margin:20,
    nav: false,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: slider_loop == 0 ? false : slider_loop,
    dots:false,
    navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      },
      1200: {
        items: 6
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});
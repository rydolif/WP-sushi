$(function() {



$('.cart-punkt').hover(function () {
  $('.widget_shopping_cart').addClass('widget_shopping_cart-open'); 
}, function () {
  $('.cart-punkt').data('timer', setTimeout(function () {
    $('.widget_shopping_cart').removeClass('widget_shopping_cart-open'); 
  }, 200));
});


//------------------------------гамбургер-----------------------------
  $('.hamburger').click(function() {
    $(this).toggleClass('hamburger--active');
    $('.header__links').toggleClass('header__links--active');
    $('.header').toggleClass('header--active');
  });

//-------------------------------попандер---------------------------------------
  $('.modal').popup({transition: 'all 0.3s'});


//----------------------------------------fixed----------------------------------
  $(window).scroll(function(){
      if($(this).scrollTop()>20){
          $('.nav').addClass('nav--active');
      }
      else if ($(this).scrollTop()<20){
          $('.nav').removeClass('nav--active');
      }
  });

//-------------------------скорость якоря---------------------------------------
  $(".header__list").on("click","a", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top - 60}, 'slow', 'swing');
  //--------------------закриття меню при кліку на ссилку якоря--------------------
     // $('.hamburger').removeClass('hamburger--active');
     // $('.header-menu').removeClass('header-menu');
     // $('.header--active').removeClass('header--active');
     // $('.nav--active').removeClass('nav--active');

  });

  
//---------------hero__slider-----------------

  $('.hero__slider').slick({
    appendArrows: $('.hero__slider_arrows'),
    autoplay: true,
    autoplaySpeed: 4000,
  });


//--------------------slider--------------------
  var swiper = new Swiper('.gallery__slider1', {
    slidesPerView: 4,
    spaceBetween: 20,
    pagination: {
      el: '.swiper-pagination1',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.swiper-button-next1',
      prevEl: '.swiper-button-prev1',
    },
    freeMode: true,
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 4
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });

  var swiper = new Swiper('.gallery__slider2', {
    slidesPerView: 4,
    spaceBetween: 20,
    pagination: {
      el: '.swiper-pagination2',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.swiper-button-next2',
      prevEl: '.swiper-button-prev2',
    },
    freeMode: true,
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 4
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });

  var swiper = new Swiper('.gallery__slider3', {
    slidesPerView: 4,
    spaceBetween: 20,
    pagination: {
      el: '.swiper-pagination3',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.swiper-button-next3',
      prevEl: '.swiper-button-prev3',
    },
    freeMode: true,
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 4
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });

  var swiper = new Swiper('.gallery__slider4', {
    slidesPerView: 4,
    spaceBetween: 20,
    pagination: {
      el: '.swiper-pagination4',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.swiper-button-next4',
      prevEl: '.swiper-button-prev4',
    },
    freeMode: true,
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 4
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });


  var swiper = new Swiper('.addition__list_toping', {
    slidesPerView: 4,
    spaceBetween: 20,
    freeMode: true,
    breakpoints: {
      767: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      1200: {
        slidesPerView: 3.5,
        spaceBetween: 20
      }
    }
  });

  var swiper = new Swiper('.addition__list_drink', {
    slidesPerView: 4,
    spaceBetween: 20,
    freeMode: true,
    breakpoints: {
      767: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      1200: {
        slidesPerView: 3.5,
        spaceBetween: 20
      }
    }
  });

});

//----------------------------------------preloader----------------------------------

  $(window).on('load', function(){
    $('.preloader').delay(1000).fadeOut('slow');
  });


  // jQuery(function($){$("div.quantity:not(.buttons-add-minus), td.quantity:not(.buttons-add-minus)").addClass("buttons-add-minus").append('<input type="button" value="+" class="plus" />').prepend('<input type="button" value="-" class="minus" />'),$(document).on("click",".plus, .minus",function(){var t=$(this).closest(".quantity").find(".qty"),a=parseFloat(t.val()),n=parseFloat(t.attr("max")),s=parseFloat(t.attr("min")),e=t.attr("step");a&&""!==a&&"NaN"!==a||(a=0),(""===n||"NaN"===n)&&(n=""),(""===s||"NaN"===s)&&(s=0),("any"===e||""===e||void 0===e||"NaN"===parseFloat(e))&&(e=1),$(this).is(".plus")?t.val(n&&(n==a||a>n)?n:a+parseFloat(e)):s&&(s==a||s>a)?t.val(s):a>0&&t.val(a-parseFloat(e)),t.trigger("change")})});

  

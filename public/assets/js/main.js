jQuery(document).ready(function($){
  
    window.onload = function (){
      $(".bts-popup").delay(1000).addClass('is-visible');
      }
    
      //open popup
      $('.bts-popup-trigger').on('click', function(event){
          event.preventDefault();
          $('.bts-popup').addClass('is-visible');
      });
      
      //close popup
      $('.bts-popup').on('click', function(event){
          if( $(event.target).is('.bts-popup-close') || $(event.target).is('.bts-popup') ) {
              event.preventDefault();
              $(this).removeClass('is-visible');
          }
      });
      //close popup when clicking the esc keyboard button
      $(document).keyup(function(event){
          if(event.which=='27'){
              $('.bts-popup').removeClass('is-visible');
          }
      });
  });
$(function () {

    $(".wrap-banner").owlCarousel({
        center: false,
        items: 1,
        loop: true,
        nav: true,
        autoplay: true,
        autoHeight: false,
        lazyLoad: false,
        navText: ['', ''],
        dots: true,
        responsive: {
            0: {
                nav: false
            },
            992: {
                nav: true
            }
        }

    });

    var slide_dichvu = jQuery(".wrap-dichvu");
    slide_dichvu.owlCarousel({
        center: true,
        items: 3,
        loop: true,
        nav: true,
        dots: true,
        autoplay: false,
        lazyLoad: true,
        autoHeight: true,
        smartSpeed: 500,
        navText: ['', ''],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 3
            }
        }
    });

    $('.list-partner').owlCarousel({
        nav: true,
        loop: true,
        dots: false,
        margin: 10,
        lazyLoad: true,
        navText: ['', ''],
        responsive: {
            0: {
                items: 2
            },
            480: {
                items: 2
            },
            768: {
                items: 6
            }
        }
    });

    // $('.header-mobile').on('click', '#toggle.unactive', function() {
    //  $(this).addClass('active');
    //  $(this).removeClass('unactive');
    //  $('.mobile-menu').show();
    // })

    // $('.header-mobile').on('click', '#toggle.active', function() {
    //  $(this).removeClass('active');
    //  $(this).addClass('unactive');
    //  $('.mobile-menu').hide();
    // })

    $(window).bind('scroll',
        function () {
            if ($(window).scrollTop() > 200) {
                $('.wrap-menu').addClass('sticky');
                $('.header-mobile').addClass('sticky');
            } else {
                $('.wrap-menu').removeClass('sticky');
                $('.header-mobile').removeClass('sticky');
            }
        });

    $('.lazy').Lazy();

    $('ul.tabs li').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    });

    $('[data-toggle=search-form]').click(function () {
        $('.search-form-wrapper').toggleClass('open');
        $('.search-form-wrapper .search').focus();
        $('html').toggleClass('search-form-open');
    });
    $('[data-toggle=search-form-close]').click(function () {
        $('.search-form-wrapper').removeClass('open');
        $('html').removeClass('search-form-open');
    });
    $('.search-form-wrapper .search').keypress(function (event) {
        if ($(this).val() == "Search") $(this).val("");
    });

    $('.search-close').click(function (event) {
        $('.search-form-wrapper').removeClass('open');
        $('html').removeClass('search-form-open');
    });

    setTimeout(function () {
        $('.section-5').append('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.755724778281!2d105.84194631533224!3d21.042457892685462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abba7ba53e11%3A0x587dbd43c0113ca9!2zQuG7h25oIFZp4buHbiDEkGEgS2hvYSBI4buTbmcgTmfhu41j!5e0!3m2!1svi!2s!4v1578450310705!5m2!1svi!2s" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>');
    },
        10000);
})
$(function () {
    $('.button_container').click(function () {
        $(this).toggleClass('active');
        $('.mobile-menu').slideToggle();
    });

    $('.mobile-menu li .sub-menu').prepend('');
    $('.submenu-button').siblings().hide();
    $('.submenu-button').click(function () {
        $(this).siblings().slideToggle();
        $(this).toggleClass('active');
        $('.mobile-menu li .sub-menu').toggleClass('active');

    });
})


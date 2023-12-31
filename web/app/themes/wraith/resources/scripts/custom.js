import mixitup from 'mixitup';

(function ($) {
  $('#menu-header-menu li.menu-item-has-children').append('<div class="toggle lg:hidden absolute z-20 top-0 right-0 px-8 py-4"><svg class="svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg></div>');

  var timing = 200;

  $('#menu-header-menu > li.menu-item-has-children > .toggle').on('click', function () {
    if ($(this).parent().hasClass('open')) {
      $(this).parent().parent().find('li.menu-item-has-children').removeClass('open');
      $(this).parent().parent().find('.sub-menu').slideUp(timing);
    } else {
      $(this).parent().parent().find('li.menu-item-has-children.open').removeClass('open');
      $(this).parent().parent().find('li.menu-item-has-children.open > .sub-menu').slideUp(timing);
      $(this).parent().toggleClass('open');
      $(this).prev().slideToggle(timing);
    }
  });

  $('#menu-header-menu > li.menu-item-has-children > .sub-menu > li.menu-item-has-children > .toggle').on('click', function () {
    if ($(this).parent().hasClass('open')) {
      $(this).parent().parent().find('li.menu-item-has-children').removeClass('open');
      $(this).parent().parent().find('.sub-menu').slideUp(timing);
    } else {
      $(this).parent().parent().find('li.menu-item-has-children.open').removeClass('open');
      $(this).parent().parent().find('li.menu-item-has-children.open > .sub-menu').slideUp(timing);
      $(this).parent().toggleClass('open');
      $(this).prev().slideToggle(timing);
    }
  });

  // Desktop nav
  $('#menu-header-menu > li > .sub-menu > li.menu-item-has-children').on('hover', function () {
    if ($(window).innerWidth() > 991) {
      var target = $(this).find('> ul.sub-menu');
      var width = $(target).outerWidth();

      var right_of_screen = $(window).innerWidth();
      var right_of_parent = $(this).offset().left + $(this).outerWidth();
      var right_of_element = right_of_parent + width;

      if (right_of_screen > right_of_element) {
        $(target).css('transform', 'translateX(100%)');
        $(target).css('right', '0');
      } else {
        $(target).css('transform', 'translateX(-100%)');
        $(target).css('left', '0');
      }
    }
  });

  $('.slick-banner').on('init', function () {
    var hiddenSlides = $('.slick-banner .hidden');
    if (hiddenSlides.length > 1) {
      $('.slick-banner .hidden').each(function (i, el) {
        $(el).removeClass('hidden');
      })
    } else {
      hiddenSlides.removeClass('hidden');
    }
  })

  // Slick
  $('.slick-banner').slick({
    dots: false,
    arrows: false,
    fade: true,
    cssEase: 'ease-in-out',
    slidesToShow: 1,
    slidestoScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 1000,
    infinite: true,
  });
  $('.slick-offer').slick({
    dots: false,
    arrows: false,
    fade: false,
    cssEase: 'ease-in-out',
    slidesToShow: 1,
    slidestoScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 2000,
    infinite: true,
  });

  // Testimonials 
  $('.testimonials-carousel').slick({
    dots: true,
    arrows: false,
    fade: true,
    cssEase: 'ease-in-out',
    slidesToShow: 1,
    slidestoScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 1000,
    infinite: true,
  });

 // Gallery Slider
 $(".slick-gallery-slider").slick({
  dots: false,
  arrows: false,
  infinite: true,
  slidesToShow: 4,
  autoplay: true,
  slidesToScroll: 1,
  swipeToSlide: true,
  draggable: true,
  centerMode: false,
  responsive: [
    {
      breakpoint: 1280,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$('.acc-slick').slick({
  slidesToShow: 7,
  infinite:true,
  swipeToSlide: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 3000,

  responsive: [
    {
      breakpoint: 770,
      settings: {
        slidesToShow: 3,
        infinite:true,
        swipeToSlide: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,        
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        infinite:true,
        swipeToSlide: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,        
      }
    }
  ]
});

$('.slick-products').slick({
  slidesToShow: 4,
  infinite:true,
  swipeToSlide: true,
  arrows: true,
  centerMode:true,
  centerPadding:"180px",
  autoplay: true,
  autoplaySpeed: 3000,
  prevArrow: $('.product-arrow-p'),
  nextArrow: $('.product-arrow-n'),
  responsive: [
    {
      breakpoint: 1380,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode:false,
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode:false,
      }
    },
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode:false,
      }
    }
  ]
});

$('.slick-mainpage-link').slick({
  slidesToShow: 5,
  infinite:true,
  swipeToSlide: true,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 3000,
  prevArrow: $('.page-link-arrow-p'),
  nextArrow: $('.page-link-arrow-n'),
  responsive: [
    {
      breakpoint: 1380,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode:false,
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode:false,
      }
    },
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode:false,
      }
    }
  ]
});

  $('.slick-p').on('click', function () {
    $(this).parent().prev().slick('slickPrev');
  });
  $('.slick-n').on('click', function () {
    $(this).parent().prev().slick('slickNext');
  });

  // Mixitup
  if ($('.mix-container').length) {
    var mixer = mixitup('.mix-container');
    if (mixer) {
      console.log('mix');
    }
  }

  if ($('.mix-container-products').length) {
    var mixer = mixitup('.mix-container-products', {
      load: {
        filter: '.product-range-1'
      }
    });
    if (mixer) {
      console.log('mix');
    }
  }

  //key Features
  var allContent = $('.accordion-text');
  var allToggle = $('.accordion-heading').click(function() {
    var thisToggle = $(this);
    var thisContent = thisToggle.next();
    allToggle.not(thisToggle).addClass('collapsed');
    allContent.not(thisContent).addClass('collapse');
    thisToggle.toggleClass('collapsed');
    thisContent.toggleClass('collapse');
  })

  // Accordion
  $('.accordionTitle').on('click', function () {
    var $this = $(this);
    $('.accordionBody').slideUp(300);
    $this.next().slideDown(300, function () {
      $('.accordion').removeClass('active');
      $this.parent().toggleClass('active');
    })
  });

  // smooth scroll
   
$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();
  $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top -130 }, 700);
});

  $('.product-link').hover(function(){
    $(this).find('.product-bottom-content').removeClass('sm:hidden');
  }, function(){
    $(this).find('.product-bottom-content').addClass('sm:hidden');
  });

  // Cookie Policy
  $.fn.CookieNotice = function () {
    if (!localStorage.getItem('cookie-notice-dismissed')) {
      var notice = this;
      setTimeout(function () {
        notice.addClass('active');
      }, 1000);
    }
    this.addClass('cookie-notice');
    return this
  }
  $(document).on('click', '.cookie-notice-dismiss', function () {
    localStorage.setItem('cookie-notice-dismissed', true);
    $(this).parents('.cookie-notice').removeClass('active');
  })
  $('#cookie-notice').CookieNotice();

 // Colour Picker
 $('.swtachPage').on('click', function () {
  var pageNumber = $(this).data('page');
  $('.swtachPage').removeClass('bg-primary').addClass('bg-gray-400');
  $(this).removeClass('bg-gray-400').addClass('bg-primary');
  $('.colourSwtach').removeClass('active');
  $('.colourSwtach[data-swatch=' + pageNumber + ']').addClass('active');
})

$('.colourSwtachitem').on('click', function () {
  $('.colourSwtachitem').removeClass('selected');
  $(this).addClass('selected');
  var colour = $(this).children('img').data('colour');
  var product = $(this).children('img').data('product');
  var image = $('.colourFrame');
  image.attr("src", '/app/uploads/renders/' + product + '-' + colour + '.webp');
  image.attr("alt", product + '-' + colour);
})

  // Share Button
  $('.page-share').on('click', function () {
    if (navigator.share) {
      navigator.share({
        title: 'Share This Page',
        url: window.location,
      }).then(() => {
        console.log('Thanks for sharing!');
      })
        .catch(err => {
          console.log('Couldnt share because of', err.message);
        });
    } else {
      $('#panel-share').toggleClass('active');
      console.log('navigator.share not supported!')
    }
  });

  $('.panel-share-close').on('click', function () {
    $('#panel-share').removeClass('active');
  });

  // Mobile Nav
  $('#nav-primary-toggle').on('click', function () {
    $('.nav-primary').toggleClass('open');
    $('.nav-backdrop').toggleClass('show');
  });

  $('.toggle').on('click', function (e) {
    var $this = $(this);
    var $parent = $this.parents('.checkout-step.active');
    $parent.removeClass('active');
    $parent.next().addClass('active');
  });

  var $document = $(document);
  $document.on('scroll', function () {
    if ($document.scrollTop() >= 800) {
      // user scrolled 50 pixels or more;
      // do stuff
      $('#fixed-sidebar').addClass(' block')
      $('#fixed-sidebar').removeClass("hidden");

    } else {
      $('#fixed-sidebar').removeClass("block");
      $('#fixed-sidebar').addClass(' hidden')

    }
  });


  $('.toggler').on('click', function () {
    $(this).parents('#fixed-sidebar').toggleClass('hide');
  });

  $(document).ready(function () {
    var checkoutSummaryHeight = $('#checkout-summary-fixed').outerHeight();
    $('#checkout-summary-fixed').css('bottom', '-' + checkoutSummaryHeight + 'px');
  });
  $('#checkout-summary-toggle').on('click', function () {
    $(this).toggleClass('active');
    var checkoutSummaryHeight = $('#checkout-summary-fixed').outerHeight();
    var combinedHeight = checkoutSummaryHeight + 53;
    if ($('#checkout-summary-fixed').hasClass('active')) {
      $('#checkout-summary-fixed').css('bottom', '-' + checkoutSummaryHeight + 'px');
      $('#checkout-summary-fixed').removeClass('active')
    } else {
      $('#checkout-summary-fixed').css('bottom', '50px');
      $('#checkout-summary-fixed').addClass('active')
    }
  });

  $('input[name="card_number"]').on('keyup', function () {
    if (this.value.length == this.maxLength) {
      $('input[name="expiry_date"]').focus();
    }
  });

  $('input[name="expiry_date"]').on('keyup', function () {
    if (this.value.length == this.maxLength) {
      $('input[name="cvc"]').focus();
    }
  });

  // Sticky CTA
  $(window).on('scroll', function () {
    if ($(document).scrollTop() > 300) {
      $('.fixed-side').addClass('fixed-side-show');
    } else {
      $('.fixed-side').removeClass('fixed-side-show');
    }

    if ($(document).scrollTop() > 350) {
      $('.fixed-side').addClass('fixed-desktop');
    } else {
      $('.fixed-side').removeClass('fixed-desktop');
    }
  });

  // Custom chatbot.com triggers
  // If chat has already been started, the load the chatbot.com script - saves loading it if it's not needed
  $(document).on('ready', function() {
    if (localStorage.getItem('chat-initialised') == 'true') {
      var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
      be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);

      window.BE_API = window.BE_API || {};
      window.BE_API.onBeforeLoad = function () {
        return false
      };
    }
  });

  window.__be = window.__be || {};
  window.__be.id = "YOUR STORY ID";
  // Open chat window
  $('.cta-chat-fixed .chat-method-chat').on('click', function () {
    if( localStorage.getItem('chat-initialised') == 'true' ) {
      window.BE_API = window.BE_API || {};

      if( window.BE_API.isInitialized() ) {
        console.log('is initialized');
        window.BE_API.openChatWindow();
      } else {
        window.BE_API.create();
        window.BE_API.onLoad = function () {
          window.BE_API.openChatWindow();
        };
      }
    } else {
      localStorage.setItem('chat-initialised', 'true')
      var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
      be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);

      window.BE_API = window.BE_API || {};
      window.BE_API.openChatWindow();
    }
    $(this).closest('.cta-chat-fixed').addClass('chat-open');
  });

  // Close chat window
  window.BE_API = window.BE_API || {};
  window.BE_API.onChatWindowClose = function () {
    window.BE_API.hideChatWindow();
    $('.cta-chat-fixed').removeClass('chat-open');
  };

   // Color Picker

   $('[data-image-src]').on('click', function () {

    let that = $(this);
    const parent = $(this).parent().parent().parent().parent().parent();

    parent.find('[data-image-target]').parent().hide();

    parent.find('[data-image-target]').each(function () {
      if ($(this).data('image-target') === that.data('image-src')) {
        $(this).parent().show();
      }
    })
  })

})(jQuery);
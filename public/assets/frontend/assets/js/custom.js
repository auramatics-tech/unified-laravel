/* Navbar toggler js for remove class "Show" from child */
$(document).on('ready', function () {
    $('.navBack').on('click', function (e) {
        $(this).parent().removeClass('show');
        e.stopPropagation();
    })
});

// <!-- Hero slider -->
var packageSwiper = new Swiper('.hero-slider-container', {
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
        delay: 7000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
// <!-- Key Principals slider -->
var packageSwiper = new Swiper('.principal-slider-container', {
    slidesPerView: 5,
    spaceBetween: 25,
    loop: false,
    slidesPerGroup: 2,
    
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1.5,
        },
        460: {
            slidesPerView: 2,
        },
        575: {
            slidesPerView: 2.5,
        },
        767: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 4,
        },
        1440: {
            slidesPerView: 5,
            spaceBetween: 25,
        },
    }
});
// <!-- News and Update slider -->
var packageSwiper = new Swiper('.news-slider-container', {
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        450: {
            slidesPerView: 1.5,
            spaceBetween: 20,
        },
        575: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        710: {
            slidesPerView: 2.5,
            spaceBetween: 20,
        },
        870: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 3.5,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    }
});

// <!-- Featured slider -->
var packageSwiper = new Swiper('.featured-slider-container', {
    slidesPerView: 4,
    spaceBetween: 35,
    loop: true,
    slidesPerGroup: 2,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        580: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 25,
        },
    }
});
// <!-- Featured product slider -->
var packageSwiper = new Swiper('.featured-product-slider-container', {
    slidesPerView: 7,
    spaceBetween: 20,
    loop: true,
    slidesPerGroup: 2,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1.75,
        },
        480: {
            slidesPerView: 2,
        },
        610: {
            slidesPerView: 3.5,
        },
        768: {
            slidesPerView: 4.5,
        },
        992: {
            slidesPerView: 6,
        },
        1200: {
            slidesPerView: 7,
            spaceBetween: 20,
        },
    }
});
// <!-- Featured Products -->
var packageSwiper = new Swiper('.featured-product-container', {
    slidesPerView: 5,
    loop: false,
    slidesPerGroup: 5,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        575: {
            slidesPerView: 2,
            spaceBetween: 25,
        },
        620: {
            slidesPerView: 2.5,
            spaceBetween: 25,
        },
        767: {
            slidesPerView: 3,
            spaceBetween: 25,
        },
        992: {
            slidesPerView: 3.5,
            spaceBetween: 25,
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 25,
        },
    }
});
// <!-- Resources -->
var packageSwiper = new Swiper('.resources-container', {
    slidesPerView: 4,
    loop: false,
    slidesPerGroup: 4,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 15,
        },
        767: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        992: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        1199: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        1650: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
    }
});
// Toggle active card on show hide of collapse element
$(".collapse").on('show.bs.collapse', function () {
    $(this).prev(".box-header").addClass("active");
}).on('hide.bs.collapse', function () {
    $(this).prev(".box-header").removeClass("active");
});

// Toggle down close icon on show hide of collapse element
$("#accordion-category").on("hide.bs.collapse show.bs.collapse", function (e) {
    $(e.target)
        .prev()
        .find("span")
        .toggleClass("acco-minus");
});

/*JS FOR SCROLLING THE ROW OF THUMBNAILS*/
$(document).ready(function () {
    $('.vid-item').each(function (index) {
        $(this).on('click', function () {
            var current_index = index + 1;
            $('.vid-item .thumb').removeClass('active');
            $('.vid-item:nth-child(' + current_index + ') .thumb').addClass('active');
        });
    });
});

// <!-- About us slider -->
var packageSwiper = new Swiper('.about-slider-container', {
    slidesPerView: 1,
    spaceBetween: 20,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// <!-- News & Updates slider -->
var packageSwiper = new Swiper('.news-update-slider', {
    slidesPerView: 3,
    spaceBetween: 30,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.next',
        prevEl: '.prev',
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 25,
        },
        480: {
            slidesPerView: 1.5,
        },
        640: {
            slidesPerView: 2,
        },
        800: {
            slidesPerView: 2.5,
            spaceBetween: 25,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    }
});

// <!-- Quantity -->
$('.add').click(function () {
    var th = $(this).closest('.wrap').find('.count');
    th.val(+th.val() + 1);
});
$('.sub').click(function () {
    var th = $(this).closest('.wrap').find('.count');
    if (th.val() > 1) th.val(+th.val() - 1);
});


$(function () {
    $(".navbar-nav  li > .trigger").on("click", function (e) {
        var current = $(this).next();
        var grandparent = $(this).parent().parent();
        if ($(this).hasClass('left-caret') || $(this).hasClass('right-caret'))
            $(this).toggleClass('right-caret left-caret');
        grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
        grandparent.find(".sub-menu:visible").not(current).hide();
        current.toggle();
        e.stopPropagation();
    });
    $(".dropdown-menu > li > span:not(.trigger)").on("click", function () {
        var root = $(this).closest('.dropdown');
        root.find('.left-caret').toggleClass('right-caret left-caret');
        root.find('.sub-menu:visible').hide();
    });
});

//set button id on click to hide first modal
$("#apply-btn").on("click", function () {
    $('#jobInfo').modal('hide');
});
//trigger next modal
$("#apply-btn").on("click", function () {
    $('#applyjob').modal('show');
});

//set button id on click to hide first modal
$("#back-btn").on("click", function () {
    $('#applyjob').modal('hide');
});
//trigger next modal
$("#back-btn").on("click", function () {
    $('#jobInfo').modal('show');
});


$(".plusIcon").on("click",function(){
var obj = $(this);
if( obj.hasClass("fa-plus") ){
    obj.hide();
    obj.next().show();            
    obj.parent().parent().next().show();
}else{
    obj.hide();
    obj.prev().show();
    obj.parent().parent().next().hide();
}
});

// slected video highlight
$("#vid-list li a").each(function() { 	 
    $(this).click(function() {
        $("#vid-list li a").not($(this)).parent().removeClass('activevideo');
        if($(this).parent().hasClass( "activevideo" )){
            $(this).parent().removeClass( "activevideo" );
        }else{
            $(this).parent().addClass( "activevideo" );
        }
    });
    });
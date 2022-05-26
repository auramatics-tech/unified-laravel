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
    allowSlidePrev: false,
    allowSlideNext: false,
    noSwiping: false,
    shortSwipes: false,
    breakpoints: {
        0: {
            slidesPerView: 1,
            allowSlidePrev: true,
            allowSlideNext: true,
            noSwiping: true,
            shortSwipes: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        },
        450: {
            slidesPerView: 1.5,
            spaceBetween: 20,
            allowSlidePrev: true,
            allowSlideNext: true,
            noSwiping: true,
            shortSwipes: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        },
        575: {
            slidesPerView: 2,
            spaceBetween: 20,
            allowSlidePrev: true,
            allowSlideNext: true,
            noSwiping: true,
            shortSwipes: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        },
        710: {
            slidesPerView: 2.5,
            spaceBetween: 20,
            allowSlidePrev: true,
            allowSlideNext: true,
            noSwiping: true,
            shortSwipes: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        },
        870: {
            slidesPerView: 3,
            allowSlidePrev: true,
            allowSlideNext: true,
            noSwiping: true,
            shortSwipes: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        },
        992: {
            slidesPerView: 3.5,
            allowSlidePrev: true,
            allowSlideNext: true,
            noSwiping: true,
            shortSwipes: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 30,
            allowSlidePrev: false,
            allowSlideNext: false,
            noSwiping: false,
            shortSwipes: false,
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
    slidesPerView: 3,
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
            spaceBetween: 25,
        },
        767: {
            slidesPerView: 2,
            spaceBetween: 25,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 25,
        },
        1199: {
            slidesPerView: 3,
            spaceBetween: 35,
        },
        1650: {
            slidesPerView: 3,
            spaceBetween: 60,
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

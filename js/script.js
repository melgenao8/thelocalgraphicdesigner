$(document).ready(function () {

    //sets horizontal scroll to center on core values card
    // if ($(window).width() < 1331) {
    //     var outerContent = $(".core-values");
    //     var innerContent = $(".core-cards");
    //     console.log(outerContent)
    //     console.log(innerContent)
    //     console.log(outerContent.width())
    //     console.log(innerContent.width())
    //     console.log((innerContent.width() - outerContent.width()) / 2)
    //     outerContent.scrollLeft((innerContent.width() - outerContent.width()) / 2);

    // }
})

// mobile menu slide from the left
$('[data-toggle="slide-collapse"]').on('click', function () {
    var navMenuCont = $($(this).data('target'));
    navMenuCont.animate({ 'width': 'toggle', 'opacity': 'toggle' }, 350);
    var burger = $(".navbar-toggler i");
    if (burger.hasClass("fa-bars")) {
        burger.removeClass("fa-bars")
        burger.addClass("fa-times");
    } else {
        if (burger.hasClass("fa-times")) {
            burger.removeClass("fa-times");
            burger.addClass("fa-bars")
        }
    }
});


//Logic to show nav when scrolling up on mobile
var lastTop = 0;
var navBannerBottom = $(".nav-banner").position().top + $(".nav-banner").outerHeight(true);
var nav = $(".nav-banner nav");
$(window).on("scroll", debounce(function (e) {
    if ($(this).width() <= 991) {
        var top = $(this).scrollTop();
        if (top >= navBannerBottom) {
            if (top <= lastTop) {
                if (!nav.hasClass("show-nav")) {
                    nav.addClass("show-nav");
                    nav.animate({ "height": "65px", "opacity": "1" }, 500)
                }
                lastTop = top;
            } else {
                if (nav.hasClass("show-nav")) {
                    nav.animate({ "height": "0px", "opacity": "0" }, 500, function () {
                        nav.removeClass("show-nav");
                    })
                }
                lastTop = top;
            }
        } else {
            if (nav.hasClass("show-nav")) {
                nav.removeClass("show-nav");
                nav.removeAttr("style");
            }
        }
    }
}, 100)
)

$(window).on("resize", function () {
    if ($(this).width() > 991) {
        if (nav.hasClass("show-nav")) {
            nav.removeClass("show-nav");
            nav.removeAttr("style");
        }
    }
})

//debounce function for scroll events
function debounce(func, wait, immediate) {
    var timeout;
    return function () {
        var context = this, args = arguments;
        var later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

const process = [
    {
        step: "01",
        title: "Discovery",
        text: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim"
    },
    {
        step: "02",
        title: "Strategy",
        text: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim"
    },
    {
        step: "03",
        title: "Design",
        text: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim"
    },
    {
        step: "04",
        title: "Apply",
        text: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim"
    },
    {
        step: "05",
        title: "Launch",
        text: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim"
    }
]

var mySwiper = new Swiper('.process-swiper', {
    // Optional parameters
    slidesPerView: 'auto',
    spaceBetween: 40,
    centeredSlides: true,
    initialSlide: 0,
    loop: true,

    // Navigation dots
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
})

mySwiper.on('slideChange', function (e) {
    const index = mySwiper.realIndex;

    $("#process-step").text(process[index].step);
    $("#process-title").text(process[index].title);
    $("#process-text").text(process[index].text);
})

var servicesSwiper = new Swiper('.services-swiper', {
    // Optional parameters
    slidesPerView: 'auto',
    spaceBetween: 40,
    // centeredSlides: true,
    initialSlide: 0,
    // loop: true,

    // Navigation dots
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
})


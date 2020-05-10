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
        title: "Discovery Meeting",
        text: "The purpose of this call is for us to get to know each other. While I discover what makes your business great, I’ll also give you more insight on what you can expect from me when we work together."
    },
    {
        step: "02",
        title: "On Boarding",
        text: "Now that we’ve met, I’ll draft up a design proposal for you. A design proposal lists out the design services I think would be best for your business’s success. Next, a signed contract and deposit secures your spot on my calendar. With the logistics out of the way, you’ll receive an email with hassle-free online tools that keep this process easy, enjoyable and organized."
    },
    {
        step: "03",
        title: "Strategy",
        text: "The design strategy focuses on helping you to know exactly who you are as a company. We dive deep into understanding who your customer is so that you can become a trusted source in your industry. Solving your customers most common pain-points creates an authentic connection, which helps your visitors to feel secure doing business with you."
    },
    {
        step: "04",
        title: "Design",
        text: "Once we clearly understand how to target your ideal audience, we can then start the design process(yay!). When designing, I keep your ideal client in mind and make sure to create graphics that will attract them to your products and services. And of course, we’ll create a visual language you’ll feel confidant and proud to share."
    },
    {
        step: "05",
        title: "Apply",
        text: "Having a thoroughly thought out brand means applying it to real-world situations. Weather designing your website or creating social media graphics, your visual identity is applied to the content that matters most for your business. To me, seeing your brand in action is the most exciting part!"
    }
]

var mySwiper = new Swiper('.process-swiper', {
    // Optional parameters
    slidesPerView: 'auto',
    spaceBetween: 40,
    centeredSlides: true,
    initialSlide: 0,
    loop: true,
    slideToClickedSlide: true,

    // Navigation dots
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },

    navigation: {
        nextEl: '.arrow img',
    }
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


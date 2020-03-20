// $(window).on("resize", function (e) {
//     console.log(e);
//     if (e.target.innerWidth >= 992) {
//         $(".nav-banner .nav-brand").hide();
//     } else {
//         $(".nav-banner .nav-brand").show();
//     }
// })

// $(document).ready(function (e) {
//     console.log($(window).width());
//     if ($(window).width() >= 992) {
//         $(".nav-banner .nav-brand").hide();
//     }
// })

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
});
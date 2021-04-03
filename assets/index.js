$(".show-more").click(function () {
    if($(".text").hasClass("show-more-height")) {
        $(this).text("Afficher moins");
    } else {
        $(this).text("Lire la suite");
    }

    $(".text").toggleClass("show-more-height");
});

$(".show-more1").click(function () {
    if($(".text1").hasClass("show-more-height1")) {
        $(this).text("Afficher moins");
    } else {
        $(this).text("Lire la suite");
    }

    $(".text1").toggleClass("show-more-height1");
});

$("#menu_mobile #menuIcon").click(function () {
    $('.menu_banner_mobile').toggleClass('displayMenu');
    
});

$('.menu_banner_mobile__close').click(function () {
    $('.menu_banner_mobile').toggleClass('displayMenu');
});
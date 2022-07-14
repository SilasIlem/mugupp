'use strict';

document.getElementById('navopener').addEventListener('click', () => {
    document.getElementById('navlinks').classList.toggle('open');
    document.getElementById('navopener').classList.replace('bi-justify-right', 'bi-x')
    document.querySelector('#navlinks').addEventListener('click', () => {
        document.querySelector('#navlinks').classList.remove('open');
        document.getElementById('navopener').classList.replace('bi-x', 'bi-justify-right')
    });
});

window.addEventListener('scroll', () => {
    document.getElementById('nav').classList.toggle('header', window.scrollY > 0);
    document.getElementById('navopener').classList.toggle('showopener', window.scrollY > 0);
});

document.getElementById('login-opener')?.addEventListener('click', () => {
    document.getElementById('landing-bin').classList.toggle('log');
    document.getElementById('login-opener').classList.toggle('login-shows');
    alert(document.getElementById('container').display.scollY);
});

function toggle_login() {
    if (document.getElementById('login-opener')){
        document.getElementById('landing-bin').classList.toggle('log');
        document.getElementById('login-opener').classList.toggle('login-shows');
    }
}

toggle_login();

$('.set-bg').each(function () {
    var bg = $(this).data('setbg');
    $(this).css('background-image', 'url(' + bg + ')');
});

var hero_s = $(".hero-items");
var thumbnailSlider = $(".thumbs");
var duration = 500;
var syncedSecondary = true;

setTimeout(function () {
    $(".cloned .item-slider-model a").attr("data-fancybox", "group-2");
}, 500);

// carousel function for main slider
hero_s.owlCarousel({
        loop: true,
        nav: false,
        navText: ['<i class="arrow_carrot-left"></i>', '<i class="arrow_carrot-right"></i>'],
        items: 1,
        dots: false,
        autoplay: true,
        animateOut: 'fadeOut',
        smartSpeed: 1200,
        autoHeight: false,
    }).on("changed.owl.carousel", syncPosition);

// carousel function for thumbnail slider
thumbnailSlider.on("initialized.owl.carousel", function () {
    thumbnailSlider
        .find(".owl-item")
        .eq(0)
        .addClass("current");
}).owlCarousel({
    loop: false,
    items: 3,
    nav: false,
    margin: 0,
    smartSpeed: 1200,
    responsive: {
        320: {
            items: 2,
            margin: 3
        },
        480: {
            items: 3,
            margin: 3
        },
        768: {
            items: 3,
            margin: 3
        },
        1200: {
            items: 3,
            margin: 3
        }
    }
})
.on("changed.owl.carousel", syncPosition2);

// on click thumbnaisl
thumbnailSlider.on("click", ".owl-item", function (e) {
    e.preventDefault();
    var number = $(this).index();
    hero_s.data("owl.carousel").to(number, 300, true);
});

function syncPosition(el) {
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
        current = count;
    }
    if (current > count) {
        current = 0;
    }

    thumbnailSlider
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
    var onscreen = thumbnailSlider.find(".owl-item.active").length - 1;
    var start = thumbnailSlider
        .find(".owl-item.active")
        .first()
        .index();
    var end = thumbnailSlider
        .find(".owl-item.active")
        .last()
        .index();

    if (current > end) {
        thumbnailSlider.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
        thumbnailSlider.data("owl.carousel").to(current - onscreen, 100, true);
    }
}

function syncPosition2(el) {
    if (syncedSecondary) {
        var number = el.item.index;
        slider.data("owl.carousel").to(number, 100, true);
    }
}

$(".top-courses-carousel").owlCarousel({
    items: 1,
    dots: false,
    autoplay: true,
    margin: 0,
    loop: true,
    smartSpeed: 1200,
    nav: true,
    navText: ["<i class='bi bi-angle-left'></i>", "<i class='bi bi-angle-right'></i>"]
});

$(".admins-carousel").owlCarousel({
    items: 4,
    dots: false,
    // autoplay: true,
    margin: 0,
    loop: true,
    smartSpeed: 1200,
    nav: true,
    navText: ["<i class='bi bi-caret-left'></i>", "<i class='bi bi-caret-right'></i>"],
    responsive: {
        320: {
            items: 1,
        },
        768: {
            items: 2,
        },
        992: {
            items: 3,
        },
        1200: {
            items: 4,
        }
    }
});

$(".partner-carousel").owlCarousel({
    items: 5,
    dots: false,
    autoplay: false,
    margin: 200,
    loop: true,
    smartSpeed: 1200,
    responsive: {
        320: {
            items: 2,
            margin: 100,
        },
        480: {
            items: 3,
            margin: 100,
        },
        768: {
            items: 3,
        },
        992: {
            items: 4,
        },
        1200: {
            items: 5,
        }
    }
});

$(".ps-slider").owlCarousel({
    items: 5,
    dots: false,
    autoplay: false,
    margin: 10,
    loop: true,
    smartSpeed: 1200
});

/*------------------------
    Testimonial Slider
----------------------- */
$(".testimonial-slider").owlCarousel({
    items: 1,
    dots: true,
    autoplay: true,
    margin: 10,
    loop: true,
    smartSpeed: 1200
});

$('.video-popup').magnificPopup({
    type: 'iframe'
});

$('select').niceSelect();
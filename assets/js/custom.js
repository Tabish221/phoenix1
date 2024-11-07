$(document).ready(function () {
    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");
    $('[href="#"]').attr("href", "javascript:;");

    $('.closePop,.overlay').click(function () {
        $('.popupMain').fadeOut();
        $('.overlay').fadeOut();
    });


});

var swiper = new Swiper('.phoenix-marquee', {
    direction: 'horizontal',
    loop: true,
    speed: 12000, // Adjust speed for smoother/faster scroll
    autoplay: {
        delay: 0, // No delay between scrolls
        disableOnInteraction: false,
    },
    slidesPerView: 'auto',
    spaceBetween: 90, // Adjust spacing between slides if needed
});


var main_swiper = new Swiper('.mainSwiper', {
    grabCursor: true,
    speed: 900,
    spaceBetween: 0,
    slidesPerView: "auto",
    effect: 'coverflow',
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideSbadows: false,
    },
    mousewheel: {
        invert: false,
        threshildDelta: 50,
        sensitivity: 1,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// Tabbing JS
$('[data-targetit]').on('click', function (e) {
    $(this).addClass('current');
    $(this).siblings().removeClass('current');
    var target = $(this).data('targetit');
    $('.' + target).siblings('[class^="box-"]').hide();
    $('.' + target).fadeIn();
    $(".tab-slider").slick("setPosition");
});




// // Select loader and loading text elements
const loader = document.getElementById("loader");
const loadingText = document.getElementById("loading-text");
const content = document.getElementById("site-wrapper");

// Function to update loading percentage
function updateLoadingProgress() {
  let percentage = 0;
  let interval = setInterval(() => {
    if (percentage < 100) {
      percentage++;
      loadingText.textContent = 'Loading side data...' + percentage + "%";
    } else {
      clearInterval(interval);
      setTimeout(() => {
        $(loadingText).fadeOut();
        $('#loading-text2').fadeIn();
        $('.afterLoad-text').css('opacity', '1');
        $('.loaderWraper').addClass('fullLoaderWraper');
        $(content).fadeIn();
      }, 500);
    //   loader.style.display = "none";  // Hide loader
    //   content.style.display = "block";  // Show content
    }
  }, Math.floor(Math.random() * 50)); // Adjust the interval speed as needed
}

// Run the loading progress function on window load
window.addEventListener("load", updateLoadingProgress);


$(document).on('click', '.fullLoaderWraper, #loading-text2', () => {
    $('#loader').fadeOut();
})











/* RESPONSIVE JS */
if ($(window).width() < 825) {
}

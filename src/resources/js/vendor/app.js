$(document).foundation();
$(document).ready(function(){
    $('.slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 3,
        centerMode: true,
        centerPadding: '60px',
    });
});
$(".fancybox").fancybox();

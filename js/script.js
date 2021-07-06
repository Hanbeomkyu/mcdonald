$('.menu_btn').click(function(){
    $('.main_menu').stop().animate({'right':0},500).show();
    $(this).css('display','none');
    $('.close_btn').css('display','block');
});
$('.close_btn').click(function(){
    $('.main_menu').stop().animate({'right':'-100%'},500).hide();
    $(this).css('display','none');
    $('.menu_btn').css('display','block');
});

$('.main_menu>ul>li').click(function(){
    $(this).toggleClass('on');
    if($(this).hasClass('on')){
        $('.first_menu>ul').slideDown(500);
    } else{
        $('.first_menu>ul').slideUp(500);
    }
});

//swiper
var swiper = new Swiper(".mySwiper",{
    loop:true,
    autoplay:{
        delay:2000,
        disableOnInteraction: false,
    },
    navigation:{
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    },
});
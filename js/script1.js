
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


function slideMenu(){
    $('.main_menu>ul>li').click(function(){
        $(this).toggleClass('on');
        if($(this).hasClass('on')){
            $('.first_menu>ul').slideDown(500);
        } else{
            $('.first_menu>ul').slideUp(500);
        }
    });
}

function changeImg(){
    
    const srcBox = {
        dan: [
            "img/dan/bts_set.png",
            "img/dan/triplecheese.png",
            "img/dan/bigmac.png",
            "img/dan/sanghi.png",
            "img/dan/1955.png",
            "img/dan/doublefileo.png",
            "img/dan/file.png",
            "img/dan/mcchicken.png",
            "img/dan/chicken.png",
        ],
        set: [
            "img/set/1.png",
            "img/set/2.png",
            "img/set/3.png",
            "img/set/4.png",
            "img/set/5.png",
            "img/set/6.png",
            "img/set/7.png",
            "img/set/8.png",
            "img/set/9.png",
            "img/set/10.png"
        ]
    }

    

    $('.burger-list>.list>li>a').click(function(){
        // 클래스를 추가 혹은 제거
        $(this).parent('li').addClass('active').siblings().removeClass('active');



        
        // 이미지 경로 변경
        const menus = $('.card-list>li');

        menus.eq(0).find('img').src="jhkhkjh";

        if($('.dan').hasClass('active')){
            for(let i = 0; i < menus.length; i++){
                
                menus.eq(i).find('img').attr("src", srcBox.dan[i]);
                

            }
        } else{
            for(let i = 0; i < menus.length; i++){
                menus.eq(i).find('img').attr("src", srcBox.set[i]);
            }
        }
        return false;
    });
}



function init (){
    slideMenu();
    changeImg();
}

init();


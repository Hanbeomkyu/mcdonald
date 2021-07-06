<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>맥도날드</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/24ba2cef07.js" crossorigin="anonymous"></script>
    <script src="js/script.js" defer></script>
</head>
<body>
    <?php
        session_start();//보안떄문에 시작할때 사용
        if(isset($_SESSION["userid"])){
            $userid=$_SESSION["userid"];
        }else{
            $userid="";
        }
        if(isset($_SESSION["username"])){
            $username=$_SESSION["username"];
        }else{
            $username="";
        }
    ?>
    <header id="header">
       <div class="header_wrap">
            <h1 class="logo"><a href="index.php"><img src="img/bg_img_logo.png" alt="logo"></a></h1>
            <div class="btn-wrap">
                <button class="menu_btn"><img src="img/bg_ico_menu.png" alt="menubtn"></button>
                <button class="close_btn"><img src="img/bg_ico_closebtn.png" alt="closebtn"></button>
           </div>
            <nav class="main_menu">
                <?php
                        if(!$userid){
                    ?>
                    <a href="login_form.php" class="login_btn">
                    로그인하기
                    </a>
                    <?php
                        }else{
                            $logged=$username."님";
                    ?>
                    <li class="logged"><?=$logged?></li>
                    <li class="logout"><a href="logout.php">로그아웃</a></li>
                    <?php
                        }
                    ?>
                <ul>
                    <li class="first_menu">
                        <a href="#">Menu</a>
                        <ul class="twoD">
                            <li><a href="burger.php">버거</a></li>
                            <li><a href="#">맥런치</a></li>
                            <li><a href="#">맥모닝</a></li>
                            <li><a href="#">해피스낵</a></li>
                            <li><a href="#">사이드&디저트</a></li>
                            <li><a href="#">맥카페&음료</a></li>
                            <li><a href="#">해피밀</a></li>
                        </ul>
                    </li>
                    <li class="first_menu"><a href="#">Store</a></li>
                    <li class="first_menu"><a href="#">What's New</a></li>
                    <li class="first_menu"><a href="#">Story</a></li>
                </ul>
            </nav>
       </div>
    </header>
    <main id="imgslide">
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="img/imgslide1.png" alt="imgslide1"></div>
                <div class="swiper-slide"><img src="img/imgslide2.png" alt="imgslide2"></div>
                <div class="swiper-slide"><img src="img/imgslide3.png" alt="imgslide3"></div>
                <div class="swiper-slide"><img src="img/imgslide4.png" alt="imgslide4"></div>
                <div class="swiper-slide"><img src="img/imgslide5.png" alt="imgslide5"> </div>
                <div class="swiper-slide"><img src="img/imgslide6.png" alt="imgslide6"></div>
                <div class="swiper-slide"><img src="img/imgslide7.png" alt="imgslide7"></div>
                <div class="swiper-slide"><img src="img/imgslide8.png" alt="imgslide8"></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
    </main>
    <section id="contents">
        <div class="card-banner">
            <h2>McDonald’s LIVE</h2>
            <ul class="card-list">
                <li>
                    <a href="detail.php">
                        <img src="img/cardimg1.png" alt="cardimg1">
                        <strong>기간한정 콜라보<br>THE BTS 세트</strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/cardimg2.png" alt="cardimg2">
                        <strong>
                            육즙도 3배! 진한<br>
                            풍미도 3배<br>
                            트리플 치즈버거<br>
                            출시!
                        </strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/cardimg3.png" alt="cardimg3">
                        <strong>
                            여름시즌 새로워진<br> 
                            해피스낵을<br>
                            만나보세요!
                        </strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/cardimg4.png" alt="cardimg4">
                        <strong>
                            두가지 인기버거추가!<br>
                            더욱 다양해진 New
                            맥런치 출시!
                        </strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/cardimg5.png" alt="cardimg5">
                        <strong>
                            두툼해서 더맛있는<br>
                            웨지 후라이 출시!
                        </strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/cardimg6.png" alt="cardimg6">
                        <strong>
                            신선한 맛 가득담아<br>
                            알래스카에서 왔다! <br>
                            필레 오 피쉬 출시! <br>   
                        </strong>
                    </a>
                </li>
            </ul>
        </div>
        <div class="more-btn">
            <img src="img/btn_more.png" alt="more-btn">
        </div>
        <a class="top-btn" href="#header"></a>
    </section>
    <footer id="footer">
        <div class="futil">
            <a href="#">개인정보처리방침</a>
            <a href="#">위치정보 이용약관</a>
            <a href="#">사이트맵</a>
            <a href="#">임차문의</a>
            <a href="#">고객문의</a>
            <a href="#">인재채용</a>
            <a href="#">PC버전</a>
            <a href="#">ENG</a>
        </div>
        <div class="finfo">
            <ul>
                <li>한국맥도날드(유)</li>
                <li>대표이사: 앤토니 마티네즈</li>
                <li>사업자등록번호: 101-81-26409</li>
                <li>전화주문: 1600-5252</li>
            </ul>
            <small>
                COPYRIGHT© 2019 ALL RIGHTS RESERVED<br>
                BY McDonald’s   
            </small>
        </div>
        
    </footer>
</body>
</html>
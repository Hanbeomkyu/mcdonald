<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>버거 - 맥도날드</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style_sub.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/24ba2cef07.js" crossorigin="anonymous"></script>
    <script src="js/script1.js" defer></script>
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
                             <li><a href="burger.html">버거</a></li>
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
    <main id="banner">
        <h1>버거</h1>
        <img src="img/burger_banner.jpg" alt="banner">
    </main>
    <section id="contents">
        <div class="burger-list">
            <ul class="list">
                <li class="dan active"><a href="#">단품메뉴</a></li>
                <li class="set"><a href="#">세트메뉴</a></li>
            </ul>
            <p>20products</p>
            <ul class="card-list">
                <li>
                    <a href="detail.php">
                        <img src="img/dan/bts_set.png" alt="bts_set">
                        <span>BTS 세트</span>
                        <strong>THE BTS 세트</strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/dan/triplecheese.png" alt="triplecheese">
                        <span>트리플치즈버거</span>
                        <strong>Triple cheeseburger</strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/dan/bigmac.png" alt="bigmac">
                        <span>빅맥</span>
                        <strong>Big Mac</strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/dan/sanghi.png" alt="shanghai">
                        <span>맥스파이시®상하이버거</span>
                        <strong>McSpicy®ShanhaiBurger</strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/dan/1955.png" alt="1955">
                        <span>1955®버거</span>
                        <strong>1955®버거</strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/dan/doublefileo.png" alt="Double Filet-O-Fish">
                        <span>더블 필레오 피쉬</span>
                        <strong>Double Filet-O-Fish</strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/dan/file.png" alt="Filet-O-Fish">
                        <span>필레오 피쉬</span>
                        <strong>Filet-O-Fish</strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/dan/mcchicken.png" alt="mac">
                        <span>맥치킨 모짜렐라</span>
                        <strong>McChicken® Mozzarella</strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/dan/chicken.png" alt="mcchicken">
                        <span>맥치킨®</span>
                        <strong>McChicken®</strong>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/dan/double.png" alt="double">
                        <span>더블 불고기버거</span>
                        <strong>Double Bulgogi Burger</strong>
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
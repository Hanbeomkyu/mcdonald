<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 - 맥도날드</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="stylesheet" href="css/style_login.scss">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/24ba2cef07.js" crossorigin="anonymous"></script>
    <script src="js/script1.js" defer></script>
    <script src="js/login.js"></script>
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
    <div class="login">
        <h1>로그인</h1>
        <form action="login.php" method="post" name="login_form">
            <input type="text" name="id" placeholder="아이디"/>
            <input type="password" id="pass" placeholder="비밀번호" name="pass"/>
            <div class="login_btn">
				<a href="#"><img src="img/login.png" alt="login" onclick="check_input()"/></a>
			</div>
        </form>
        <div class="member">
            <p><input type="checkbox" id="auto-login"></input><label for="auto-login">자동로그인</label></p>
            <a href="member_form.php">회원가입</a>
            <a href="#">아이디/비밀번호찾기</a>
        </div>
        <div class="sns_login">
            <a href="#" class="apple">애플로 로그인하기</a>
            <a href="#" class="facebook">페이스북으로 로그인하기</a>
            <a href="#" class="google">구글로 로그인하기</a>
        </div>
    </div>
</body>
</html>
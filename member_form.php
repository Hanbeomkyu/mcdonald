<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 - 맥도날드</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style_member.css">
    <link rel="stylesheet" href="css/style_member.scss">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/24ba2cef07.js" crossorigin="anonymous"></script>
    <script src="js/script1.js" defer></script>
	<script type="text/javascript">
		function check_input(){
			
			if(!document.member_form.id.value){
				alert('아이디를 입력해주세요');
				document.member_form.id.focus();
				return;
			}
			if(!document.member_form.pass.value){
				alert('비밀번호를 입력해주세요');
				document.member_form.pass.focus();
				return;
			}
			if(!document.member_form.pass_confirm.value){
				alert('비밀번호확인을 해주세요');
				document.member_form.pass_confirm.focus();
				return;
			}
			if(!document.member_form.name.value){
				alert('이름를 입력해주세요');
				document.member_form.name.focus();
				return;
			}
			if(!document.member_form.email1.value){
				alert('이메일을 입력해주세요');
				document.member_form.email1.focus();
				return;
			}
			if(!document.member_form.email2.value){
				alert('이메일을 입력해주세요');
				document.member_form.email2.focus();
				return;
			}
			if(document.member_form.pass.value != document.member_form.pass_confirm.value){
				alert("비밀번호가 일치하지 않습니다. \n 다시 입력해 주세요!!");
				document.member_form.pass.focus();
				document.member_form.pass.select();
				return;
			}
			
			document.member_form.submit();
		}
		function check_id(){
			window.open("member_check_id.php?id=" + document.member_form.id.value, "IDcheck", "left=700, top=300, width=350, height=120, scrollbars=no, resizable=yes");
		}
	</script>
</head>
<body>
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
    <div class="member">
        <form action="member_insert.php" method="post" name="member_form">
            <h1>회원가입</h1>
            <div class="form id">
                <div class="col1">아이디</div>
                <div class="col2"><input type="text" name="id"/></div>
                <div class="col3"><a href="#" class="checkBtn" onclick="check_id()">중복확인</a></div>
            </div>
            <div class="form pass">
                <div class="col1">비밀번호</div>
                <div class="col2"><input type="password" name="pass"/></div>
            </div>
            <div class="form pass1">
                <div class="col1">비밀번호확인</div>
                <div class="col2"><input type="password" name="pass_confirm"/></div>
            </div>
            <div class="form name">
                <div class="col1">이름</div>
                <div class="col2"><input type="text" name="name"/></div>
            </div>
            <div class="form email">
                <div class="col1">이메일</div>
                <div class="col2"><input type="text" name="email1"/>@ <input type="text" name="email2"/></div>
            </div>
            <div class="member_btn"><a href="#" onclick="check_input()">회원가입</a></div>
        </form>
    </div>
</body>
</html>
<!doctype html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>php입문</title>
	<link rel="stylesheet" href="./css/common.css"/>
	<link rel="stylesheet" href="./css/member.css"/>
	<script src="./js/member_modify.js"></script>
</head>
<body>
	<header>
		<?php include "header.php"?>
	</header>
	<?php
		$con=mysqli_connect('localhost','beomk','Gks320178!','beomk');
		//mysql 서버 접속('서버host','사용자계정','비밀번호','데이터베이스(닷홈아이디)')
		
		$sql="select * from members where id='$userid'";
		//members 테이블에 회원가입시 저장한 데이터를 가져옴
		$result=mysqli_query($con, $sql);
		//아이디 검색-사용자가 입력한 아이디를 members 테이블에서 검색하고 그결과를 $result에 저장
		
		$row=mysqli_fetch_array($result);
		//mysqli_num_rows($result)함수를 이용해서 검색 결과로 저장된 레코드 개수를 저장
		
		$pass=$row["pass"];//DB에 가져온 비밀번호 저장
		$name=$row["name"];//DB에 가져온 이름 저장
		
		$email=explode("@", $row["email"]);//explode 이메일 주소 분리
		$email1=$email[0];// 배열구조로 @를 기점으로 앞에 있는것
		$email2=$email[1];// 배열구조로 @를 기점으로 뒤에 있는것
		
		mysqli_close($con);
		//mysqli_close함수를 이용해서 mysql 서버와의 연결을 끊는다
		//mysqli_close(인자값-연결식별자);
		
	?>
	<section>
		<div id="main_img_bar">
			<img src="./img/main_img.png" alt="mainimg"/>
		</div>
		<div id="main_content">
			<div id="join_box">
				<form action="member_modify.php?id=<?=$userid?>" method="post" name="member_form">
					<h2>회원가입</h2>
					<div class="form id">
						<div class="col1">아이디</div>
						<div class="col2"><?=$userid?></div>
					</div>
					<div class="clear"></div>
					<div class="form">
						<div class="col1">비밀번호</div>
						<div class="col2"><input type="password" name="pass" value="<?=$pass?>" /></div>
					</div>
					<div class="clear"></div>
					<div class="form">
						<div class="col1">비밀번호 확인</div>
						<div class="col2"><input type="password" name="pass_confirm"/></div>
					</div>
					<div class="clear"></div>
					<div class="form">
						<div class="col1">이름</div>
						<div class="col2"><input type="text" name="name" value="<?=$name?>"/></div>
					</div>
					<div class="clear"></div>
					<div class="form email">
						<div class="col1">이메일</div>
						<div class="col2"><input type="text" name="email1" value="<?=$email1?>"/>@ <input type="text" name="email2" value="<?=$email2?>"/></div>
					</div>
					<div class="clear"></div>
					<div class="bottom_line"></div>
					<div class="buttons">
						<img src="./img/button_save.gif" alt="저장하기" onclick="check_input()"/> &nbsp;
						<img src="./img/button_reset.gif" alt="취소하기" onclick="reset_form()"/>
					</div>
				</form>
			</div>
		</div>
	</section>
	<footer>
		<?php include "footer.php"?>
	</footer>
</body>
</html>
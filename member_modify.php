<?php header("Content-type:text/html; charset=utf-8");?>

<?php
	$id=$_GET["id"];//아이디 전달받기 action
	
	$pass=$_POST["pass"];//회원정보 양식에서 사용자가 입력한 값들
	$name=$_POST["name"];
	$email1=$_POST["email1"];
	$email2=$_POST["email2"];
	
	$email=$email1."@".$email2;
	
	$con=mysqli_connect('localhost','beomk','Gks320178!','beomk');
	//mysql 서버 접속('서버host','사용자계정','비밀번호','데이터베이스(닷홈아이디)')
	
	$sql="update members set pass='$pass', name='$name', email='$email'";
	//DB업데이트 -해당 아이디를 가진 레코드의 비밀번호, 이름, 이메일 수정
	$sql .="where id='$id'";
	mysqli_query($con, $sql);
	//mysqli_query함수를 이용해서 mysql 명령실행
	
	mysqli_close($con);
	//mysqli_close함수를 이용해서 mysql 서버와의 연결을 끊는다
	//mysqli_close(인자값-연결식별자);
	
	echo "<script> location.href='index.php'; </script>";
?>
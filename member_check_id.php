<!doctype html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>php입문</title>
	<link rel="stylesheet" href="css/member_check.css"/>
</head>
<body>
	<h3>아이디 중복체크</h3>
	<p>
		<?php
			$id=$_GET["id"];
			if(!$id){//아이디가 없으면
				echo("<li>아이디를 입력해 주세요</li>");
			}else{
				$con=mysqli_connect('localhost','beomk','Gks320178!','beomk');
				
				$sql="select * from members where id='$id'";
				//members 테이블에 동일한 아이디가 있는지 검사
				
				$result=mysqli_query($con, $sql);
				
				$num_record= mysqli_num_rows($result);
				
				if($num_record){//만약에 $num_record가 값을 가지며 DB에 동일한 아이디가 존재한다면
					echo "<li>".$id."아이디는 중복됩니다.</li>";
					echo "<li>다른 아이디를 사용해 주세요</li>";
					
				}else{
					echo "<li>".$id."사용가능한 아이디입니다.</li>";
				}
				mysqli_close($con);
			}
		?>
	</p>
</body>
</html>
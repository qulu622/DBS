<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>註冊成功</title>
</head>



<body>  
  <a href="index.php">回圖書館首頁</a>
  <br><br>
  
  <?php
    $user_name = $_POST['name'];
    $user_id = $_POST['id'];
    $user_pwd = $_POST['pwd'];
    $user_email = $_POST['email'];
	  
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "library";
	
    $connect = mysqli_connect($servername,$username,$password,$dbname);
	/*
	if ($connect)
	  echo "connect ok .'<br>'";
	*/
	$set = mysqli_set_charset($connect,"utf8");
	
	/*
	$sql = "SELECT * FROM 書籍";
	$data = mysqli_query($connect,$sql);
	
	if (mysqli_num_rows($data) > 0) {
	  while ($row = mysqli_fetch_row($data))
	    echo "$row[0]	$row[1]	$row[2]	$row[3]<br>";
	}
	*/

    $new = "INSERT INTO 使用者(ID,姓名,帳號,密碼,Email,已借數量) 
            VALUES(NULL,'$user_name','$user_id','$user_pwd','$user_email','0')";
    // echo "<br>$new<br>";
	$query = mysqli_query($connect,$new);

    if ($query)
	  echo '註冊成功';
	else
	  echo '註冊失敗';
	
	mysqli_close($connect);
  ?>
</body>
</html>
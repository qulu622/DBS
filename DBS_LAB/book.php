<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>借閱書本</title>
</head>

<body>
  <?php
    $book = $_POST['book'];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "library";
	
	$connect = mysqli_connect($servername,$username,$password,$dbname);
	$set = mysqli_set_charset($connect,"utf8");
	
	$sql = "SELECT 姓名,帳號,密碼 FROM 使用者";
	$query = mysqli_query($connect,$sql);
  ?>
</body>
</html>
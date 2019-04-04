<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>使用者介面</title>
</head>

<body>
  <a href="index.php">回圖書館首頁</a>
  <br><br>
  <a href="user.php">回上一頁</a>
  <br><br>
  <p>
    <?php
    $user_id = $_POST['user_id'];
    $user_pwd = $_POST['user_pwd'];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "library";
	
	$connect = mysqli_connect($servername,$username,$password,$dbname);
	$set = mysqli_set_charset($connect,"utf8");
	
	$sql = "SELECT 姓名,帳號,密碼 FROM 使用者";
	$query = mysqli_query($connect,$sql);
	
	$tmp = 0;
	
	if (mysqli_num_rows($query) > 0) {
	  while ($row = mysqli_fetch_row($query)) {
		  if ($row[1] == $user_id && $row[2] == $user_pwd) {
		    echo "登入成功<br>";
			echo "歡迎~ $row[0] ~光臨本圖書館<br>";
			$tmp = 1;
			break;
		  }
	  }
	  if ($tmp == 0) {
	    echo "帳號或密碼有誤<br>";
		echo "請回上一頁重新輸入帳號和密碼<br>";
	  }
	}
  ?>
  <?php
    if ($tmp == 1) {
      $sql = "SELECT * FROM 書籍";
	  $book = mysqli_query($connect,$sql);
  ?>
  <form action="" method="get">
    <label for="textfield"></label>
    <p>請複製要借閱的書本之ISBN至右方框框中</p> 
    <input type="text" name="book" id="textfield" />
    <input type="submit" name="button" id="button" value="我要借這本" />
  </form>
  <?php
    /*
    $book_isbn = $_GET['book'];
	echo $book_isbn;
	echo '<br><br>';
	*/
  ?>
  </p>
    <table width="1080" border="2">
    <tr>
      <td width="197">ISBN</td>
      <td width="272">書名</td>
      <td width="123">作者</td>
      <td width="107">類別</td>
      <td width="78">館藏狀態</td>
      <td width="73">借閱人ID</td>
      <td width="182">歸還日期</td>
    </tr>
    
    <?php
	  for ($i = 0; $i < mysqli_num_rows($book); $i++) {
	    $row = mysqli_fetch_row($book); 
	?>
    <tr>
      <td><?php echo $row[0] ?></td>
      <td><?php echo $row[1] ?></td>
      <td><?php echo $row[2] ?></td>
      <td><?php echo $row[3] ?></td>
      <td><?php 
	        if ($row[4] == 1)
			  echo '可借閱';
			else
			  echo '出借中'; 
		  ?>
      </td>
      <td><?php echo $row[5] ?></td>
      <td><?php echo $row[6] ?></td>
    </tr>
    <?php
	  }
	?>
  </table>
  <p>&nbsp;</p>
  
  <?php
	}
    mysqli_close($connect);
  ?>
</body>
</html>
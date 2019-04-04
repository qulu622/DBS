<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理者登入</title>
</head>

<body>
  <form method="post" action="manager_page.php">
  <p>帳號: 
    <input type="text" name="manager_id"  id="textfield" maxlength="12" />
  </p>
  <p>密碼: 
    <input type="password" name="manager_pwd"  id="textfield2" maxlength="12" />
  </p>
  <p>
    <input type="submit" name="button"   id="button" value="登入" />
  </p>
  </form>
</body>
</html>
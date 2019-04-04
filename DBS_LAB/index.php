<!DOCTYPE html>
<html>
<title>wwwwwwww</title>

<body>
<div align="center">
  <?php
    echo "歡迎來到~喵owo圖書館~";
    echo '<br><br>';
  ?>
  
  <?php
    date_default_timezone_set("PRC");
    echo '<div id = "time"></div>
    <script type="text/javascript">
      var dayNames = new Array("星期日", "星期一", "星期二", "星期三", 
	                           "星期四", "星期五", "星期六");
	  function get_obj(time) {
	    return document.getElementById(time);
	  }
	  var ts = '.(round(microtime(true)*1000)).';
	  function getTime(){
	    var t = new Date(ts);
	    with(t){
	      var _time = getFullYear() + "/" + (getMonth()+1) + "/" + getDate()+ " " + 
		             (getHours()<10 ? "0" :"") + getHours() + ":" + 
				     (getMinutes()<10 ? "0" :"") + getMinutes() + ":" + 
				     (getSeconds()<10 ? "0" :"") + getSeconds() + " " +  
				      dayNames[t.getDay()];
	    }
	    get_obj("time").innerHTML = _time;
	    setTimeout("getTime()", 1000);
	    ts += 1000;
	  }
	  getTime();
    </script>';
    echo '<br>';
  ?>
  
  <?php
    $num = rand(1,10);
    echo "<img src = pic/$num.png />";
    echo '<br><br>';
  ?>
  
  <br><br>
  <a href="user.php">☆我是使用者☆</a>
  <br><br>
  <a href="manager.php">★我是管理者★~</a>
  <br><br>
  <a href="new.php">我還沒有帳號...</a>
  <br><br>  
</div>
</body>
</html>
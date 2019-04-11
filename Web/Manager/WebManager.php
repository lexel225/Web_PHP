<html>
<title></title>
<link rel=stylesheet type="text/css" href="../background.css">
<body  background="../bg2.jpg">

<center>
<b align=center><a href="../page2.php">回首頁</a></b>
<hr size=3 color="#999999">
</center>
	

	<?php
	if (!$passwd){ ?>
	<form name="Myform" method=post action="WebManager.php">
	請輸入管理者密碼:
	<input type=password name="passwd" width=100>
	<input type=submit>
	</form>	
	<?php
	}
	?>


	<?php
	if ($passwd==72225){ ?>
	   <center>
	   <a href='NewArticle.html' target=manage>新增文章</a>
	   <a href='Manager.php?num=0' target=manage>首頁文章</a> 
	   <a href='Manager.php?num=1' target=manage>留言版</a> 
	   <a href='Manager.php?num=5' target=manage>IP紀錄表</a>
	   <a href='note.html' target=manage>密碼紀錄本</a>
	   </center>
	   <hr size=3 color=yellow>
	   
	   <iframe width=500 height=1000 name="manage" frameborder=0></frame>
	
	<?php
	}
	else if ($passwd)
		echo "你的密碼不正確!!";
	?>


</body>
</html>

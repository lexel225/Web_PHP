<html>
<title></title>
<link rel=stylesheet type="text/css" href="../background.css">
<body  background="../bg2.jpg">

<center>
<b align=center><a href="../page2.php">�^����</a></b>
<hr size=3 color="#999999">
</center>
	

	<?php
	if (!$passwd){ ?>
	<form name="Myform" method=post action="WebManager.php">
	�п�J�޲z�̱K�X:
	<input type=password name="passwd" width=100>
	<input type=submit>
	</form>	
	<?php
	}
	?>


	<?php
	if ($passwd==72225){ ?>
	   <center>
	   <a href='NewArticle.html' target=manage>�s�W�峹</a>
	   <a href='Manager.php?num=0' target=manage>�����峹</a> 
	   <a href='Manager.php?num=1' target=manage>�d����</a> 
	   <a href='Manager.php?num=5' target=manage>IP������</a>
	   <a href='note.html' target=manage>�K�X������</a>
	   </center>
	   <hr size=3 color=yellow>
	   
	   <iframe width=500 height=1000 name="manage" frameborder=0></frame>
	
	<?php
	}
	else if ($passwd)
		echo "�A���K�X�����T!!";
	?>


</body>
</html>

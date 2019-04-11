<html>

<head>
<title>留言版</title>
<link rel=stylesheet type="text/css" href="../background.css">
<style>
A:link{
	text-decoration:none;
	color:#ee9900;
	cursor:hand;
	font-size:12pt;
}
A:visited{
	text-decoration:none;
	color:#ee9900;
	cursor:hand;
	font-size:12pt;
}
A:hover{
	text-decoration:underline;
	color:blue;
	cursor:hand;
	font-size:12pt;
}
</style>
</head>

<body background="../bg2.jpg" >

   <!------------------訪客的留言板--------------------------------------------------->
		
  <center>
	<font size=4>訪客的留言板</font>
  <a href="Message.html"><font size=2>[新增留言]</font></a>	
  <a href="Allguest.php" target=_blank><font size=2>[所有的留言]</font></a>
  </center>
	<hr size="1" noshade="noshade" style="border:2px #999999 dotted"/>
	
	<?php
	//---------------------建立資料庫連結，然後開啟資料庫
	$link=mysql_connect("localhost","root","eos4196");
	mysql_select_db("lexel",$link);

	//---------------------執行SQL指令，並將查詢結果儲存於 Recordset 中
	$sql="SELECT `date`,`name`,`msg`,`email`,`homepage`,`response` FROM `guest` order by `date` DESC LIMIT 0,10";
	$list = mysql_query($sql,$link);

	while(list($date,$name,$msg,$email,$homepage,$response) = mysql_fetch_row($list)){						
		echo "<font color=#000000><b><u>". substr($date,0,10) . "</u></b></font>";
		echo "&nbsp;";
		echo "<font color=#999999>" . substr($date,10,9) . "</font>";
		echo "&nbsp;&nbsp;&nbsp;";
		echo "<font color=brown>$name</font>";

		if ($email)
			echo "&nbsp;&nbsp;&nbsp;<a href=mailto:" . $email  . "><img src=EMAIL.jpg alt='寫信給" . $name . "' border=0></a>";

		if ($homepage)
			echo "&nbsp;&nbsp;&nbsp;<a href=$homepage target=_blank><img src=HOMEPAGE.jpg alt='參觀" . $name . "的個人網頁' border=0></a>";
		
		echo "<pre>$msg</pre>";
				
		if ($response)
			echo "<p style='padding:15px'><font size=2 color='#666666'>$response</font></p>";
		
		echo "<a href='Reply.php?ID=$date'><font size=2>[回覆此留言]</font></a><hr size=1 noshade='noshade' style='border:2px #999999 dotted'/>";			
	}

	//-------------------關閉 RecordSet 及資料庫連結
	mysql_close($link);
	?>
	<h3 align=center><a href="Message.html">[ 新增留言 ]</a>	<a href="Allguest.php" target=_blank>[ 所有的留言 ]</a></h3>
</body>

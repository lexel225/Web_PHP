<html>

<head>
<title>�d����</title>
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

   <!------------------�X�Ȫ��d���O--------------------------------------------------->
		
  <center>
	<font size=4>�X�Ȫ��d���O</font>
  <a href="Message.html"><font size=2>[�s�W�d��]</font></a>	
  <a href="Allguest.php" target=_blank><font size=2>[�Ҧ����d��]</font></a>
  </center>
	<hr size="1" noshade="noshade" style="border:2px #999999 dotted"/>
	
	<?php
	//---------------------�إ߸�Ʈw�s���A�M��}�Ҹ�Ʈw
	$link=mysql_connect("localhost","root","eos4196");
	mysql_select_db("lexel",$link);

	//---------------------����SQL���O�A�ñN�d�ߵ��G�x�s�� Recordset ��
	$sql="SELECT `date`,`name`,`msg`,`email`,`homepage`,`response` FROM `guest` order by `date` DESC LIMIT 0,10";
	$list = mysql_query($sql,$link);

	while(list($date,$name,$msg,$email,$homepage,$response) = mysql_fetch_row($list)){						
		echo "<font color=#000000><b><u>". substr($date,0,10) . "</u></b></font>";
		echo "&nbsp;";
		echo "<font color=#999999>" . substr($date,10,9) . "</font>";
		echo "&nbsp;&nbsp;&nbsp;";
		echo "<font color=brown>$name</font>";

		if ($email)
			echo "&nbsp;&nbsp;&nbsp;<a href=mailto:" . $email  . "><img src=EMAIL.jpg alt='�g�H��" . $name . "' border=0></a>";

		if ($homepage)
			echo "&nbsp;&nbsp;&nbsp;<a href=$homepage target=_blank><img src=HOMEPAGE.jpg alt='���[" . $name . "���ӤH����' border=0></a>";
		
		echo "<pre>$msg</pre>";
				
		if ($response)
			echo "<p style='padding:15px'><font size=2 color='#666666'>$response</font></p>";
		
		echo "<a href='Reply.php?ID=$date'><font size=2>[�^�Ц��d��]</font></a><hr size=1 noshade='noshade' style='border:2px #999999 dotted'/>";			
	}

	//-------------------���� RecordSet �θ�Ʈw�s��
	mysql_close($link);
	?>
	<h3 align=center><a href="Message.html">[ �s�W�d�� ]</a>	<a href="Allguest.php" target=_blank>[ �Ҧ����d�� ]</a></h3>
</body>

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
	<table align=center cellspacing=1 cellpadding=4 border=1>
	<tr ><td colspan=3 width=460  align=center >
	<font size=5 >�X�Ȫ��d���O</font>
	</td></tr>
	<?php
	//---------------------�إ߸�Ʈw�s���A�M��}�Ҹ�Ʈw
	$link=mysql_connect("localhost","root","eos4196");
	mysql_select_db("lexel",$link);

	//---------------------����SQL���O�A�ñN�d�ߵ��G�x�s�� Recordset ��
	$sql="SELECT date,name,msg,email,homepage,response FROM guest order by date DESC";
	$list = mysql_query($sql,$link);

	while(list($date,$name,$msg,$email,$homepage,$response) = mysql_fetch_row($list)){						
		echo "<tr><td>";
		echo "<font color=red>". substr($date,0,10) . "</font>";
		echo "&nbsp;";
		echo "<font color=blue>" . substr($date,10,9) . "</font>";
		echo "&nbsp;&nbsp;&nbsp;";		
		echo "<font color=green>" . $name . "</font>";

		if ($email)
			echo "&nbsp;&nbsp;&nbsp;<a href=mailto:" . $email  . "><img src=EMAIL.jpg alt='�g�H��" . $name . "' border=0></a>";

		if ($homepage)
			echo "&nbsp;&nbsp;&nbsp;<a href=" . $homepage . " target=new><img src=HOMEPAGE.jpg alt='���[" . $name . "���ӤH����' border=0></a>";
		

		echo "<pre><p style='{padding-left: 0.25cm};'>" .  $msg . "</p></pre>";
		
		
		if ($response)
			echo "<font size=2 color=brown><p>�p�����^��:<br>&nbsp;&nbsp;&nbsp;" . $response . "</font>";
		
		echo "</td></tr>";
	}
	?>
	</table>
	<?php
	//-------------------���� RecordSet �θ�Ʈw�s��
	mysql_close($link);
	?>
</body>

<html>
<head>
<title>Writes</title>
<link rel=stylesheet type="text/css" href="../background.css">
<STYLE TYPE="TEXT/CSS">
A:link{
	text-decoration:underline;
	color:#ee6600;
	cursor:hand;
	font-size:12pt;
}
A:visited{
	text-decoration:underline;
	color:#ee6600;
	cursor:hand;
	font-size:12pt;
}
A:hover{
	text-decoration:none;
	color:blue;
	cursor:hand;
	font-size:12pt;
}
</STYLE>
</head>

<body>

<hr size=3 color="#999999">

	<?php
	$link=mysql_connect("localhost","root","eos4196");
	mysql_select_db("lexel",$link);

	$sql = "SELECT `date`,`title`,`msg` FROM `write` WHERE `date`='$date'";
	$list = mysql_query($sql,$link) or die($sql);
	
	list($date,$title,$msg) = mysql_fetch_row($list);
	echo "<u><b>".substr($date,0,10)."</b></u>  ".$title."<p><pre>".$msg."</pre>";
	?>

</body>

</html>

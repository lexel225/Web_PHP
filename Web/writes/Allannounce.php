<html>

<head>
<link rel=stylesheet type="text/css" href="../background.css">
<STYLE TYPE="TEXT/CSS">

</STYLE>
</head>

<body>

	<hr>
	<?php
	$link=mysql_connect("localhost","root","eos4196");
	mysql_select_db("lexel",$link);
	
	$sql = "Select * From `announce` ORDER BY `date` DESC";
	$list = mysql_query($sql,$link) or die ($sql);

	while(list($date,$msg)= mysql_fetch_row($list)){
		echo "<u><b>".substr($date,0,10)."</b></u> ".substr($date,10,9)."<p><pre>".$msg."</pre><hr>";
	}
	
	?>

</body>
</html>

<html>
<head>
<title>Writes</title>
<link rel=stylesheet type="text/css" href="../background.css">
<STYLE TYPE="TEXT/CSS">
A:link{
	text-decoration:underline;
	color:#ee6600;
	cursor:hand;
	font-size:10pt;
}
A:visited{
	text-decoration:underline;
	color:#ee6600;
	cursor:hand;
	font-size:10pt;
}
A:hover{
	text-decoration:none;
	color:blue;
	cursor:hand;
	font-size:10pt;
}
</STYLE>
</head>

<body background="../bg2.jpg">

<script language="javascript"><!--
function showhide(what,what2,table){
	if (what.style.display=='none'){
		what.style.display='';
		what2.Open="";
		table.src="tab_open.gif";
	}
	else{
		what.style.display='none';
		what2.Closed="";
		table.src="tab_close.gif";
	}
}

function allannounce(){
	parent.write_frame.location.href="Allannounce.php";
}	
--></script>

	<?php
	$link=mysql_connect("localhost","root","eos4196");
	mysql_select_db("lexel",$link);
	?>
	
	<a href='../page2.php' target='frame2'><font size=3><b>回首頁</b></font></a><br>
	

	<span id="menu1" onClick="showhide(menu1outline,menu1sign,table1)" style="cursor:hand; font-Family:Verdana; font-weight:bold">
	<img id="menu1sign" src="tab_close.gif" name="table1"></img>回憶錄</span><br>
	<span id="menu1outline" style="display:'none'">
	<?php
	$sql = "SELECT `date`,`title` FROM `write` WHERE `type`=2 ORDER BY `date` DESC";
	$list = mysql_query($sql,$link) or die($sql);	
	while(list($date,$title) = mysql_fetch_row($list))
		echo "&nbsp;&nbsp;&nbsp;&nbsp;<img src='tab_tree.gif' width=17 height=18><a href='get.php?date=$date' target='write_frame'>" . substr($date,0,10) . " " . $title . "</a><br>";
	?>	
	</span>


	
	<span id="menu2" onClick="showhide(menu2outline,menu2sign,table2)" style="cursor:hand; font-Family:Verdana; font-weight:bold">
	<img id="menu2sign" src="tab_close.gif" name="table2"></img>我的電影院</span><br>
	<span id="menu2outline" style="display:'none'">
	<?php
	$sql = "SELECT `date`,`title` FROM `write` WHERE `type`=1 ORDER BY `date` DESC";
	$list = mysql_query($sql,$link) or die($sql);
	while(list($date,$title) = mysql_fetch_row($list)){
	        echo "&nbsp;&nbsp;&nbsp;&nbsp;<img src='tab_tree.gif'><a href='get.php?date=$date' target='write_frame'>" . substr($date,0,10) . " " . $title . "</a><br>";
	}
	?>
	</span>
	

	
	<span id="menu3" onClick="showhide(menu3outline,menu3sign,table3)" style="cursor:hand; font-Family:Verdana; font-weight:bold">
	<img id="menu3sign" src="tab_close.gif" name="table3"></img>生活小品</span><br>
	<span id="menu3outline" style="display:'none'">
	<?php
	$sql = "SELECT `date`,`title` FROM `write` WHERE `type`=0 ORDER BY `date` DESC";
	$list = mysql_query($sql,$link) or die($sql);
	while(list($date,$title) = mysql_fetch_row($list)){
	        echo "&nbsp;&nbsp;&nbsp;&nbsp;<img src='tab_tree.gif'><a href='get.php?date=$date' target='write_frame'>" . substr($date,0,10) . " " . $title . "</a><br>";
	}
	?>
	</span>
	

	<span id="menu4" onClick="showhide(menu4outline,menu4sign,table4)" style="cursor:hand; font-Family:Verdana; font-weight:bold">
	<img id="menu4sign" src="tab_close.gif" name="table4"></img>搞笑集</span><br>
	<span id="menu4outline" style="display:'none'">
	<?php
	$sql = "SELECT `date`,`title` FROM `write` WHERE `type`=3 ORDER BY `date` DESC";
	$list = mysql_query($sql,$link) or die($sql);
	while(list($date,$title) = mysql_fetch_row($list))
		echo "&nbsp;&nbsp;&nbsp;&nbsp;<img src='tab_tree.gif'><a href='get.php?date=$date' target='write_frame'>" . substr($date,0,10) . " " . $title . "</a><br>";
	?>
	</span>
	

	<span id="all" onClick="allannounce()" style="cursor:hand; font-Family:Verdana; font-weight:bold">
	<font style="text-decoration:none" color=green>
	<img id="all3sign" src="tab_none.gif">佈告欄</font></span><br>
	</span>
	
	<?php
	mysql_close($link);							
	?>
</body>

</html>

<html>
<head>
<title></title>
<link rel=stylesheet type="text/css" href="../background.css">
</head>

<body  background="../bg2.jpg">

	<?php
	switch ($num){
	 case 0:  //首頁文章
		echo "<table cellspacing=1 cellpadding=4 border=1>";
	 	echo "<tr ><td colspan=3 width=460  align=center >";
		echo "<font size=5 >首頁</font></td></tr>";
		$link=mysql_connect("localhost","root","eos4196");
		mysql_select_db("lexel",$link);
		//$sql="SELECT `date`,`msg` FROM announce order by `date` DESC"; //佈告欄
		$sql = "Select `date`,`msg` From `page2` ORDER BY `date` DESC";
		$list = mysql_query($sql,$link);
		while(list($date,$msg) = mysql_fetch_row($list)){
			echo "<tr><td>";
			echo "<u><b>".substr($date,0,10)."</b></u> ".substr($date,10,9)." <a href='Manager.php?num=2&table=page2&ID=$date'>[刪除]</a><p><pre>$msg</pre>";
			echo "</td></tr>";
		}
		echo "</table>";
		mysql_close($link);
		break;
	 case 1: //留言版
		echo "<table cellspacing=1 cellpadding=4 border=1>";
		echo "<tr ><td colspan=3 width=460  align=center >";
		echo "<font size=5 >訪客的留言板</font>";
		echo "</td></tr>";
		//---------------------建立資料庫連結，然後開啟資料庫
		$link=mysql_connect("localhost","root","eos4196");
		mysql_select_db("lexel",$link);
		//---------------------執行SQL指令，並將查詢結果儲存於 Recordset 中
		$sql="SELECT date,name,msg,email,homepage,response FROM guest order by date DESC";
		$list = mysql_query($sql,$link);
		while(list($date,$name,$msg) = mysql_fetch_row($list)){
			echo "<tr><td>";
			echo "<font color=red>". substr($date,0,10) . "</font>";
			echo "&nbsp;";
			echo "<font color=blue>" . substr($date,10,9) . "</font>";
			echo "&nbsp;&nbsp;&nbsp;";
			echo "<font color=green>$name</font> <a href='Manager.php?num=2&table=guest&ID=$date'>[刪除]</a>";
       	echo "<pre><p style='{padding-left: 0.25cm};'>$msg</p></pre>";			
			echo "</td></tr>";
		}
		echo "</table>";
		//-------------------關閉 RecordSet 及資料庫連結
		mysql_close($link);
		break;
	 case 2: //刪除
	 	$link=mysql_connect("localhost","root","eos4196");
		mysql_select_db("lexel",$link);
		$sql="DELETE FROM `$table` WHERE date='" . $ID . "'";
		mysql_query($sql,$link);
		mysql_close($link);
		break;
/*	 case 3: //秀出回覆視窗
		echo "<form method=post action='Manager.php'>";
		echo "<input type='hidden' name=num value=4>";
		echo "<input type='hidden' name=ID value='".$ID."'>";
		echo "回覆(".$name.")的留言<br>";
		echo "<textarea name=msg cols=30 rows=10></textarea>";
		echo "<input type=submit value='回覆'>";
		echo "</form>"; 
		break;
	 case 4: //回覆留言
		$link=mysql_connect("localhost","root","eos4196");
		mysql_select_db("lexel",$link);
		$sql="UPDATE guest SET response='" . $msg ."' WHERE date='" . $ID . "'";
	 	mysql_query($sql,$link);
		mysql_close($link);
	 	break;  */ 
	 case 5: // 秀出IP紀錄表 
		$link=mysql_connect("localhost","root","eos4196");
		mysql_select_db("lexel",$link);
		$sql="SELECT date,IP,count FROM IPtable order by date DESC";
	 	$list = mysql_query($sql,$link);
	 	echo "<table border=1>";
	 	while(list($date,$IP,$count) = mysql_fetch_row($list)){
			echo "<tr><td>$date</td><td>$IP</td><td>$count</td></tr>";
		}
		echo "</table>";
		mysql_close($link);
	 	break;	
	}
	?>


</body>

</html>

<html>
<head>
<title></title>
<link rel=stylesheet type="text/css" href="../background.css">
</head>

<body  background="../bg2.jpg">

	<?php
	switch ($num){
	 case 0:  //�����峹
		echo "<table cellspacing=1 cellpadding=4 border=1>";
	 	echo "<tr ><td colspan=3 width=460  align=center >";
		echo "<font size=5 >����</font></td></tr>";
		$link=mysql_connect("localhost","root","eos4196");
		mysql_select_db("lexel",$link);
		//$sql="SELECT `date`,`msg` FROM announce order by `date` DESC"; //�G�i��
		$sql = "Select `date`,`msg` From `page2` ORDER BY `date` DESC";
		$list = mysql_query($sql,$link);
		while(list($date,$msg) = mysql_fetch_row($list)){
			echo "<tr><td>";
			echo "<u><b>".substr($date,0,10)."</b></u> ".substr($date,10,9)." <a href='Manager.php?num=2&table=page2&ID=$date'>[�R��]</a><p><pre>$msg</pre>";
			echo "</td></tr>";
		}
		echo "</table>";
		mysql_close($link);
		break;
	 case 1: //�d����
		echo "<table cellspacing=1 cellpadding=4 border=1>";
		echo "<tr ><td colspan=3 width=460  align=center >";
		echo "<font size=5 >�X�Ȫ��d���O</font>";
		echo "</td></tr>";
		//---------------------�إ߸�Ʈw�s���A�M��}�Ҹ�Ʈw
		$link=mysql_connect("localhost","root","eos4196");
		mysql_select_db("lexel",$link);
		//---------------------����SQL���O�A�ñN�d�ߵ��G�x�s�� Recordset ��
		$sql="SELECT date,name,msg,email,homepage,response FROM guest order by date DESC";
		$list = mysql_query($sql,$link);
		while(list($date,$name,$msg) = mysql_fetch_row($list)){
			echo "<tr><td>";
			echo "<font color=red>". substr($date,0,10) . "</font>";
			echo "&nbsp;";
			echo "<font color=blue>" . substr($date,10,9) . "</font>";
			echo "&nbsp;&nbsp;&nbsp;";
			echo "<font color=green>$name</font> <a href='Manager.php?num=2&table=guest&ID=$date'>[�R��]</a>";
       	echo "<pre><p style='{padding-left: 0.25cm};'>$msg</p></pre>";			
			echo "</td></tr>";
		}
		echo "</table>";
		//-------------------���� RecordSet �θ�Ʈw�s��
		mysql_close($link);
		break;
	 case 2: //�R��
	 	$link=mysql_connect("localhost","root","eos4196");
		mysql_select_db("lexel",$link);
		$sql="DELETE FROM `$table` WHERE date='" . $ID . "'";
		mysql_query($sql,$link);
		mysql_close($link);
		break;
/*	 case 3: //�q�X�^�е���
		echo "<form method=post action='Manager.php'>";
		echo "<input type='hidden' name=num value=4>";
		echo "<input type='hidden' name=ID value='".$ID."'>";
		echo "�^��(".$name.")���d��<br>";
		echo "<textarea name=msg cols=30 rows=10></textarea>";
		echo "<input type=submit value='�^��'>";
		echo "</form>"; 
		break;
	 case 4: //�^�Яd��
		$link=mysql_connect("localhost","root","eos4196");
		mysql_select_db("lexel",$link);
		$sql="UPDATE guest SET response='" . $msg ."' WHERE date='" . $ID . "'";
	 	mysql_query($sql,$link);
		mysql_close($link);
	 	break;  */ 
	 case 5: // �q�XIP������ 
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

<html>

<head>
<title>我的記事本</title>
<link rel=stylesheet type="text/css" href="../background.css">

</head>

<body background="../bg2.jpg" >

  
  <center>
  <script>
  var array=new Array();
  var i=0;
  
  array[i++]="人生有很多階段&nbsp;&nbsp;一個階段結束後就往下一個階段<p>沒什麼好留戀的";
  array[i++]="當所有人都往一個方向走&nbsp;&nbsp;我卻選擇往另一個方向走<p>我必須知道我和別人有什麼不一樣";
  array[i++]="想要怎麼樣的生活&nbsp;&nbsp;接下來的路怎麼走<p>自己決定";
  array[i++]="有時候 我自己都想知道自己在想什麼";
  array[i++]="所謂的幸福是你所愛的所關心的人幸福<p>&nbsp;&nbsp;而不是&quot;讓我們幸福&quot;";
  array[i++]="想要成功 就必須學會忍受孤獨";
  
  var today = new Date();
  time=today.getHours()*60*60+today.getMinutes()*60+today.getSeconds();
  k=time%i;
  document.write("<p><font color='#666666' face='標楷體'>"+array[k]+"</font></p>");
  </script>
  
  <hr>

  <form name="myform" method=get action="note.php">	
  <select name="myselect" onchange=document.myform.submit()>
  <?php
  $link=mysql_connect("localhost","root","eos4196");
  mysql_select_db("lexel",$link);
  
  $sql = "SELECT DISTINCT(`year`) from note ORDER BY `year` DESC";
  $list = mysql_query($sql,$link) or die ($sql);
  
  while(list($year) = mysql_fetch_row($list)){
	if (!$myselect){
		$myselect = $year;
		//echo "<option value=$year selected>$year</opton>";
	}
	
	if ($myselect == $year)
		echo "<option value=$year selected>$year</opton>";
	else 	echo "<option value=$year>$year</opton>";
  }
  ?>
  </select>
  </form>
  </center>
  
  <?php
  $count=-1;
  echo "<table border=1 align=center><tr>";
  $sql = "SELECT `date` FROM note WHERE `date` LIKE '$myselect%' ORDER BY `date` DESC";
  $list = mysql_query($sql,$link) or die ($sql);
  while(list($date) = mysql_fetch_row($list)){
  	if ($count<9){
  		echo "<td><a href=#$date><font size=3><b>".substr($date,5,5)."</b></font></a></td>";
		$count++;
	}
	else {
		echo "<tr><td><a href=#$date><font size=3><b>".substr($date,5,5)."</b></font></a></td>";
		$count=0;
	}
  }
  echo "</table>";
  
  $sql = "SELECT `date`,`msg` FROM note WHERE `date` LIKE '$myselect%' ORDER BY `date` DESC";
  $list = mysql_query($sql,$link) or die ($sql);
  while(list($date,$msg) = mysql_fetch_row($list)){
  	echo "<a name=$date><a href=#top><hr size=3></a><u><b>".substr($date,0,10)."</b></u> <font color=#999999>".substr($date,10,9)."</font><p/>";
	echo "<pre><font face='微軟正黑體' size=3>$msg</font></pre></a>";
  }
  mysql_close($link);
  ?>

 
</body>
</html>


   

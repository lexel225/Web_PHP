<html>

<head>
<title>�ڪ��O�ƥ�</title>
<link rel=stylesheet type="text/css" href="../background.css">

</head>

<body background="../bg2.jpg" >

  
  <center>
  <script>
  var array=new Array();
  var i=0;
  
  array[i++]="�H�ͦ��ܦh���q&nbsp;&nbsp;�@�Ӷ��q������N���U�@�Ӷ��q<p>�S����n�d�ʪ�";
  array[i++]="��Ҧ��H�����@�Ӥ�V��&nbsp;&nbsp;�ګo��ܩ��t�@�Ӥ�V��<p>�ڥ������D�کM�O�H�����򤣤@��";
  array[i++]="�Q�n���˪��ͬ�&nbsp;&nbsp;���U�Ӫ������<p>�ۤv�M�w";
  array[i++]="���ɭ� �ڦۤv���Q���D�ۤv�b�Q����";
  array[i++]="�ҿת����֬O�A�ҷR�������ߪ��H����<p>&nbsp;&nbsp;�Ӥ��O&quot;���ڭ̩���&quot;";
  array[i++]="�Q�n���\ �N�����Ƿ|�Ԩ��t�W";
  
  var today = new Date();
  time=today.getHours()*60*60+today.getMinutes()*60+today.getSeconds();
  k=time%i;
  document.write("<p><font color='#666666' face='�з���'>"+array[k]+"</font></p>");
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
	echo "<pre><font face='�L�n������' size=3>$msg</font></pre></a>";
  }
  mysql_close($link);
  ?>

 
</body>
</html>


   

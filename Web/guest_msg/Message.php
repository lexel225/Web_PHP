<html>
<head>
<title>�s�W�d��</title>
</head>

<body>
	<?php			
	$today = getdate(); 
	$mon = $today['mon']; 
	$mday = $today['mday']; 
	$year = $today['year']; 
	$DATE = $year . "/" . $mon . "/" . $mday;	
	$hr = $today['hours'];
	$min = $today['minutes'];
	$TIME = $hr . ":" . $min;
	
	//---------------------�إ߸�Ʈw�s���A�M��}�Ҹ�Ʈw
	$link=mysql_connect("localhost","root","eos4196");
	mysql_select_db("lexel",$link);
	//---------------------����SQL���O �s�W�d��

  if ($ID){
   $sql="SELECT `response` FROM `guest` where date='$ID'";
   $list = mysql_query($sql,$link);
   list($response) = mysql_fetch_row($list);
   
   //<hr size=1 noshade='noshade' style='border:2px #999999 dotted'/>
   //<font size=2 color=green>$name</font>$today<br>$New_msg<p/>
   
   $response = $response . "<font color=brown>$name</font> �^��:<br/>$New_msg<br/></br>";

   $sql="UPDATE guest SET response='$response' WHERE date='$ID'";
	 mysql_query($sql,$link);
  }
  else {
	 $sql="INSERT INTO guest (name,msg,email,homepage) VALUES ('" . $name . "','" . $msg . "','" . $email ."','" . $homepage ."')";
	 mysql_query($sql,$link);
  }
  
  
  //--------------provide RSS feed------------------------
  	if ( !($fp = fopen("../RSS.xml", "w+")) ) {
      echo "�L�k�}���ɮ�";
    } 
    else {
      $str = "<?xml version='1.0' encoding='Big5'?><rss version='2.0' xmlns:content='http://purl.org/rss/1.0/modules/content/' xmlns:dc='http://purl.org/dc/elements/1.1/'><channel>";
      fwrite ($fp, $str);  
      $str = "<title>�E�ӻ�������</title><description>Let me tell you what the world is!</description><link>http://lexel.no-ip.org</link>";
      fwrite ($fp, $str);
      
      $title = "[�s�d��] by $name";
      $count++;
      $pubDate = date('r');
      $msg = $msg . $New_msg;
      $str = "<item><title>$title</title><description><![CDATA[<pre><font size=2>$msg</font></pre>]]></description><link>http://lexel.no-ip.org</link><pubDate>$pubDate</pubDate><dc:creator>$name</dc:creator><guid>http://lexel.no-ip.org/#$count</guid></item>"; 
      fwrite ($fp, $str);
      
      $link=mysql_connect("localhost","root","eos4196");
      mysql_select_db("lexel",$link);  
      $sql = "Select date,msg,pubDate From `page2` ORDER BY `date` DESC";
  	  $list = mysql_query($sql,$link) or die ($sql);
      while(list($date,$msg,$pubDate)= mysql_fetch_row($list)){
        $count++;
        $title = "[�s�峹]" . substr($date,0,10);              
        $str = "<item><title>$title</title><description><![CDATA[<pre><font size=2>$msg</font></pre>]]></description><link>http://lexel.no-ip.org</link><pubDate>$pubDate</pubDate><dc:creator>lexel</dc:creator><guid>http://lexel.no-ip.org/#$count</guid></item>";
        fwrite ($fp, $str);
      }
      $str = "</channel></rss>";
      fwrite ($fp, $str);    
      fclose($fp);
    }
    //--------------provide RSS feed------------------------
  
  
	//-------------------���� RecordSet �θ�Ʈw�s��
	mysql_close($link);
	?>

<script>
	document.location="guest.php";
</script>

</body>
</html>

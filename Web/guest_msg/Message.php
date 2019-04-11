<html>
<head>
<title>新增留言</title>
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
	
	//---------------------建立資料庫連結，然後開啟資料庫
	$link=mysql_connect("localhost","root","eos4196");
	mysql_select_db("lexel",$link);
	//---------------------執行SQL指令 新增留言

  if ($ID){
   $sql="SELECT `response` FROM `guest` where date='$ID'";
   $list = mysql_query($sql,$link);
   list($response) = mysql_fetch_row($list);
   
   //<hr size=1 noshade='noshade' style='border:2px #999999 dotted'/>
   //<font size=2 color=green>$name</font>$today<br>$New_msg<p/>
   
   $response = $response . "<font color=brown>$name</font> 回覆:<br/>$New_msg<br/></br>";

   $sql="UPDATE guest SET response='$response' WHERE date='$ID'";
	 mysql_query($sql,$link);
  }
  else {
	 $sql="INSERT INTO guest (name,msg,email,homepage) VALUES ('" . $name . "','" . $msg . "','" . $email ."','" . $homepage ."')";
	 mysql_query($sql,$link);
  }
  
  
  //--------------provide RSS feed------------------------
  	if ( !($fp = fopen("../RSS.xml", "w+")) ) {
      echo "無法開啟檔案";
    } 
    else {
      $str = "<?xml version='1.0' encoding='Big5'?><rss version='2.0' xmlns:content='http://purl.org/rss/1.0/modules/content/' xmlns:dc='http://purl.org/dc/elements/1.1/'><channel>";
      fwrite ($fp, $str);  
      $str = "<title>余皇億的網頁</title><description>Let me tell you what the world is!</description><link>http://lexel.no-ip.org</link>";
      fwrite ($fp, $str);
      
      $title = "[新留言] by $name";
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
        $title = "[新文章]" . substr($date,0,10);              
        $str = "<item><title>$title</title><description><![CDATA[<pre><font size=2>$msg</font></pre>]]></description><link>http://lexel.no-ip.org</link><pubDate>$pubDate</pubDate><dc:creator>lexel</dc:creator><guid>http://lexel.no-ip.org/#$count</guid></item>";
        fwrite ($fp, $str);
      }
      $str = "</channel></rss>";
      fwrite ($fp, $str);    
      fclose($fp);
    }
    //--------------provide RSS feed------------------------
  
  
	//-------------------關閉 RecordSet 及資料庫連結
	mysql_close($link);
	?>

<script>
	document.location="guest.php";
</script>

</body>
</html>

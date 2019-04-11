<html>

<body>

	<?php
	$link=mysql_connect("localhost","root","eos4196");
        mysql_select_db("lexel",$link);
	
	$today = getdate();
	$year = $today['year'];
					 
	
	switch($select){
		case 0: /* anounce */
			$sql = "INSERT INTO `announce` (`msg`) VALUES ('$msg')";
			mysql_query($sql,$link) or die ($sql);
			break;
		case 1: /* note */
			if($date)
                         	$sql = "INSERT INTO `note` (`date`,`msg`,`year`) VALUES ('$date', '$msg',".substr($date,0,4).")";
			else    $sql = "INSERT INTO `note` (`msg`,`year`) VALUES ('$msg',$year)";

	                mysql_query($sql,$link) or die ($sql);
			break;
		case 2: /* writes */
			if($date)
				$sql = "INSERT INTO `write` (`date`,`title`,`msg`,`type`) VALUES ('$date', '$title', '$msg',$type)";
			else	$sql = "INSERT INTO `write` (`title`,`msg`,`type`) VALUES ('$title', '$msg',$type)";

			mysql_query($sql,$link) or die ($sql);			
			break;
		//case 3:
	}
	
	//*  //delete功能 已不需要
	if($delete > 0){
		$sql = "DELETE FROM `page2` ORDER BY `date` LIMIT $delete";
		mysql_query($sql,$link) or die ($sql);
	}
	else if ($delete < 0){
	  $delete *= (-1);
    $sql = "DELETE FROM `page2` ORDER BY `date` DESC LIMIT $delete";
    mysql_query($sql,$link) or die ($sql);
  }//*/
	
	
	if($display){
		if ($select == 2)
			$msg = "<font size=3><i>".$title."</i></font><p><p>".$msg;
		$sql = "INSERT INTO `page2` (`msg`,`select`,`pubDate`) VALUES ('$msg',$select,'".date('r')."')";
		mysql_query($sql,$link) or die ($sql);
		
		//--------------provide RSS feed------------------------
  	if ( !($fp = fopen("../RSS.xml", "w+")) ) {
      echo "無法開啟檔案";
    } 
    else {
      $str = "<?xml version='1.0' encoding='big5'?><rss version='2.0' xmlns:content='http://purl.org/rss/1.0/modules/content/' xmlns:dc='http://purl.org/dc/elements/1.1/'><channel>";
      fwrite ($fp, $str);  
      $str = "<title>余皇億的網頁</title><description>Let me tell you what the world is!</description><link>http://lexel.no-ip.org</link>";
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
	}	
	mysql_close($link);
	?>

</body>
</html>

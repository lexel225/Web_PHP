<?php

//--------------provide RSS feed------------------------
 
 
$str = "<?xml version='1.0' encoding='Big5'?><rss version='2.0' xmlns:content='http://purl.org/rss/1.0/modules/content/' xmlns:dc='http://purl.org/dc/elements/1.1/'><channel>";
echo $str;  
$str = "<title>余皇億的網頁</title><description>Let me tell you what the world is!</description><link>http://lexel.no-ip.org</link>";
echo $str;
        
      $link=mysql_connect("localhost","root","eos4196");
      mysql_select_db("lexel",$link);  
      $sql = "Select date,msg,pubDate From `page2` ORDER BY `date` DESC";
  	  $list = mysql_query($sql,$link) or die ($sql);
      while(list($date,$msg,$pubDate)= mysql_fetch_row($list)){
        $count++;
        $title = "[新文章]" . substr($date,0,10);              
        $str = "<item><title>$title</title><description><![CDATA[<pre><font size=2>$msg</font></pre>]]></description><link>http://lexel.no-ip.org</link><pubDate>$pubDate</pubDate><dc:creator>lexel</dc:creator><guid>http://lexel.no-ip.org/#$count</guid></item>";
        echo $str;
      }
      $str = "</channel></rss>";
      echo $str;
         
?>    

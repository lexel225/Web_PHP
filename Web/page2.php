<html>

<head>
<title>佈告欄</title>
<link rel=stylesheet type="text/css" href="background.css">
<STYLE TYPE="TEXT/CSS">

</STYLE>

<script defer="defer" id="snap_preview_anywhere" type="text/javascript" src="http://spa.snap.com/snap_preview_anywhere.js?ap=1&amp;key=18a363d719e80b5fc30e2ff6d1b626b5&amp;sb=&amp;th=green&amp;cl=1&amp;si=&amp;oi=0&amp;domain=lexel.no-ip.org"></script>

</head>

<body>

  
	<hr/>
	<?php
	$link=mysql_connect("localhost","lexel","eos4196");
	mysql_select_db("lexel",$link);
	
	$sql = "Select * From `page2` ORDER BY `date` DESC"; // Limit 0,3";
	$list = mysql_query($sql,$link) or die ($sql);
	
	$count = 0;
	while(list($date,$msg,$select)= mysql_fetch_row($list)){
		echo "<font face='微軟正黑體'><u>".substr($date,0,10)."</u></font>";
		//switch($select){
		//	case 0: echo "<a href=writes/Allannounce.php><font face='標楷體' size=3>佈告欄</font></a>"; break;
		//	case 1: echo "<a href=note/note.php><font face='標楷體' size=3>我的記事本</font></a>"; break;
		//	case 2: echo "<a href=writes/writes.php><font face='標楷體' size=3>我的文章</font></a>"; break;
		//}
		echo "<pre><font size=3 face='微軟正黑體'>$msg</font></pre><hr/>";

		if ( ++$count == 3){ ?>
		<center>
		<script type="text/javascript"><!--
    google_ad_client = "pub-9276736111115257";
    google_ad_width = 468;
    google_ad_height = 15;
    google_ad_format = "468x15_0ads_al";
    //2007-03-23: Page2
    google_ad_channel = "4229728425";
    google_color_border = "FFFFFF";
    google_color_bg = "FFFFFF";
    google_color_link = "996666";
    google_color_text = "000000";
    google_color_url = "008000";
    //-->
    </script>
    <script type="text/javascript"
      src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>
    </center>
    <hr>
		<?  
		}
	}
	
	?>

	<center>
	<a href="javascript:window.external.AddFavorite('http://lexel.no-ip.org','小億的網頁')">[ 加入我的最愛 ]</a>
	<a href="#" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://lexel.no-ip.org');">[ 設為首頁 ]</a>
	<font color=#888888 size=2 face="Verdana, Arial, Helvetica, sans-serif">Copyright&copy LEXEL</font>
	</center>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1334506-1";
urchinTracker();
</script>
</body>
</html>


<!--
<iframe width=620 height=155 name="image" frameborder=0 src="page2_img/image.html"></frame>
-->



	<!-----------------------隱藏功能--------------------------------------->
<!--	<script>
	function keyfunction()
		{
		if (event.keyCode==76)                   //----------- l
		   count=1;
		else if (event.keyCode==79 && count==1)
		        count=2;                         //-----------o
		else if (event.keyCode==86 && count==2)
		        count=3;                         //-----------v
 		else if (event.keyCode==69 && count==3) {
		        document.B.src="page2_img/love.jpg";
		        counter=0;
		        }                           //-----------e
		}
	document.onkeydown=keyfunction;
	</script>
-->	<!----------------------------------------------------------------------->

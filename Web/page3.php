<html>

<head>
<title>�p��������</title>
<link rel=stylesheet type="text/css" href="background.css">

<style>
body { scrollbar-arrow-color: #FFFFFF; 
scrollbar-3dlight-color: #FFFFFF; 
scrollbar-highlight-color: #FFFFFF; 
scrollbar-face-color: #FFFFFF; 
scrollbar-shadow-color: #FFFFFF; 
scrollbar-track-color: #FFFFFF; 
scrollbar-darkshadow-color: #FFFFFF
}

.s1 {height:5; width:120; FILTER: Shadow(Color=yellow, Direction=100)}
.s2 {height:5; width:120; FILTER: Shadow(Color=#ccffee, Direction=100)}
.s3 {height:5; width:120; FILTER: Shadow(Color=yellow, Direction=100)}
.s4 {height:5; width:120; FILTER: Shadow(Color=#ccffee, Direction=100)}
.s5 {height:5; width:120; FILTER: Shadow(Color=yellow, Direction=100)}
.s6 {height:5; width:120; FILTER: Shadow(Color=#ccffee, Direction=100)}

</style>
<script defer="defer" id="snap_preview_anywhere" type="text/javascript" src="http://spa.snap.com/snap_preview_anywhere.js?ap=1&amp;key=18a363d719e80b5fc30e2ff6d1b626b5&amp;sb=&amp;th=green&amp;cl=1&amp;si=&amp;oi=0&amp;domain=lexel.no-ip.org"></script>	
</head>

<body background="bg3.jpg">
<%@ language="jscript" %>

  <hr size="1" noshade="noshade" style="border:2px #999999 dotted"/>

	<?php
	//----�إ߸�Ʈw�s���A�M��}�Ҹ�Ʈw
	$link=mysql_connect("localhost","lexel","eos4196");
	if(!$link)
		echo "Connect fail!<br>";
	if (!mysql_select_db("lexel",$link))
		echo "Select fail!<br>";
	
	$str = "SELECT date,total FROM count";
        $list = mysql_query($str,$link);
        list($date,$total) = mysql_fetch_row($list);
					
	//�G�Q���������i�J���� �p�ƾ����|�W�[

//	session_register("PreviouslyOnLine");	
//	if (Session("PreviouslyOnLine")!=true){
		$total = $total + 1;
		$str="UPDATE count SET TOTAL=" . $total;
		mysql_query($str,$link);		
//		Session("PreviouslyOnLine") = true;
//	}
	
	
	echo "<font size=2 color='#333333' face='�L�n������'><center>�q" . $date . "�_,�A�O��" . $total . "��X��!</center></font>";	
	
  
  
  //-- IP address --//
  $ip=($_SERVER["REMOTE_ADDR"]);
  $sql="INSERT INTO IPtable (IP,count) VALUES ('$ip','$total')";
	mysql_query($sql,$link); 
  
  mysql_close($link);	
	?>
	
	<script src="cookieUtility.js"></script>
	<script>
	duration = 365;		// ��ƱN�Q�O�d�@�~<BR>
	today = new Date();
	expireDate = new Date();
	expireDate.setTime(today.getTime()+1000*60*60*24*duration);     // Set upexpire date
	cookieName = "VisitCount";
	count=getCookie(cookieName);
	if (count==null)
		count=0;
	count++;
	setCookie(cookieName, count, expireDate);
	document.write("<center><font size=2 color=#222222 face='�L�n������'>�o�O�A�� "+count+" ���ӳX! �����̨θѪR�׬O1280*1024</font></center>");
	</script>


<hr size="1" noshade="noshade" style="border:2px #999999 dotted"/>


<!-- SiteSearch Google -->
<form method="get" action="http://www.google.com.tw/custom" target="google_window">
<table border="0" bgcolor="#ffffff">
<tr><td nowrap="nowrap" valign="top" align="left" height="32">
<a href="http://www.google.com/">
<img src="http://www.google.com/logos/Logo_25wht.gif" border="0" alt="Google" align="middle"></img></a>
</td>
<td nowrap="nowrap">
<input type="hidden" name="domains" value="lexel.no-ip.org"></input>
<label for="sbi" style="display: none">��J�z���j�M�r��</label>
<input type="text" name="q" size="20" maxlength="255" value="" id="sbi"></input>
<label for="sbb" style="display: none">����j�M���</label>
<input type="submit" name="sa" value="�j�M" id="sbb"></input>
</td></tr>
<tr>
<td>&nbsp;</td>
<td nowrap="nowrap">
<table>
<tr>
<td>
<input type="radio" name="sitesearch" value="" checked id="ss0"></input>
<label for="ss0" title="�j�M����"><font size="-1" color="#000000">Web</font></label></td>
<td>
<input type="radio" name="sitesearch" value="lexel.no-ip.org" id="ss1"></input>
<label for="ss1" title="�j�M lexel.no-ip.org"><font size="-1" color="#000000">lexel.no-ip.org</font></label></td>
</tr>
</table>
<input type="hidden" name="client" value="pub-9276736111115257"></input>
<input type="hidden" name="forid" value="1"></input>
<input type="hidden" name="ie" value="big5"></input>
<input type="hidden" name="oe" value="big5"></input>
<input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:FFFFFF;LBGC:336699;ALC:0000FF;LC:0000FF;T:000000;GFNT:0000FF;GIMP:0000FF;FORID:1"></input>
<input type="hidden" name="hl" value="zh-TW"></input>
</td></tr></table>
</form>
<!-- SiteSearch Google -->
<hr size="1" noshade="noshade" style="border:2px #999999 dotted"/>

<font face="Times New Roman,�L�n������">

<a href="http://feeds.feedburner.com/lexel" target=_blank><img src="http://www.feedburner.com/fb/images/pub/feed-icon16x16.png" alt="RSS Feed"  style="border:0"/></a>
<a href="sendmail.php" target=frame2><img src="page2_img/mail.png" alt="�H�H����" style="border:0"/></a>
<br/>

<a href="http://feeds.feedburner.com/lexel" target=_blank><img src="http://feeds.feedburner.com/~fc/lexel?bg=99CCFF&amp;fg=444444&amp;anim=0" height="26" width="88" style="border:0" alt="" /></a>
<a href="http://feedvalidator.org/check.cgi?url=http%3A//feeds.feedburner.com/lexel" target=_blank><img src="page2_img/valid-rss.png"  alt="[Valid RSS]" title="Validate my RSS feed"  border=0 /></a>
<p/>


<font size=2 face="�L�n������">[�ͯ��s��]</font><br/>
<a href="http://blog.stanleyc.tw/" target=_blank>StanleyC's blog</a><br/>
<a href="http://blog.pixnet.net/darkevil" target=_blank>DARKEVIL's blog</a><br/>
</font>
<hr size="1" noshade="noshade" style="border:2px #999999 dotted"/>

<marquee behavior=loop direction=left scrolldelay=5 scrollamount=1>	
	<font color=#000000 size=2 face='�L�n������'>[�߸g]</font>
	<font color=#666666 size=2 face='�L�n������'>
	�[�ۦb���� ��`��Y�iù�K�h�� �Ө���ĭ�Ҫ� �פ@���W�� �٧Q�l �⤣���� �Ť����� ��Y�O�� �ŧY�O�� ���Q���� ��_�p�O �٧Q�l 
  �O�Ѫk�Ŭ� ���ͤ��� �������b ���W���� �O�G�Ť��L�� �L���Q���� �L���ջ�ި��N �L���n����Ĳ�k �L���� �D�ܵL�N�Ѭ� �L�L�� ��L�L���� �D�ܵL�Ѧ� ��L�Ѧ��� �L�W�����D �L����L�o �H�L�ұo�G �д���ئ �̯�Y�iù�K�h�G �ߵL��ê �L��ê�G �L������ 
  �����A�˹ڷQ �s���I�n �T�@�Ѧ� �̯�Y�iù�K�h�G �o�����hù�T�ƤT�д� �G����Y�iù�K�h �O�j���G �O�j���G �O�L�W�G �O�L�����G �ణ�@���W �u�ꤣ�� �G����Y�iù�K�h�G �Y���G�� ���ʹ��� �iù���� �iù������ �д��ıC�F
	</font></marquee>
<hr size="1" noshade="noshade" style="border:2px #999999 dotted"/>

<!-- Goole���  -->
<iframe src="http://www.google.com/calendar/embed?src=lexel225%40gmail.com&amp;title=%E6%88%91%E7%9A%84%E8%A1%8C%E4%BA%8B%E6%9B%86&amp;chrome=NONE&amp;epr=1&amp;wkst=1&amp;height=557" style=" border-width:0 " width="320" frameborder="0" height="275"></iframe>
<hr size="1" noshade="noshade" style="border:2px #999999 dotted"/>


<table border=0 cellspacing=1 cellpadding=1 bordercolor="#888888" >
<tr>
  <td>
  
  <a href="http://0rz.tw/" target="_blank"><img src="http://0rz.tw/logo/0rzlogo3.png" width=100  border="0"></a><br>
  <a href="http://www.urmap.com/" target=_blank><img src="http://www.urmap.com/img/logo.gif" border=0 width=100></img></a><br>

  <script type="text/javascript"><!--
  google_ad_client = "pub-9276736111115257";
  google_ad_width = 110;
  google_ad_height = 32;
  google_ad_format = "110x32_as_rimg";
  google_cpa_choice = "CAAQ7au3_wEaCF-8rgsvxBI6KPm0i4gB";
  google_ad_channel = "";
  //--></script>
  <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
  </script><br/>

  <script type="text/javascript"><!--
  google_ad_client = "pub-9276736111115257";
  google_ad_width = 110;
  google_ad_height = 32;
  google_ad_format = "110x32_as_rimg";
  google_cpa_choice = "CAAQ-JjL9gEaCAZRjfK2Ev05KPy16n4";
  google_ad_channel = "";
  //--></script>
  <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
  </script><br/>

  <script type="text/javascript"><!--
  google_ad_client = "pub-9276736111115257";
  google_ad_width = 110;
  google_ad_height = 32;
  google_ad_format = "110x32_as_rimg";
  google_cpa_choice = "CAAQtZ39gwIaCHSZ9tgxZoN7KIOlwXU";
  google_ad_channel = "";
  //--></script>
  <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
  </script><br/>

  <script type="text/javascript"><!--
  google_ad_client = "pub-9276736111115257";
  google_ad_width = 110;
  google_ad_height = 32;
  google_ad_format = "110x32_as_rimg";
  google_cpa_choice = "CAAQyNaU_AEaCPn1g7Pi6IleKITf9YMB";
  google_ad_channel = "";
  //--></script>
  <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
  </script><br/>

  <script type="text/javascript"><!--
  google_ad_client = "pub-9276736111115257";
  google_ad_width = 110;
  google_ad_height = 32;
  google_ad_format = "110x32_as_rimg";
  google_cpa_choice = "CAAQwNDHmwIaCJRaaOD2xY0LKMyIu4sB";
  google_ad_channel = "";
  //--></script>
  <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
  </script>
  </td>
  <td>
  <embed src='mp3player.swf' width=130 height=150 wmode='transparent'  name='mp3player' type='application/x-shockwave-flash' >
  </td>
</tr>
</table>
  



	
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1334506-1";
urchinTracker();
</script>
</body>
</html>







<html>

<head>
<title>LEXEL的網頁</title>
<link rel=stylesheet type="text/css" href="background.css">

<STYLE TYPE="TEXT/CSS">
A:link{
	text-decoration:none;
	color:#ee6600;
	cursor:hand;
	font-size:10pt;
}
A:visited{
	text-decoration:none;
	color:#ee6600;
	cursor:hand;
	font-size:10pt;
}
A:hover{
	text-decoration:underline;
	color:blue;
	cursor:hand;
	font-size:10pt;
}
</STYLE>


</head>

<body>
<%@ language="jscript" %>
<script src="cookieUtility.js" type="text/javascript"></script>

	<!--LEXEL圖示變換-->
	<script type="text/javascript">
	img1=new Image();
	img1.src="page1_img/lexel.gif";
	img2=new Image()
	img2.src="page1_img/lexel2.gif"
	</script>  

	<center>
	<a href=page2.asp target=frame2>
	<img src='page1_img/lexel.gif' name="lexel" width='140' border=0 onMouseOver="jscript:document.images['lexel'].src=img2.src" onMouseOut="jscript:document.images['lexel'].src=img1.src" alt="歡迎來到lexel的網頁"></img>
	</a>
	</center>
	<!--LEXEL圖示變換 結束-->
	

	
	<table border=1 cellspacing=5 cellpadding=8 bordercolor="#CCFFAA"><tbody>
	
	<tr bgcolor="#CCFFAA"><td width=200 align=center><a href="AboutMe/AboutMe.html" target=frame2>我的簡介</a></td></tr>
	
	<tr bgcolor="#CCFFAA"><td width=200 align=center><a href="picture/my/my1.html" target=frame2>我的相簿</a></td></tr>

	<tr bgcolor="#CCFFAA"><td width=200 align=center><a href="travel/travel.html" target=frame2>我的足跡</a></td></tr>
	
	<tr bgcolor="#CCFFAA"><td width=200 align=center><a href="writes/writes.html" target=frame2>我的文章</a></td></tr>
	
	<tr bgcolor="#CCFFAA"><td width=200 align=center><a href="note/note.asp" target=frame2>我的記事本</a></td></tr>
	
	<tr bgcolor="#CCFFAA"><td width=200 align=center><a href="guest/guest.asp" target=frame2>訪客留言板</a></td></tr>
	
	<tr bgcolor="#ccffee"><td width=200 align=center><a href="article/article.html">文章典藏</a></td></tr>
	
	<tr bgcolor="#ccffee"><td width=200 align=center><a href="Webdesign/web.html">網頁設計</a> </td></tr>
   	   	
  	<tr bgcolor="#ccffee"><td width=200 align=center><a href="goodWeb.html" target="frame2">好站連結</a></td></tr>
  	
	<tr bgcolor="#ccbbff"><td width=200 align=center><a href="Manager/WebManager.asp" target="frame2">網頁管理</a></td></tr>

	</tbody></table>


<!--
<img src='page1_img/L.gif' width='19' border=0></img><img src='page1_img/E.gif' width='19' border=0></img><img src='page1_img/X.gif' width='19' border=0></img><img src='page1_img/E.gif' width='19' border=0></img><img src='page1_img/L.gif' width='19' border=0></img>

<tr bgcolor=#bbccaa><td width=200 align=center><a href="javascript:pass()">網頁管理</a></td></tr>
-->

</body>

</html>

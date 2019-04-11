<html>

<head>
<title>小億的網頁</title>
<link rel=stylesheet type="text/css" href="background.css">

<style>

A:link{
	text-decoration:none;
	color:#ee9900;
	cursor:hand;
	font-size:10pt;
}

A:visited{
	text-decoration:none;
	color:#ee9900;
	cursor:hand;
	font-size:10pt;
}

A:hover{
	text-decoration:underline;
	color:blue;
	cursor:hand;
	font-size:10pt;
}


.s1 {height:5; width:120; FILTER: Shadow(Color=yellow, Direction=100)}
.s2 {height:5; width:120; FILTER: Shadow(Color=#ccffee, Direction=100)}
.s3 {height:5; width:120; FILTER: Shadow(Color=yellow, Direction=100)}
.s4 {height:5; width:120; FILTER: Shadow(Color=#ccffee, Direction=100)}
.s5 {height:5; width:120; FILTER: Shadow(Color=yellow, Direction=100)}
.s6 {height:5; width:120; FILTER: Shadow(Color=#ccffee, Direction=100)}

</style>
	
</head>

<body>
<%@ language="jscript" %>

	<table border=1 cellspacing=5 cellpadding=4 width=160 bordercolor="#CCFFAA">
	<tr><td align=center bgcolor="#6699FF">每日小語</td></tr>
	<tr><td bgcolor="#FFFFCC">
	<%
	//---------------------建立資料庫連結，然後開啟資料庫
	var Conn = Server.CreateObject("ADODB.Connection");

	Conn.ConnectionString = "DATABASE";
	Conn.Open();

	//---------------------執行SQL指令，並將查詢結果儲存於 Recordset 中
	sql="SELECT DATE,CONTENT FROM marquee order by ID DESC";
	var RS = Conn.Execute(sql);
	%>

	<marquee height=100 behavior=loop direction=up scrolldelay=5 scrollamount=1>
	<ul>
	<%
	while (!RS.EOF){%>
		<li>
		<font color=red size=2>[<%=RS(0)%>]</font><br>
		<font color=blue size=2><%=RS(1)%></font><p>
		</li>
	<%
	RS.MoveNext();
	}
	
	//-------------------關閉 RecordSet 及資料庫連結
	RS.Close();
	Conn.Close();
	%>
	<li>
	<font color=red size=2>[心經]</font><br>
	<font color=brown size=2>
	觀自在菩薩 行深般若波羅密多時 照見五蘊皆空 度一切苦厄 舍利子 色不異空 空不異色 色即是空 空即是色 受想行識 亦復如是 舍利子 是諸法空相 不生不滅 不垢不淨 不增不減 是故空中無色 無受想行識 無眼耳鼻舌身意 無色聲香味觸法 無眼界 乃至無意識界 無無明 亦無無明盡 乃至無老死 亦無老死盡 無苦集滅道 無智亦無得 以無所得故 菩提薩埵 依般若波羅密多故 心無罣礙 無罣礙故 無有恐怖 遠離顛倒夢想 究竟涅槃 三世諸佛 依般若波羅密多故 得阿耨多羅三藐三菩提 故知般若波羅密多 是大神咒 是大明咒 是無上咒 是無等等咒 能除一切苦 真實不虛 故說般若波羅密多咒 即說咒曰 揭諦揭諦 波羅揭諦 波羅僧揭諦 菩提薩婆訶
	</font>
	</li>
	
	</ul>
	</marquee>
	</td></tr>
	
	
	
	<tr><td bgcolor=#ccffee>
	<font size=2>
	近日活動:	
	<!--
	 <div ID=text1 CLASS=s1></div>
	 
	 <SCRIPT LANGUAGE=VBScript>
i = 1
sub Trans1()
	text1.className = "s" & i

	if i = 6 then
		i = 1
	else
		i = i + 1
	end if
	id1=setTimeout("Trans1()", 500)
end sub
Trans1()
</SCRIPT>
	 -->
	<br>
	<a href=http://www.wretch.cc/album/album.php?id=lexel&book=12 target=_blank><font color=red>(3/14)</font>畢業團體照</a><br>
	<a href=http://www.wretch.cc/album/album.php?id=lexel&book=10 target=_blank><font color=red>(12/27)</font>火鍋大會&制服日</a><br>
	</font>
	</tr></td>
	
	<tr><td align=center bgcolor=#CCCCCC>
	<%
	//---------------------建立資料庫連結，然後開啟資料庫
	var Conn = Server.CreateObject("ADODB.Connection");

	Conn.ConnectionString = "DATABASE";
	Conn.Open();
				
	//二十分鐘之內進入網頁 計數器不會增加
	if (Session("PreviouslyOnLine")!=true){
		sql="SELECT TOTAL FROM count WHERE ID=1";
		var RS = Conn.Execute(sql);
		sql="UPDATE count SET TOTAL="+(RS(0)+1)+" WHERE ID=1";
		Conn.Execute(sql);
		Session("PreviouslyOnLine") = true;
	}

	//---------------------執行SQL指令，並將查詢結果儲存於 Recordset 中
	sql="SELECT TOTAL,DAY FROM count WHERE ID=1";
	var RS = Conn.Execute(sql);
	%>
	<font size=2 color=red>從<%=RS(1)%>起<br>你是第<%=RS(0)%>個訪客
	<%
	RS.Close();
	Conn.Close();
	%>
	</tr></td>
	
	</table>

	<br>
	
	

	

	<!-- Search Google 
	<center>
	<FORM method=GET action="http://www.google.com/search" target=frame2>
	<TABLE bgcolor=black width=160>
	<tr><td >
	<A HREF="http://www.google.com" target=new>
	<IMG SRC="http://www.google.com.tw/logos/Logo_25blk.gif" border="0" ALT="Google" align="absmiddle">
	</A>
	<br>
	<INPUT TYPE=text name=q size=12 value="">
	<INPUT TYPE=hidden name=hl value=zh-TW>
	<INPUT type=submit name=btnG VALUE="搜尋" >
	</td></tr></TABLE>
	</FORM>
	</center>
	 Search Google -->

	
	
</body>
</html>






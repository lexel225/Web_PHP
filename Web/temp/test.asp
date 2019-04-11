<html>
<title></title>
<link rel=stylesheet type="text/css" href="../background.css">
<body background="../bg.jpg">

<%@language=JScript%>


<center>
<b align=center><a href="../page2.asp">回首頁</a></b>
<hr size=3 color=yellow>
</center>
	

	<%
	password=Request.Form("password");
	
	if (password!=99){%>
	<form name="Myform" method=post action="test.asp">
	<b><font color=brown>請問:我出生的年份(民國)+我出生的月份+我出生的日期 = ?</font><b><br>
	<input type=password name="password" width=100>	<input type=submit value='送出答案'>
	</form>
	<%
	}
	
	if (password==99){%>
	<pre>
		[   IP   ] lexel.no-ip.org  [port] 21
		[username] cs05
		[ passwd ] cs05 
	</pre>
	這是公用帳號 連線人數有限 也限流量 
	想要自己的帳號的人請告訴我<p>
	不會使用FTP軟體的人也可以直接按此網址: <a href='ftp://cs05:cs05@lexel.no-ip.org' target=_blank>ftp://cs05:cs05@lexel.no-ip.org</a>
	<%}
	else if (password>0) Response.write("答案錯了喔!");
	%>

</body>
</html>
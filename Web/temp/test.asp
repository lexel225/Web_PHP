<html>
<title></title>
<link rel=stylesheet type="text/css" href="../background.css">
<body background="../bg.jpg">

<%@language=JScript%>


<center>
<b align=center><a href="../page2.asp">�^����</a></b>
<hr size=3 color=yellow>
</center>
	

	<%
	password=Request.Form("password");
	
	if (password!=99){%>
	<form name="Myform" method=post action="test.asp">
	<b><font color=brown>�а�:�ڥX�ͪ��~��(����)+�ڥX�ͪ����+�ڥX�ͪ���� = ?</font><b><br>
	<input type=password name="password" width=100>	<input type=submit value='�e�X����'>
	</form>
	<%
	}
	
	if (password==99){%>
	<pre>
		[   IP   ] lexel.no-ip.org  [port] 21
		[username] cs05
		[ passwd ] cs05 
	</pre>
	�o�O���αb�� �s�u�H�Ʀ��� �]���y�q 
	�Q�n�ۤv���b�����H�Чi�D��<p>
	���|�ϥ�FTP�n�骺�H�]�i�H�����������}: <a href='ftp://cs05:cs05@lexel.no-ip.org' target=_blank>ftp://cs05:cs05@lexel.no-ip.org</a>
	<%}
	else if (password>0) Response.write("���׿��F��!");
	%>

</body>
</html>
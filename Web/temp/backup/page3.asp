<html>

<head>
<title>�p��������</title>
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
	<tr><td align=center bgcolor="#6699FF">�C��p�y</td></tr>
	<tr><td bgcolor="#FFFFCC">
	<%
	//---------------------�إ߸�Ʈw�s���A�M��}�Ҹ�Ʈw
	var Conn = Server.CreateObject("ADODB.Connection");

	Conn.ConnectionString = "DATABASE";
	Conn.Open();

	//---------------------����SQL���O�A�ñN�d�ߵ��G�x�s�� Recordset ��
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
	
	//-------------------���� RecordSet �θ�Ʈw�s��
	RS.Close();
	Conn.Close();
	%>
	<li>
	<font color=red size=2>[�߸g]</font><br>
	<font color=brown size=2>
	�[�ۦb���� ��`��Y�iù�K�h�� �Ө���ĭ�Ҫ� �פ@���W�� �٧Q�l �⤣���� �Ť����� ��Y�O�� �ŧY�O�� ���Q���� ��_�p�O �٧Q�l �O�Ѫk�Ŭ� ���ͤ��� �������b ���W���� �O�G�Ť��L�� �L���Q���� �L���ջ�ި��N �L���n����Ĳ�k �L���� �D�ܵL�N�Ѭ� �L�L�� ��L�L���� �D�ܵL�Ѧ� ��L�Ѧ��� �L�W�����D �L����L�o �H�L�ұo�G �д���ئ �̯�Y�iù�K�h�G �ߵL��ê �L��ê�G �L������ �����A�˹ڷQ �s���I�n �T�@�Ѧ� �̯�Y�iù�K�h�G �o�����hù�T�ƤT�д� �G����Y�iù�K�h �O�j���G �O�j���G �O�L�W�G �O�L�����G �ణ�@���W �u�ꤣ�� �G����Y�iù�K�h�G �Y���G�� ���ʹ��� �iù���� �iù������ �д��ıC�F
	</font>
	</li>
	
	</ul>
	</marquee>
	</td></tr>
	
	
	
	<tr><td bgcolor=#ccffee>
	<font size=2>
	��鬡��:	
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
	<a href=http://www.wretch.cc/album/album.php?id=lexel&book=12 target=_blank><font color=red>(3/14)</font>���~�����</a><br>
	<a href=http://www.wretch.cc/album/album.php?id=lexel&book=10 target=_blank><font color=red>(12/27)</font>����j�|&��A��</a><br>
	</font>
	</tr></td>
	
	<tr><td align=center bgcolor=#CCCCCC>
	<%
	//---------------------�إ߸�Ʈw�s���A�M��}�Ҹ�Ʈw
	var Conn = Server.CreateObject("ADODB.Connection");

	Conn.ConnectionString = "DATABASE";
	Conn.Open();
				
	//�G�Q���������i�J���� �p�ƾ����|�W�[
	if (Session("PreviouslyOnLine")!=true){
		sql="SELECT TOTAL FROM count WHERE ID=1";
		var RS = Conn.Execute(sql);
		sql="UPDATE count SET TOTAL="+(RS(0)+1)+" WHERE ID=1";
		Conn.Execute(sql);
		Session("PreviouslyOnLine") = true;
	}

	//---------------------����SQL���O�A�ñN�d�ߵ��G�x�s�� Recordset ��
	sql="SELECT TOTAL,DAY FROM count WHERE ID=1";
	var RS = Conn.Execute(sql);
	%>
	<font size=2 color=red>�q<%=RS(1)%>�_<br>�A�O��<%=RS(0)%>�ӳX��
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
	<INPUT type=submit name=btnG VALUE="�j�M" >
	</td></tr></TABLE>
	</FORM>
	</center>
	 Search Google -->

	
	
</body>
</html>






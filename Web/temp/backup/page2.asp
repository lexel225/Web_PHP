<html>

<head>
<title>�G�i��</title>
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


	<%
	//---------------------�إ߸�Ʈw�s���A�M��}�Ҹ�Ʈw
	var Conn = Server.CreateObject("ADODB.Connection");
	var today = new Date();
	day=today.getYear()+"/"+(today.getMonth()+1)+"/"+today.getDate();

	Conn.ConnectionString = "DATABASE";
	Conn.Open();
	
	sql="SELECT TOTAL,DAY from count WHERE ID=12";
	var RS = Conn.Execute(sql);
	
	%>

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
	</script>

	<!-------JavaScript������ ��r����_�}�l-------->
	<script language="JavaScript">
	document.write('<font size="2" color=red>');

	var now,hours,minutes,seconds,timeValue;

	function showtime()
		{
		now = new Date();
		hours = now.getHours();
		minutes = now.getMinutes();
		seconds = now.getSeconds();
		timeValue = (hours >= 12) ? "�U�� " : "�W�� ";
		timeValue += ((hours > 12) ? hours - 12 : hours) + " �I";
		timeValue += ((minutes < 10) ? " 0" : " ") + minutes + " ��";
		timeValue += ((seconds < 10) ? " 0" : " ") + seconds + " ��,";
		clock.innerHTML = timeValue;
		setTimeout("showtime()",100);
		}
	<%
	if (RS(1)==day){%>
		document.write("<font size=2 color=red>���ѯd���O��<font color=black>"+<%=RS(0)%>+"</font>�ӷs�d��,</font>");
	<%}
	else {%>
		document.write("�{�b�ɶ��O");
		document.write("<span id='clock'></span>");
		showtime();
	<%}%>
	
	document.write("�o�O�A�� "+count+" ���ӳX! �����̨θѪR�׬O1024*768</font>");
       </script>
       <!-------JavaScript������ ��r����_����-------->
       
<hr size=3 color=yellow>
	
    <!------------------�p�����G�i��--------------------------------------------------->
	<table align=center cellspacing=4 cellpadding=3 border=1 bordercolor="#CCFFAA">
	<tr>
	<td colspan=2 width=260  align=center bgcolor=#99FFCC><font size=3 color=brown>�p�����G�i��</font></td>	
	<td rowspan=9 width=260 style="background:url('page2_img/bg.gif')">
	 <script>
	 array=new Array;
	 paint=new Array;
	 i=0;
	 j=0;
	  	 	 	 
//	 array[i++]="<img src='page2_img/I.gif' width='52'></img><img src='page2_img/L.gif' width='52'></img><img src='page2_img/O.gif' width='52'></img><img src='page2_img/V.gif' width='52'></img><img src='page2_img/E.gif' width='52'></img><br>"+"<img src='page2_img/baseball.gif' width='260'></img>";
 	 
//	 array[i++]="<a href=http://www.cs.nthu.edu.tw/~br902532/Web/travel/2001-8-Europe/index.html target=frame2>�^�k�Q����C<img src=travel/2001-8-Europe/1.jpg width=260 border=0></img></a><br><font size=2>�|�ӤQ�K���p���Ƭv�L�����G��...<p>(�g���n�֪�~ ���I���y�a)</font>";
	 
//	 array[i++]="<a href=http://www.cs.nthu.edu.tw/~br902532/Web/travel/2004-7-China/index.html target=frame2>����Q��C-�W���Ѱ� �U��Ĭ�C<img src=travel/2004-7-China/1.jpg width=260 border=0></img></a><br>";

//	 array[i++]="<a href=http://www.cs.nthu.edu.tw/~br902532/Web/travel/2004-9-Thailand/index.html target=frame2>�j�ǲ��~�Ȧ� ���꤭��C<img src=travel/2004-9-Thailand/1.jpg width=260 border=0></img></a><br><font size=2>�g�����I²�� �Я���~</font>";

//	 array[i++]="<font color=#888888 face='�з���'><font color=#666666>�F���}<br>���G���s ���G�P�N��</font><br>�@�����T �t���ߦb���f �ڦb����<br>���˩p�H�٨S�� �¦a�p���C ����I��<br>�]�b�M������� ���ԭV�d�� �@���}�y<br>����ѲP���J�� �p������ �s�x�^�Ы���G<br>���V�F�y �ɶ���� ��}�N�@������ �ګo���L<br>�֦b�ε\�]�u�� �@���F���}<br>����b��W�鸨 �ݨ��p�ɭ�<br>�S�O�o���~�ڭ̳��٫ܦ~�� �Ӧp���^�n�ի�<br>�ڪ����� �p�Sť�L<br>�֦b�ε\�]�u�� �@���F���}<br>�����N�G�ƬV�� �����ڬݳz<br>�X���~���j�D�ڲo�۩p���L<br>��Ͻ��󪺦~�Y �N�s���ⳣ�ܨI�q<br></font>";
	 	
//	 array[i++]="<font color=#888888 face='�з���'><font color=#666666>�k���۱j<br>���G���L ���G�N�x�O</font><br>�Ʈ𭱹�U�����@����V�������<br>�x���K���@���p���<br>���̦ʤd�V�@�����U����<br>�ڵo���ϱj�@���n�~<br>���Ӧn�~�l�@�C�ѭn�۱j<br>����k��~�@��Ӷ����<p>�����Ѭ��ڻE��q�@�h�}���P�a<br>���ڲz�Q�h���@�ݺѪi����<br>�S�ݺѪżs��E��<br>�ڬO�k���۱j<br>�������ݤj�a�@�ɼ١@���n�~<br>�Χڦ��I���@ģ�X�d����<br>���Ӧn�~�l�@������z���@��Ӷ����</font>";

	 array[i++]="<a href='page2_img/12.jpg' target=_blank><img src='page2_img/12.jpg' border=0 width=200></img></a>";

	 array[i++]="<a href='page2_img/11.jpg' target=_blank><img src='page2_img/11.jpg' border=0 width=200></img></a>";
	 
	 paint[j++]="black";
		
	 var today = new Date();
  	 time=today.getHours()*60*60+today.getMinutes()*60+today.getSeconds();
  	 k=time%i;
  	 m=time%j;
  	 
  	 document.write("<font color="+paint[m]+" size=2>"+array[k]+"</font>");
  	 //document.write("<span style='filter:shadow()'>"+array[k]+"</span>");
	 </script>
	</td>
	</tr>

	<%
	//---------------------����SQL���O�A�ñN�d�ߵ��G�x�s�� Recordset ��
	sql="SELECT DATE,CONTENT,ID FROM diary order by ID DESC";
	var RS = Conn.Execute(sql);

	color=new Array();
	i=0;
	color[i++] = "#FFFFdd";
	color[i++] = "#ffeeee";
	color[i++] = "#eeffee";
	color[i++] = "#e0e0f9";
	color[i++] = "#eeeeff";
	color[i++] = "#ffe9d0";
	color[i++] = "#ffffdd";
	color[i++] = "#eeeeff";
	color[i++] = "#e0e0f9";
	color[i++] = "#eeffee";
	color[i++] = "#ffeeee";
	color[i++] = "#ffffdd";
	color[i++] = "#eeffee";
	color[i++] = "#eeeeff";
	color[i++] = "#ffeeee";
	color[i++] = "#eeffee";
	color[i++] = "#ffffdd";
	color[i++] = "#eeeeff";
	color[i++] = "#ffffdd";
	color[i++] = "#eeffee";
	color[i++] = "#ffeeee";

	k=0;
	for (i=0;i<=7;i++)
		{
		if (RS.EOF){break;}
	%>
		<tr bgcolor=<%=color[k]%>>
		
		<td><font size=2><%=RS(0)%></font></td>
		<td><font size=2><%=RS(1)%></font></td>
		
		</tr>
	<%
		k=k+1;
		if (k==color.length)
			k=0;

		RS.MoveNext();
		}
	
	//-------------------���� RecordSet �θ�Ʈw�s��
	RS.Close();
	Conn.Close();	
	%>
	</table>
	
	<center>
	<a href="AllDiary.asp" target=new>[ �Ҧ������i ]</a>
	<a href="javascript:window.external.AddFavorite('http://lexel.no-ip.org','�p��������')">[ �[�J�ڪ��̷R ]</a>
	<a href="#" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://lexel.no-ip.org');">[ �]������ ]</a>
	<font color=#888888 size=2 face="Verdana, Arial, Helvetica, sans-serif">Copyright&copy LEXEL</font>
	</center>
	
<hr size=3 color=yellow >
<iframe width=620 height=155 name="image" frameborder=0 src="page2_img/image.html"></frame>


	<!------------------------�v�����Y------------------------------------------>	
<!--	<table align=center cellspacing=0 cellpadding=0 border=0>
	<tr>
	<td width=400><pre><font size=3><font color=brown face=�з��� size=4><b>�v�����Y</b></font>
<a href=page2_img/4.jpg target=_blank onmouseover=javascript:change(4)>�ҥ�Q�t���ߤl</a> <a href=page2_img/6.jpg target=_blank onmouseover=javascript:change(6)>��l�Q�m�F</a> <a href=page2_img/9.jpg target=_blank onmouseover=javascript:change(9)>��Ѫ��a��</a>
<a href=page2_img/1.jpg target=_blank onmouseover=javascript:change(1)>�ҥ�Q�t����</a>   <a href=page2_img/2.jpg target=_blank onmouseover=javascript:change(2)>�M���^��</a>   <a href=page2_img/5.jpg target=_blank onmouseover=javascript:change(5)>�A�O�³J</a>
<a href=page2_img/8.jpg target=_blank onmouseover=javascript:change(8)>�o�N�OOrz</a>      <a href=page2_img/7.jpg target=_blank onmouseover=javascript:change(7)>��~ �`�a�x</a> <a href=page2_img/3.jpg target=_blank onmouseover=javascript:change(3)>�H���WŪ</a>
	</font></pre></td>	
	<td width=210><img name="B" width=210></img></td>
	</tr>
	</table>
	
	<script>
	photo=new Array;
	photo[0]="page2_img/baseball.gif";	
	i=1;
	
	photo[i++]="page2_img/1.jpg";
	photo[i++]="page2_img/2.jpg";
	photo[i++]="page2_img/3.jpg";
	photo[i++]="page2_img/4.jpg";
	photo[i++]="page2_img/5.jpg";
	photo[i++]="page2_img/6.jpg";
	photo[i++]="page2_img/7.jpg";
	photo[i++]="page2_img/8.jpg";
	photo[i++]="page2_img/9.jpg"; 
	 
	
	function change(num){
		document.B.src=photo[num];
	}
	
	var today = new Date();
  	time=today.getHours()*60*60+today.getMinutes()*60+today.getSeconds();
  	k=time%i;
	
	change(k);			
	</script>
!-->	<!---------------------------------------------------------------------------->
	
	
	<!-----------------------���å\��--------------------------------------->
<!--	<script>
	function keyfunction()
		{
		if (event.keyCode==76)                   //-----------l
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

</body>	
</html>

<!--	for (i=0; i<RS.Fields.Count; i++)
		Response.write("<th>"+RS(i).Name+"</th>\n");     //RS().Name ���W��  RS()��줺�e
-->

<!--
<input type=button onclick="javascript:self.close()" value="����������">
-->
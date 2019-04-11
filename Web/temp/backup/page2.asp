<html>

<head>
<title>佈告欄</title>
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
	//---------------------建立資料庫連結，然後開啟資料庫
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
	duration = 365;		// 資料將被保留一年<BR>
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

	<!-------JavaScript收集區 文字時鐘_開始-------->
	<script language="JavaScript">
	document.write('<font size="2" color=red>');

	var now,hours,minutes,seconds,timeValue;

	function showtime()
		{
		now = new Date();
		hours = now.getHours();
		minutes = now.getMinutes();
		seconds = now.getSeconds();
		timeValue = (hours >= 12) ? "下午 " : "上午 ";
		timeValue += ((hours > 12) ? hours - 12 : hours) + " 點";
		timeValue += ((minutes < 10) ? " 0" : " ") + minutes + " 分";
		timeValue += ((seconds < 10) ? " 0" : " ") + seconds + " 秒,";
		clock.innerHTML = timeValue;
		setTimeout("showtime()",100);
		}
	<%
	if (RS(1)==day){%>
		document.write("<font size=2 color=red>今天留言板有<font color=black>"+<%=RS(0)%>+"</font>個新留言,</font>");
	<%}
	else {%>
		document.write("現在時間是");
		document.write("<span id='clock'></span>");
		showtime();
	<%}%>
	
	document.write("這是你第 "+count+" 次來訪! 本站最佳解析度是1024*768</font>");
       </script>
       <!-------JavaScript收集區 文字時鐘_結束-------->
       
<hr size=3 color=yellow>
	
    <!------------------小億的佈告欄--------------------------------------------------->
	<table align=center cellspacing=4 cellpadding=3 border=1 bordercolor="#CCFFAA">
	<tr>
	<td colspan=2 width=260  align=center bgcolor=#99FFCC><font size=3 color=brown>小億的佈告欄</font></td>	
	<td rowspan=9 width=260 style="background:url('page2_img/bg.gif')">
	 <script>
	 array=new Array;
	 paint=new Array;
	 i=0;
	 j=0;
	  	 	 	 
//	 array[i++]="<img src='page2_img/I.gif' width='52'></img><img src='page2_img/L.gif' width='52'></img><img src='page2_img/O.gif' width='52'></img><img src='page2_img/V.gif' width='52'></img><img src='page2_img/E.gif' width='52'></img><br>"+"<img src='page2_img/baseball.gif' width='260'></img>";
 	 
//	 array[i++]="<a href=http://www.cs.nthu.edu.tw/~br902532/Web/travel/2001-8-Europe/index.html target=frame2>英法十六日遊<img src=travel/2001-8-Europe/1.jpg width=260 border=0></img></a><br><font size=2>四個十八歲小鬼飄洋過海的故事...<p>(寫的好累阿~ 來點鼓勵吧)</font>";
	 
//	 array[i++]="<a href=http://www.cs.nthu.edu.tw/~br902532/Web/travel/2004-7-China/index.html target=frame2>中國十日遊-上有天堂 下有蘇杭<img src=travel/2004-7-China/1.jpg width=260 border=0></img></a><br>";

//	 array[i++]="<a href=http://www.cs.nthu.edu.tw/~br902532/Web/travel/2004-9-Thailand/index.html target=frame2>大學畢業旅行 泰國五日遊<img src=travel/2004-9-Thailand/1.jpg width=260 border=0></img></a><br><font size=2>寫的有點簡陋 請笑納~</font>";

//	 array[i++]="<font color=#888888 face='標楷體'><font color=#666666>東風破<br>詞：方文山 曲：周杰倫</font><br>一盞離愁 孤單佇立在窗口 我在門後<br>假裝妳人還沒走 舊地如重遊 月圓更寂寞<br>夜半清醒的燭火 不忍苛責我 一壺漂泊<br>浪跡天涯難入喉 妳走之後 酒暖回憶思念瘦<br>水向東流 時間怎麼偷 花開就一次成熟 我卻錯過<br>誰在用琵琶彈奏 一曲東風破<br>歲月在牆上剝落 看見小時候<br>猶記得那年我們都還很年幼 而如今琴聲幽幽<br>我的等候 妳沒聽過<br>誰在用琵琶彈奏 一曲東風破<br>楓葉將故事染色 結局我看透<br>籬笆外的古道我牽著妳走過<br>荒煙蔓草的年頭 就連分手都很沉默<br></font>";
	 	
//	 array[i++]="<font color=#888888 face='標楷體'><font color=#666666>男兒當自強<br>詞：黃霑 曲：將軍令</font><br>傲氣面對萬重浪　熱血向那紅日光<br>膽似鐵打　骨如精鋼<br>胸襟百千丈　眼光萬里長<br>我發憤圖強　做好漢<br>做個好漢子　每天要自強<br>熱血男兒漢　比太陽更光<p>讓海天為我聚能量　去開天闢地<br>為我理想去闖　看碧波高壯<br>又看碧空廣闊浩氣揚<br>我是男兒當自強<br>昂布挺胸大家作棟樑　做好漢<br>用我百點熱　耀出千分光<br>做個好漢子　熱血熱腸熱　比太陽更光</font>";

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
	//---------------------執行SQL指令，並將查詢結果儲存於 Recordset 中
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
	
	//-------------------關閉 RecordSet 及資料庫連結
	RS.Close();
	Conn.Close();	
	%>
	</table>
	
	<center>
	<a href="AllDiary.asp" target=new>[ 所有的公告 ]</a>
	<a href="javascript:window.external.AddFavorite('http://lexel.no-ip.org','小億的網頁')">[ 加入我的最愛 ]</a>
	<a href="#" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://lexel.no-ip.org');">[ 設為首頁 ]</a>
	<font color=#888888 size=2 face="Verdana, Arial, Helvetica, sans-serif">Copyright&copy LEXEL</font>
	</center>
	
<hr size=3 color=yellow >
<iframe width=620 height=155 name="image" frameborder=0 src="page2_img/image.html"></frame>


	<!------------------------影像走廊------------------------------------------>	
<!--	<table align=center cellspacing=0 cellpadding=0 border=0>
	<tr>
	<td width=400><pre><font size=3><font color=brown face=標楷體 size=4><b>影像走廊</b></font>
<a href=page2_img/4.jpg target=_blank onmouseover=javascript:change(4)>模仿烏龜的兔子</a> <a href=page2_img/6.jpg target=_blank onmouseover=javascript:change(6)>位子被搶了</a> <a href=page2_img/9.jpg target=_blank onmouseover=javascript:change(9)>唸書的地方</a>
<a href=page2_img/1.jpg target=_blank onmouseover=javascript:change(1)>模仿烏龜的狗</a>   <a href=page2_img/2.jpg target=_blank onmouseover=javascript:change(2)>騎狗英熊</a>   <a href=page2_img/5.jpg target=_blank onmouseover=javascript:change(5)>你是笨蛋</a>
<a href=page2_img/8.jpg target=_blank onmouseover=javascript:change(8)>這就是Orz</a>      <a href=page2_img/7.jpg target=_blank onmouseover=javascript:change(7)>嗚~ 總冠軍</a> <a href=page2_img/3.jpg target=_blank onmouseover=javascript:change(3)>寒窗苦讀</a>
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
	
	
	<!-----------------------隱藏功能--------------------------------------->
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
		Response.write("<th>"+RS(i).Name+"</th>\n");     //RS().Name 欄位名稱  RS()欄位內容
-->

<!--
<input type=button onclick="javascript:self.close()" value="關掉此網頁">
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>

<script>
function send(){
		
	if (Myform.name.value=="" || Myform.New_msg.value==""){
		alert("¤Ł·Çżé¤JŞĹĄŐ°Ő!!");
		return;
		}
					
	Myform.submit();
}
</script>
  
  
  
  <?php
  $link=mysql_connect("localhost","root","eos4196");
	mysql_select_db("lexel",$link);
  ?>
  
  <table border=1>
  <tr><td>
  <?
  $sql="SELECT `date`,`name`,`msg` FROM `guest` where date='$ID'";
  $list = mysql_query($sql,$link);
  list($date,$name,$msg) = mysql_fetch_row($list);
  	echo "<font color=#222222><b><u>". substr($date,0,10) . "</u></b></font>";
		echo "&nbsp;";
		echo "<font color=#999999>" . substr($date,10,9) . "</font>";
		echo "&nbsp;&nbsp;&nbsp;";
		echo "<font color=green>$name</font>";
		echo "<pre>$msg</pre>";
  ?>
  </td></tr>
  </table>
  
  <form name="Myform" method=post action="Message.php">
  <table border=1 bordercolor=#999999 width=500>

  <tr><td>*§AŞş¦W¦r</td><td><input type=text name="name"></td></tr>

  <tr><td align=center>*Żd¨Ą¤ş®e</td><td><textarea rows=10 cols=40 name="New_msg"></textarea></td></tr>
<!--  
  <tr><td align=center>e-mail</td><td><input type=text name="email" ></td></tr>
  
  <tr><td align=center>­Ó¤Hşô­¶</td><td><input type=text name="homepage" ></td></tr>
  -->
  <tr><td colspan=2 align=center><input type=button onclick=send() value="°eĄXŻd¨Ą">	<input type=reset value="­«·sżé¤J"></td>
  </table>
  <input type=hidden name='ID' value='<? echo $ID ?>' />
  </form>
  
  
  <? mysql_close($link); 	?>
  </body>
</html>

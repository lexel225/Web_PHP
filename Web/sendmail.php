<html>
<head>
<title>意見信箱</title>
</head>
<body>
<?php

$mailto="lexel225@gmail.com";

if (($topic) and ($Email) and ($body)) {
	$tmpfilename = tempnam("/tmp", "dm");
	$fp = fopen($tmpfilename, "w");
	
	fwrite($fp, "From: ".$Email."\n");
        fwrite($fp, "Subject: ".$topic."  <網站訪客來信>\n\n");
	fwrite($fp, $body."\n\n");
	fwrite($fp, "送信人:".$sender."\n");
	fwrite($fp, "發信IP:".$REMOTE_ADDR."\n");
	fclose($fp);
	$execstr="cat ".$tmpfilename." | /usr/lib/sendmail ".$mailto;
	exec($execstr);

	$execstr="echo $sender $REMOTE_HOST >> /var/log/mail.log";
	exec($execstr);
	echo "信件已送出！！ 我看到後會盡快回信的<p><br><br><br><br><br>";
} else {
    	?>
	<form action=<? echo($GLOBALS["PHP_SELF"]); ?> method=post>
	<table border=1 bordercolor=#999999 align=center>
	<tr><td>收件人</td><td><? echo($mailto); ?></td></tr>
	<tr><td>標題</td><td><input type=text size=40 name=topic></tr>
	<tr><td>姓名</td><td><input type=text size=40 name=sender></tr>
	<tr><td>Email</td><td><input type=text size=40 name=Email></tr>
	<tr><td colspan=2>內容<br><textarea cols=60 rows=20 name=body></textarea></td></tr>
	<tr><td colspan=2><div align=right><input type=submit value="送出"></td></tr>
	</table>
	</form>
	<?
	}
	?>

</body>
</html>
						 

						 

<html>
<head>
<title>�N���H�c</title>
</head>
<body>
<?php

$mailto="lexel225@gmail.com";

if (($topic) and ($Email) and ($body)) {
	$tmpfilename = tempnam("/tmp", "dm");
	$fp = fopen($tmpfilename, "w");
	
	fwrite($fp, "From: ".$Email."\n");
        fwrite($fp, "Subject: ".$topic."  <�����X�ȨӫH>\n\n");
	fwrite($fp, $body."\n\n");
	fwrite($fp, "�e�H�H:".$sender."\n");
	fwrite($fp, "�o�HIP:".$REMOTE_ADDR."\n");
	fclose($fp);
	$execstr="cat ".$tmpfilename." | /usr/lib/sendmail ".$mailto;
	exec($execstr);

	$execstr="echo $sender $REMOTE_HOST >> /var/log/mail.log";
	exec($execstr);
	echo "�H��w�e�X�I�I �ڬݨ��|�ɧ֦^�H��<p><br><br><br><br><br>";
} else {
    	?>
	<form action=<? echo($GLOBALS["PHP_SELF"]); ?> method=post>
	<table border=1 bordercolor=#999999 align=center>
	<tr><td>����H</td><td><? echo($mailto); ?></td></tr>
	<tr><td>���D</td><td><input type=text size=40 name=topic></tr>
	<tr><td>�m�W</td><td><input type=text size=40 name=sender></tr>
	<tr><td>Email</td><td><input type=text size=40 name=Email></tr>
	<tr><td colspan=2>���e<br><textarea cols=60 rows=20 name=body></textarea></td></tr>
	<tr><td colspan=2><div align=right><input type=submit value="�e�X"></td></tr>
	</table>
	</form>
	<?
	}
	?>

</body>
</html>
						 

						 

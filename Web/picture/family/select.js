function select(num){


document.write("<center><b>");

if (num==1)
	document.write("<font color=green>家人</font> ");
else document.write("<a href='family1.html'>家人</a> ");

if (num==2)
	document.write("<font color=green>窩</font> ");
else document.write("<a href='family2.html'>窩</a> ");


if (num==3)
	document.write("<font color=green>屋頂</font> ");
else document.write("<a href='family3.html'>屋頂</a> ");

document.write("</b></center><br>");
}
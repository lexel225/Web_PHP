function select(num){

document.write("<center><b>");


if (num==0)
	document.write("<font color=green>成長</font> ");
else document.write("<a href='my0.html'>成長</a> ");


if (num==1)
	document.write("<font color=green>生活</font> ");
else document.write("<a href='my1.html'>生活</a> ");

if (num==2)
	document.write("<font color=green>運動</font> ");
else document.write("<a href='my2.html'>運動</a> ");


document.write("</b></center><br>");

}
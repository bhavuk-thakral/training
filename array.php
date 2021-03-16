<?php
$students=array("lalit","manju" , "bhavuk","jasmeen");
foreach($students as $key=>$name)
{
	echo "<br>"."$key"." ","$name";
}
$students=array("lalit","manju" , "bhavuk","jasmeen","anmol");
print_r($students);
foreach($students as $student)
{
	echo "<br>"."$student";
	
	
	
}
foreach($students as $key=>$name)
{
	echo "<br>"."$key"." ","$name";
}
for($i=0;$i<10;$i++)
{
	echo "<br>"."$i";
	print("<br>".$i);
}
$i=0;
while($i<10)
	
{
	echo "<br>"."$i";
	$i++;
}
	
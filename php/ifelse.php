<?php
echo $t=date("m.d.y G.i a");
if ($t<"20"){
echo "<br>"."Have a nice day";
}
?>

<?php
$t=date("H");//current time;
if ($t<"6"){
echo "<br>"."Have a nice day";
}
else {
	echo "<br>"."Have a good night";
}
?>

<?php
$t=date("H");
if ($t<"5"){
echo "<br>"."Have a nice day";
}
elseif ($t<"5") {
	echo "<br>"."Have a good night";
}
else {
	echo "<br>"."Have a bad day";
}
?>

<?php
$a=20;
$b=10;
if ($a>$b)
{
	echo "<br>"."Switch statement";
}
?>

<?php
$favcolor = " ";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "<br>"."Your favorite color is neither red, blue, nor green!";
}
?>


<?php

echo "<br>"."<b>Ist date format</b><br>";
$today=date("F jS,l,y");
echo $today;

echo "<br>"."<b>2nd date format</b><br>";
$yesterday=date("m,d,y");
echo $yesterday;

echo "<br>"."<b>3rd date format</b><br>";
$today=date("F jS,l,y");
echo $today;

?>





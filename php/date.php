<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
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

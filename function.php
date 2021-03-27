<?php
function first()
{
echo "this is my function";
}
first();
?>

<?php
function familyName($fname) {
  echo "<br>"."$fname training";
}

familyName("bhavuk");
familyName("manju");
familyName("lalit");
?>

<?php
$x=100;
$y=50;
function add(){
$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
add();
echo "<br>".$z;
?>
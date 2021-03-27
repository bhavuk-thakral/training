<?php
$students=array("lalit","manju" , "bhavuk","jasmeen");
foreach($students as $key=>$name)
{
	echo "<br>"."$key"." ","$name";
}
$students=array("lalit","manju" , "bhavuk","jasmeen","anmol");
print_r($students);

$cars = array("Volvo", "BMW", "Toyota"); 
echo "<br>"."I like " . $cars[2] ;


$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo "<br>".$cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

$cars=array("SUZUKI","SWIFT","HYUNDAI");
$arrlength = count($cars);
for ($i=1;$i<$arrlength;$i++)
{
echo "<br>".$cars[$i];
}


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
}
$i=2;
while($i<10)
	
{
	echo "<br>"."$i";
	$i++;
}

$i=3;
do{
	echo" <br>"."$i";
	$i++;
}
while($i<=10);
?>

<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "<br>"."The number is: $x <br>";
}
?>

<pre>
<?php
$age=array("Bhavuk"=>"21","Manju"=>"21","Lalit"=>"30");
print_r (array_change_key_case($age,CASE_UPPER));
?>


<?php
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));
?>



<?php
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$first_name = array_column($a,'first_name');
print_r($first_name);
?>


<?php
$fname=array("bhavuk","lalit","manju");
$age=array("21","30","43");
$c=array_combine($fname,$age);
print_r($c);
?>


<?php

$a=array("A","B","C","A","C","A");
print_r(array_count_values($a));
?>



<?php
$a1=array("a"=>"bhavuk","b"=>"lalit","c"=>"manju","d"=>"sirikar");
$a2=array("e"=>"sirikar","f"=>"lalit","g"=>"manju");

$result=array_diff($a1,$a2);
print_r($result);
?>



<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff_assoc($a1,$a2);
print_r($result);
?>


<?php
$a1=array("red","green","black","yellow");
$a2=array("red","green","blue");

$result=array_diff_key($a1,$a2);
print_r($result);
?>


<?php
$a1=array_fill(0,2,"blue");
print_r($a1);
?>

<?php
$keys=array("0","1","2","3");
$a1=array_fill_keys($keys,"bhavuk");
print_r ($a1);
?>

<?php
function test_odd($var)
  {
  return($var & 2);
  }
$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));
?>

<?php
$a1=array("red"=>"a","green"=>"b","blue"=>"c","yellow"=>"d");
$result=array_flip($a1);
print_r($result);
?>


<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($a1,$a2);
print_r($result);
?>

<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_intersect_assoc($a1,$a2);
print_r($result);
?>

<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
?>

<?php
$a=array("Volvo"=>"Xxx","audi"=>"yyy","maruti"=>"zzz");
print_r(array_keys($a));
?>


<?php
function myfunction($x)
{
  return($x*$x);
}

$a=array(6,2,8,4,5);
print_r(array_map("myfunction",$a));
?>


<?php
function bhavuk($a,$b)
{
echo $a;
echo $b."<br>";
return 0;

if ($a===$b)
  {
  return 1;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_uassoc($a1,$a2,"bhavuk");
print_r($result);
?>

<?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
?>


<?php
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge_recursive($a1,$a2));
?>

<?php
$a=array("Dog","Cat","Horse","Bear","Zebra");
array_multisort($a);
print_r($a);
?>

<?php
$a=array("red","green");
print_r(array_pad($a,5,"blue"));
?>

<?php
$a=array("red","green","blue");
array_pop($a);
print_r($a);
?>

<?php
$a=array(5,5);
echo(array_product($a));
?>

<?php
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
?>

<?php
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
?>

<?php
function manju($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"manju"));
?>

<?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_replace($a1,$a2));
?>

<?php
$a1=array("a"=>array("red"),"b"=>array("green","blue"),);
$a2=array("a"=>array("yellow"),"b"=>array("black"));
print_r(array_replace_recursive($a1,$a2));
?>

<?php
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
?>
<?php
$str = addcslashes("Hello World!","o");
echo($str);
?>
<pre>
<?php
$str=addslashes(' how are "you" ');
echo($str);
?>

<?php
$str = bin2hex("Hello World!");
echo($str);
?>

<?php
$str = "Hello Bhavuk!";
echo $str."<br>";
echo chop($str,"Bhavuk!");
?>

<?php
echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value
?>

<?php
$str = "Bhavuk Thakral";
echo chunk_split($str,1,".");
?> 

<?php
$str = ",2&5L;&\@=V]R;&0A `";
echo convert_uudecode($str);
?>

<?php
$str = "Hello World!";
echo count_chars($str,3);
?>
 
<?php
$str = "Hello bhavuk. It's your 5th day.";
print_r (explode(" ",$str));
?>

<?php
print_r (get_html_translation_table()); // it is used for SPECIALCHARS and it is default.
?>

<?php
echo hex2bin("48656c6c6f20576f726c6421");
?>

<?php
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
?>

<?php
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");
?>

<?php
$str = "Hello";
echo md5($str);
?>

<?php
echo metaphone("World");
?>
<?php
echo nl2br("One line.\nAnother line.");
?>

<?php
echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",",".");
?>
<?php
echo ord("h")."<br>";
echo ord("hello")."<br>";
?>

<?php
parse_str("name=Peter&age=43");
echo $name."<br>";
echo $age;
?>
<?php
$str = "Hello=0Aworld.";
echo quoted_printable_decode($str);
?>
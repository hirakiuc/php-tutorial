<html>
<body>
<?php
$variable = "name";
$literally = 'My $variable will not print!\\n';

print($literally);
print("<br />");

$literally = "My $variable will print!\\n";
print ($literally);

/****************************/
print("<br />");
/****************************/
$str1 = "Hello World";
$str2 = "1234";

echo $str1 . " " . $str2;
/****************************/
print("<br />");
/****************************/
echo strlen("Hello World!");

/****************************/
print("<br />");
/****************************/

echo strpos("Hello World!", "World");
?>
</body>
</html>

<html>
<body>
<?php
/**-------------------**/
$a = 0;
$b = 0;

for ($i = 0; $i<5; $i++) {
    $a += 10;
    $b += 5;
}

echo "At the end of the loop a = $a and b = $b";
/**-------------------**/

echo "<br />";

/**-------------------**/
$j = 0;
$num2 = 50;
while ($j < 10) {
    $num2--;
    $j++;
}
echo "Loop stopped at j = $j and num = $num2";
/**-------------------**/

echo "<br />";

/**-------------------**/

$k = 0;
$num3 = 0;

do {
    $k++;
} while ($k < 10);
echo "Loop stopped at k = $k";
/**-------------------**/

echo "<br />";

/**-------------------**/
$array = array(1,2,3,4,5);

foreach ($array as $value) {
    echo "Value is $value <br />";
}
/**-------------------**/

echo "<br />";

/**-------------------**/
$l = 0;
while ($l < 10) {
    $l++;
    if ($l == 3) {
        break;
    }
}
echo "Loop stopped at l = $l";
/**-------------------**/

echo "<br />";

/**-------------------**/
$ary2 = array(1,2,3,4,5);

foreach ($ary2 as $value) {
    if ($value == 3) {
        continue;
    }
    echo "Value is $value <br />";
}
?>
</body>
</html>

<html>
<head>
  <title>Passing Argument by Reference</title>
</head>
<body>
  <?php
function addFive($num) {
  $num += 5;
}

function addSix(&$num) {
  $num += 6;
}

$org = 10;
addFive($org);
echo "Original Value is $org <br/>";

addSix($org);
echo "Original Value is $org<br/>";
  ?>
</body>
</html>

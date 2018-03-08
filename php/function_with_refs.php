<html>
<head>
  <title>Passing Argument by Reference</title>
</head>
<body>
<?php
require("./function_with_refs_definition.php");

$org = 10;
addFive($org);
echo "Original Value is $org <br/>";

addSix($org);
echo "Original Value is $org<br/>";
?>
</body>
</html>

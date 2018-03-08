<html>
<head>
  <title>Dynamic Function Calls</title>
</head>
<body>
<?php
require("./function_dynamic_call_definition.php");

$func = "sayHello";
$func();

$func2 = "say" . "Hello";
$func2();
?>
</body>
</html>

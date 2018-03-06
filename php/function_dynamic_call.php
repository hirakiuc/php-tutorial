<html>
<head>
  <title>Dynamic Function Calls</title>
</head>
<body>
  <?php
function sayHello() {
  echo "Hello<br />";
}

$func = "sayHello";
$func();

$func2 = "say" . "Hello";
$func2();
  ?>
</body>
</html>

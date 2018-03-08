<html>
<head>
  <title>Accessing Cookies with PHP</title>
</head>
<body>
<?php
if (isset($_COOKIE['name'])) {
    echo $_COOKIE["name"] . "<br/>";

    /* WARN: HTTP_COOKIE_VARS is deprecated! */
    /* is equivalent to */
    //echo $HTTP_COOKIE_VARS['name'] . "<br/>";
} else {
    echo "Sorry... Not recognized your name" . "<br/>";
}

if (isset($_COOKIE['age'])) {
    echo $_COOKIE["age"] . "<br/>";

    /* WARN: HTTP_COOKIE_VARS is deprecated! */
    /* is equivalent to */
    //echo $HTTP_COOKIE_VARS['age'] . "<br/>";
} else {
    echo "Sorry... Not recognized your age" . "<br/>";
}
?>
</body>
</html>

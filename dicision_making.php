<html>
  <body>
    <?php
date_default_timezone_set('Asia/Tokyo');

$d = date("D");
if ($d == "Fri")
  echo "Have a nice weekend!";
else
  echo "Have a nice day!";

echo "<br />";

if ($d == "Fri")
  echo "Have a nice weekend!";
elseif ($d == "Sun")
  echo "Have a nice Sunday!";
else
  echo "Have a nice day!";

echo "<br />";

switch($d) {
case "Mon":
  echo "Today is Monday";
  break;
case "Tue":
  echo "Today is Tuesday";
  break;
case "Wed":
  echo "Today is Wedesday";
  break;
case "Thu":
  echo "Today is Thursday";
  break;
case "Fri":
  echo "Today is Friday";
  break;
case "Sat":
  echo "Today is Saturday";
  break;
case "Sun":
  echo "Today is Sunday";
  break;

default:
  echo "Wonder which day is this ?";
}
    ?>
  </body>
</html>

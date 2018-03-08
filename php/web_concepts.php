<?php
declare(strict_types=1);
?>
<html>
<body>
<?php
require_once "./web_concepts_definition.php";

use function phptutorial\getBrowser as getBrowser;

// now try it
$ua = getBrowser();
$yourBrowser = "Your browser: " . $ua['name'] \
  . " " . $ua['version'] . " on " . $ua['platform'] . " reports: <br />" . $ua['userAgent'];

print_r($yourBrowser);
?>
</body>
</html>

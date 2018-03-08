<html>
<body>
<?php
require_once "./web_concepts_rand_images_definition.php";

use phptutorial\getImagePath as getImagePath;

// microtime(true) means that get microtime as float.
srand(microtime(true) * 1000000);
$num = rand(1, 4);

$image_file = getImagePath(rand(1, 4));

echo "Random Image : <img src=$image_file />";
?>
</body>
</html>

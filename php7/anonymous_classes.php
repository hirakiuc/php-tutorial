<?php
require_once "./anonymous_classes_logger.php";
require_once "./anonymous_classes_application.php";

use php7tutorial\Logger as Logger;
use php7tutorial\Application as Application;

$app = new Application();
$app->setLogger(new class implements Logger {
  public function log(string $msg) {
    print($msg);
  }
});

$app->getLogger()->log("My first Log Message");
?>

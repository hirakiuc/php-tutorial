<?php

// router.php
if (preg_match('/\.(?:png|jpg|jpeg|git)$/', $_SERVER["REQUEST_URI"])) {
  return false; // show just like requested.
} else {
  echo "<p>Welcome to PHP</p>";
}
?>

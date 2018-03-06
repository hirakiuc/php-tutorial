<?php
// is_cli_server.php
if (php_sapi_name() == 'cli-server') {
  /* navigate to static content and return false. */
  return false;
}

/* process index.php */
?>

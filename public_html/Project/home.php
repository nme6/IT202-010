<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1 style="padding: 10px 0 0 10px">Home</h1>
<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
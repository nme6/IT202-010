<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in()) {
    die(header("Location: " . get_url("home.php")));
}
?>
<div class="container-fluid col-lg-4 offset-lg-4">
    <div class="text-center"><h1><span>Transaction History</span></h1></div>
    <p> Put table here <p>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
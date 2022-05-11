<?php
    require(__DIR__ . "/../../partials/nav.php");

    if (!is_logged_in()) {
        die(header("Location: " . get_url("home.php")));
    }


?>
<div class="container-fluid col-lg-4 offset-lg-4">
    <h1><span>Loans</span></h1>
    <p>Test paragraph for loan page</p>
</div>
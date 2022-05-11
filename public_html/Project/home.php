<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid col-lg-4 offset-lg-4">
    <h1><span>Home</span></h1>
    <div class="list-group">
        <a href="<?php echo get_url('create_account.php'); ?>" class="list-group-item list-group-item-action">Create Account</a></li>
        <a href="<?php echo get_url('my_accounts.php'); ?>" class="list-group-item list-group-item-action">View My Accounts</a></li>
        <a href="<?php echo get_url('deposit.php'); ?>" class="list-group-item list-group-item-action">Deposit</a></li>
        <a href="<?php echo get_url('withdraw.php'); ?>" class="list-group-item list-group-item-action">Withdraw</a></li>
        <a href="<?php echo get_url('transfer.php'); ?>" class="list-group-item list-group-item-action">Transfer</a></li>
        <a href="<?php echo get_url('external_transfer.php'); ?>" class="list-group-item list-group-item-action">External Transfer</a></li>
        <a href="<?php echo get_url('loans.php'); ?>" class="list-group-item list-group-item-action">Take Out a Loan</a></li>
        <a href="<?php echo get_url('profile.php'); ?>" class="list-group-item list-group-item-action">Profile</a></li>
    </div>
</div>
<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
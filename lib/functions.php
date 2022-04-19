<?php
//TODO 1: require db.php
require_once(__DIR__ . "/db.php");
//This is going to be a helper for redirecting to our base project path since it's nested in another folder
//This MUST match the folder name exactly
$BASE_PATH = '/Project';
//TODO 4: Flash Message Helpers
require(__DIR__ . "/flash_messages.php");

//require safer_echo.php
require(__DIR__ . "/safer_echo.php");
//TODO 2: filter helpers
require(__DIR__ . "/sanitizers.php");

//TODO 3: User helpers
require(__DIR__ . "/user_helpers.php");


//duplicate email/username
require(__DIR__ . "/duplicate_user_details.php");
//reset session
require(__DIR__ . "/reset_session.php");

require(__DIR__ . "/get_url.php");

// Get or Create Account
require(__DIR__ . "/get_or_create_account.php");
// Get account balance
require(__DIR__ . "/get_account_balance.php");
// Refresh account balance
require(__DIR__ . "/refresh_account_balance.php");
// Get user account ID
require(__DIR__ . "/get_user_account_id.php");
// Balance the change (transaction)
// Passed as a positive value, coming from account_src, going to account_dest
require(__DIR__ . "/balance_change.php");
?>
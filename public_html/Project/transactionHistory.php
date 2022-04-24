<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in()) {
    die(header("Location: " . get_url("home.php")));
}

$uid = get_user_id();
$query = "SELECT account_number, account_type, balance, created, id from Accounts ";
$params = null;

$query .= " WHERE user_id = :uid";
$params =  [":uid" => "$uid"];

$query .= " ORDER BY created desc LIMIT 5";
$db = getDB();
$stmt = $db->prepare($query);
$accounts = [];
try {
    $stmt->execute($params);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($results) {
        $accounts = $results;
    } else {
        flash("No accounts found", "warning");
    }
} catch (PDOException $e) {
    flash(var_export($e->errorInfo, true), "danger");
}

$src_id = (int)se($_POST, "account_id", "", false) -1;
$query = "SELECT account_src, account_dest, transaction_type, balance_change, memo, created from Transaction_History ";
$params = null;

$query .= " WHERE account_src = :src_id";
$params =  [":src_id" => "$src_id"];

$query .= " ORDER BY created desc LIMIT 10";
$db = getDB();
$stmt = $db->prepare($query);
global $transactions; $transactions = [];

if (isset($_POST["account_id"]))
{
    $src_id = (int)se($_POST, "account_id", "", false) -1;
    $query = "SELECT account_src, account_dest, transaction_type, balance_change, memo, created from Transaction_History ";
    $params = null;

    $query .= " WHERE account_src = :src_id";
    $params =  [":src_id" => "$src_id"];

    $query .= " ORDER BY created desc LIMIT 10";
    $db = getDB();
    $stmt = $db->prepare($query);
    global $transactions; $transactions = [];

    try {
        $stmt->execute($params);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($results) {
            $transactions = $results;
        } else {
            flash("No transactions found", "warning");
        }
    } catch (PDOException $e) {
        flash(var_export($e->errorInfo, true), "danger");
    }
}
?>
<div class="container-fluid col-lg-4 offset-lg-4">
    <div class="text-center"><h1><span>Transaction History</span></h1></div>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
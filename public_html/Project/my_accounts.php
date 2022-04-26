<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in()) {
    die(header("Location: " . get_url("home.php")));
}

$uid = get_user_id();
$query = "SELECT account_number, account_type, balance, created, modified, id from Accounts ";
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

if (isset($_POST["account_id"]))
{
    $src_id = (int)se($_POST, "account_id", "", false);
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
<div class="container-fluid col-xl-10 offset-xl-1">
    <h1><span>My Accounts</span></h1>
    <table class="table table-bordered">
        <thead>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Account Balance</th>
            <th>Modified</th>
            <th>More Info</th>
        </thead>
        <tbody>
            <?php if (empty($accounts)) : ?>
                <tr>
                    <td colspan="100%">No accounts found</td>
                </tr>
            <?php else : ?>
                <?php foreach ($accounts as $account) : ?>
                    <tr>
                        <td><?php se($account, "account_number"); ?></td>
                        <td><?php se($account, "account_type"); ?></td>
                        <td><?php se($account, "balance"); ?></td>
                        <td><?php se($account, "modified"); ?></td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="account_id" value="<?php se($account, 'id'); ?>" />
                                <input type="hidden" name="account_number" value="<?php se($account, 'account_number'); ?>" />
                                <input type="hidden" name="account_type" value="<?php se($account, 'account_type'); ?>" />
                                <input type="hidden" name="balance" value="<?php se($account, 'balance'); ?>" />
                                <input type="hidden" name="created" value="<?php se($account, 'created'); ?>" />
                                <div class="text-center"><input type="submit" class="btn btn-primary" style="padding: 1px 5px 1px; margin: 10px 0 -2.5px 0" value="More Info" /></div>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<div class="container-fluid col-xl-10 offset-xl-1">
    <?php if (isset($_POST["account_id"])) : ?>
        <h1><span>Account Information</span></h1>
        <table class="table table-bordered">
            <thead>
                <th>Account Number</th>
                <th>Account Type</th>
                <th>Balance</th>
                <th>Opened</th>
            </thead>
            <tr>
                <td><?php se($_POST, "account_number"); ?></td>
                <td><?php se($_POST, "account_type"); ?></td>
                <td><?php se($_POST, "balance"); ?></td>
                <td><?php se($_POST, "created"); ?></td>
            </tr>
        </table>
        <h1><span>Transaction History</span></h1>
        <table class="table table-bordered">
            <thead>
                <th>Source</th>
                <th>Destination</th>
                <th>Transaction Type</th>
                <th>Balance Change</th>
                <th>Memo</th>
                <th>Date & Time</th>
            </thead>
            <?php if (empty($transactions)) : ?>
                <tr>
                    <td colspan="100%">No transactions found</td>
                </tr>
            <?php else : ?>
                <?php foreach ($transactions as $transaction) : ?>
                    <tr>
                        <td><?php se($transaction, "account_src"); ?></td>
                        <td><?php se($transaction, "account_dest"); ?></td>
                        <td><?php se($transaction, "transaction_type"); ?></td>
                        <td><?php se($transaction, "balance_change"); ?></td>
                        <td><?php se($transaction, "memo"); ?></td>
                        <td><?php se($transaction, "created"); ?></td>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    <?php endif; ?>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
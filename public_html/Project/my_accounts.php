<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in()) {
    die(header("Location: " . get_url("home.php")));
}

$uid = get_user_id();
$query = "SELECT account_number, account_type, balance, created, modified, apy, id, frozen from Accounts ";
$params = null;

/*
    Neil Evans (nme6)
    May 12th, 2022
*/
$query .= " WHERE user_id = :uid AND is_active = 1";
$params =  [":uid" => "$uid"];

$query .= " ORDER BY created desc";
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

if (isset($_REQUEST["account_id"]))
{
    $src_id = (int)se($_REQUEST, "account_id", "", false);
    
    // Sorting and filtering for pagination
    $startDate = se($_GET, "start", date("Y-m-d", strtotime("-1 month")), false);
    $endDate = se($_GET, "end", date("Y-m-d"), false);
    $type = se($_GET, "type", false, false);
    $orderby = se($_GET, "orderby", false, false);
    
    // Split queries into data and total
    $base_query = "SELECT account_src, account_dest, transaction_type, balance_change, memo, created from Transaction_History ";
    $total_query = "SELECT count(1) as total FROM Transaction_History ";
    
    // Dynamic query
    $query = " WHERE 1=1"; // 1=1 shortcut to conditionally build AND clauses
    $params = []; // Define the default params, add keys as needed and pass to execute
    // Apply src filter
    $query .= " AND account_src = :src_id ";
    $params =  [":src_id" => $src_id];

    // Apply start-end filtering
    if ($startDate) 
    {
        $query .= " AND created >= :startDate ";
        $params[":startDate"] = $startDate;
    }
    if ($endDate) 
    {
        $query .= " AND created <= :endDate ";
        // Offset the time to be 1 minute before end of day
        // Time component default is 00:00:00 (beginning of the day)
        // $params[":end"] = $end;
        $params[":endDate"] = date("Y-m-d 23:59:59", strtotime($endDate));
    }

    // Apply transction type filter
    if (!empty($type)) {
        $query .= " AND transaction_type = :type ";
        $params[":type"] = "$type";
    }
    // Apply column and order sort
    if (!empty($orderby))
    {
        $query .= " ORDER BY created $orderby ";
    }
    else
    {
        $query .= " ORDER BY created desc ";
    }

    // Paginate function
    $per_page = 10;
    paginate($total_query . $query, $params, $per_page);
    $query .= " LIMIT :offset, :count";
    $params[":offset"] = $offset;
    $params[":count"] = $per_page;

    $db = getDB();
    $transactions = [];

    // Get the records from the query
    $stmt = $db->prepare($base_query . $query); // Dynamically generated query
    // Convert this to use bindValue (integer), so it checks that they are integers before it's mapped to the array
    foreach ($params as $key => $value) {
        $t = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue($key, $value, $t);
    }
    $params = null; // Set params to null to avoid issues
    
    try {
        $stmt->execute($params); // Dynamically populated params to bind are grabbed
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $transactions = $r;
        }
        else {
            flash("No transactions found", "warning");
        }
    } 
    catch (PDOException $e) {
        flash(var_export($e->errorInfo, true), "danger");
    }
    /* 
    Milestone 2 Transaction History Generation (List 10 transaction ordered in descending based on creation of transaction (new to old))
    ====================================================================================================================================
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
    */
}

/*
Neil Evans (nme6)
May 12th, 2022
*/
function loanBalance($balance)
{
    echo((int)$balance*-1);
}

if(isset($_POST['close']) && isset($_POST['close_aid']))
{
    $c_aid = (int)se($_POST, "close_aid", "", false);
    $q = "UPDATE Accounts set is_active = 0 where id = :c_aid";
    $db = getDB();
    $stmt = $db->prepare($q);
    try {
        $stmt->execute([":c_aid" => $c_aid]);
    } catch (PDOException $e) {
        flash("Error closing account: " . var_export($e->errorInfo, true), "danger");
    }

    flash("Successfully closed account, you may refresh/navigate away from the page", "success");

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
            <?php foreach ($accounts as $account) : ?>
                <?php if((int)se($account, "balance", "", false) == 0) : ?>
                    <th>Close Account</th>
                <?php endif; ?>
            <?php endforeach; ?>
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
                        <?php if(se($account, "account_type", "", false) == "loan") : ?>
                            <td><?php loanBalance(se($account, "balance", "", false)); ?></td>
                        <?php else : ?>
                            <td><?php se($account, "balance"); ?></td>
                        <?php endif; ?>
                        <td><?php se($account, "modified"); ?></td>
                        <td>
                            <form method="POST" action="?account_id=<?php se($account, 'id');?>">
                                <input type="hidden" name="account_id" value="<?php se($account, 'id'); ?>" />
                                <input type="hidden" name="account_number" value="<?php se($account, 'account_number'); ?>" />
                                <input type="hidden" name="account_type" value="<?php se($account, 'account_type'); ?>" />
                                <input type="hidden" name="balance" value="<?php se($account, 'balance'); ?>" />
                                <input type="hidden" name="created" value="<?php se($account, 'created'); ?>" />
                                <input type="hidden" name="apy" value="<?php se($account, 'apy'); ?>" />
                                <input type="hidden" name="frozen" value="<?php se($account, 'frozen'); ?>" />
                                <?php if ((int)se($account, 'frozen', "", false) == 1) : ?>
                                    FROZEN
                                <?php else : ?>
                                    <div class="text-center"><input type="submit" class="btn btn-primary" style="padding: 1px 5px 1px; margin: 10px 0 -2.5px 0" value="More Info" /></div>
                                <?php endif; ?>                            
                            </form>
                        </td>
                        <!-- Neil Evans (nme6), May 12th, 2022 -->
                        <?php if((int)se($account, "balance", "", false) == 0) : ?>
                            <td>
                            <form method="POST" onsubmit="return confirm('Are you sure you want to close this account?');">
                                <input type="hidden" name="close_aid" value="<?php se($account, 'id'); ?>" />
                                <div class="text-center"><input type="submit" name="close" class="btn btn-primary" style="padding: 1px 5px 1px; margin: 10px 0 -2.5px 0" value="Close Account" /></div>
                            </form>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<div class="container-fluid col-xl-10 offset-xl-1">
    <!-- I can't figure out a way to refresh the Account Information table when the filter is applied
    (or when pagination occurs). So, to fix it, I'm just completely removing it when the filter is 
    applied. It can be regenerated via hitting the "More Info" button per each account -->
    <?php if (isset($_POST["account_id"])) : ?>
        <h1><span>Account Information</span></h1>
        <table class="table table-bordered">
            <thead>
                <th>Account Number</th>
                <th>Account Type</th>
                <?php if (se($_POST, 'apy',"", false) > 0) : ?>
                    <th>APY</th>
                <?php endif; ?>
                <th>Balance</th>
                <th>Opened</th>
            </thead>
            <tr>
                <td><?php se($_POST, "account_number"); ?></td>
                <td><?php se($_POST, "account_type"); ?></td>
                <?php if (se($_POST, 'apy',"", false) > 0) : ?>
                    <td><?php se($_POST, "apy"); ?></td>
                <?php endif; ?>
                <?php if(se($_POST, "type", "", false) == "loan") : ?>
                    <td><?php loanBalance(se($_POST, "balance","", false)); ?>
                <?php else : ?>
                    <td><?php se($_POST, "balance"); ?></td>
                <?php endif; ?>
                <td><?php se($_POST, "created"); ?></td>
            </tr>
        </table>
    <?php endif; ?>
    <?php if (isset($_REQUEST["account_id"])) : ?>
        <?php if (!isset($_POST["account_id"])) : ?>
            <h2 class="pt-3">Where is my account information?</h2>
            <p>Due to a technical issue, I am unable to get the Account Information table to display properly when filtering or pagination is applied.
                To negate this issue, I am just clearing the table from the screen when filtering or pagination is applied. To get the table back, you
                will need to click the "More Info" button for each account. I apologize for this technical issue.
            </p>
        <?php endif; ?>
        <h1><span>Transaction History</span></h1>
        <!-- Sorting and filter insertion -->
        <div>
            <form>
                <input type = hidden name = account_id value = <?php se($_REQUEST, "account_id"); ?>>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="start-date">Start</span>
                        <input name="start" type="date" class="form-control" placeholder="mm/dd/yyyy" aria-label="start date" aria-describedby="start-date" value="<?php se($startDate); ?>">
                    <span class="input-group-text" id="end-date">End</span>
                        <input name="end" type="date" class="form-control" placeholder="mm/dd/yyyy" aria-label="end date" aria-describedby="end-date" value="<?php se($endDate); ?>">
                    <span class="input-group-text" id="filter">Transaction Type</span>
                    <select class="form-control" name="type" value="<?php se($type); ?>">
                        <option value="deposit">Deposit</option>
                        <option value="withdraw">Withdraw</option>
                        <option value="transfer">Transfer</option>
                        <option value="ext-transfer">External Transfer</option>
                    </select>
                    <span class="input-group-text" id="sort">Sort</span>
                    <select class="form-control" name="sort" aria-label="sort" aria-describedby="sort">
                        <option value="desc">Descending (New → Old)</option>
                        <option value="asc">Ascending (Old → New)</option>
                    </select>
                </div>
                <input type="submit" class="mt-1 btn btn-primary" value="Filter" />
            </form>
        </div>
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
        <?php include(__DIR__ . "/../../partials/pagination.php"); ?>
    <?php endif; ?>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
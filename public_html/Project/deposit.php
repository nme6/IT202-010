<?php
    require(__DIR__ . "/../../partials/nav.php");

    if (!is_logged_in()) {
        die(header("Location: " . get_url("home.php")));
    }

    $uid = get_user_id();
    $query = "SELECT account_number, account_type, balance, created, id, is_active from Accounts ";
    $params = null;

    /*
    Neil Evans (nme6)
    May 12th, 2022
    */
    $query .= " WHERE user_id = :uid AND is_active = 1 AND NOT account_type = :loan";
    $params =  [":uid" => "$uid", ":loan" => "loan"];

    $query .= " ORDER BY created desc";
    $db = getDB();
    error_log("user_id: $uid");
    error_log("query: $query");
    $stmt = $db->prepare($query);
    $accounts = [];
    try {
        $stmt->execute($params);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($results) {
            $accounts = $results;
            //echo var_export($accounts, true); 
        } else {
            flash("No accounts found", "warning");
        }
    } catch (PDOException $e) {
        flash(var_export($e->errorInfo, true), "danger");
    }

    if (isset($_POST["account_id"]) && isset($_POST["deposit"])) 
    {
        $deposit = (int)se($_POST, "deposit", "", false);
        $aid = se($_POST, "account_id", "", false);
        $memo = $_POST["memo"];
        if (!($deposit > 0))
        {
            flash("Input a value to deposit (Greater than 0)", "warning");
        }
        else
        {
            balance_change($deposit, "deposit",$aid, -1, $aid, $memo);
            refresh_account_balance($aid);
            flash("Deposit was successful", "success");
            die(header("Location: " . get_url("my_accounts.php")));
        }
    }
    else
        flash("No account has been selected", "warning");
?>
<div class="container-fluid col-lg-4 offset-lg-4">
    <h1><span>Deposit</span></h1>
    <div>
        <form method="POST">
            <div class="mb-3">
                <label for="accountList" class="form-label">Choose Account to Deposit Money To</label>
                <select class="form-select" style="margin: 15px 0" name="account_id" id="accountList" autocomplete="off">
                <?php if (!empty($accounts)) : ?>
                    <?php foreach ($accounts as $account) : ?>
                        <option value="<?php se($account, 'id'); ?>">
                            <?php se($account, "account_number"); ?> (Type: <?php se($account, 'account_type'); ?>; Balance = $<?php se($account, "balance"); ?>)
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="d">Amount to Deposit</label>
                <input class="form-control" type="number" name="deposit" placeholder="Amount" id="d"></input>
            </div>
            <div class="mb-3">
                <label class="form-label" for="m">Memo</label>
                <input class="form-control" type="text" placeholder="Deposit" aria-label="default input example" name="memo">
            </div>
            <input type="submit" class="mt-3 btn btn-primary" value="Deposit" />
        </form>
    </div>
</div>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>
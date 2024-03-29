<?php
    require(__DIR__ . "/../../partials/nav.php");

    if (!is_logged_in()) {
        die(header("Location: " . get_url("home.php")));
    }

    $uid = get_user_id();
    $query = "SELECT account_number, account_type, balance, created, id from Accounts ";
    $params = null;

    /*
    Neil Evans (nme6)
    May 12th, 2022
    */
    $query .= " WHERE user_id = :uid AND is_active = 1";
    $params =  [":uid" => "$uid"];

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

    if (isset($_POST["src_id"]) && isset($_POST["dest_id"]) && isset($_POST["transfer"])) 
    {
        $transfer = (int)se($_POST, "transfer", "", false);
        $src = (int)se($_POST, "src_id", "", false);
        $dest = (int)se($_POST, "dest_id", "", false);
        $dest_type = get_account_type($dest);
        $memo = $_POST["memo"];
        //$balance = get_account_balance($src);
        //flash("balance = $balance");
        if($src == $dest)
        {
            flash("Cannot transfer to the same account", "warning");
        }
        else if (!($transfer > 0))
        {
            flash("Input a value to transfer (Greater than 0)", "warning");
        }
        else if($transfer > get_account_balance($src))
        {
            flash("Insufficient Funds", "warning");
        }
        else
        {
            if($dest_type == 'loan')
            {
                $owed = get_account_balance($dest)*-1;
                if ($owed < $transfer)
                {
                    flash("You only have $owed more to pay off your loan", "warning");
                }
                else 
                {
                    balance_change($transfer, "transfer", $src, $src, $dest, $memo);
                    refresh_account_balance($src);
                    refresh_account_balance($dest);
                    flash("Transfer was successful", "success");
                    if (get_account_balance($dest) == 0)
                    { flash("Congratulations! You've paid off your loan!!!", "success");}
                    die(header("Location: " . get_url("my_accounts.php")));
                }
            }
            else
            {
                balance_change($transfer, "transfer", $src, $src, $dest, $memo);
                refresh_account_balance($src);
                refresh_account_balance($dest);
                flash("Transfer was successful", "success");
                die(header("Location: " . get_url("my_accounts.php")));
            }
        }
    }
    else
        flash("No account has been selected", "warning");
?>
<div class="container-fluid col-lg-4 offset-lg-4">
    <h1><span>Transfer</span></h1>
    <form method="POST">
        <div class="mb-3">
            <label for="sourceList" class="form-label">Source Account</label>
            <select class="form-select" name="src_id" id="sourceList" autocomplete="off">
                <?php if (!empty($accounts)) : ?>
                    <?php foreach ($accounts as $account) : ?>
                        <?php if(se($account, "account_type", "", false) != 'loan') : ?>
                            <option value="<?php se($account, 'id'); ?>">
                                <?php se($account, "account_number"); ?> (Type: <?php se($account, 'account_type'); ?>; Balance = $<?php se($account, "balance"); ?>)
                            </option>
                            <?php endif; ?> 
                    <?php endforeach; ?>
                <?php endif; ?> 
            </select>
        </div>
        <div>
            <div class="mb-3">
                <label for="destList" class="form-label">Destination Account</label>
                <select class="form-select" name="dest_id" id="destList" autocomplete="off">
                <?php if (!empty($accounts)) : ?>
                    <?php foreach ($accounts as $account) : ?>
                        <option value="<?php se($account, 'id'); ?>">
                            <?php se($account, "account_number"); ?> (Type: <?php se($account, 'account_type'); ?>; Balance = $<?php se($account, "balance"); ?>)
                        </option>
                    <?php endforeach; ?>
                <?php endif; ?> 
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="d">Amount to Transfer</label>
            <input class="form-control" type="number" name="transfer" placeholder="Amount" id="d"></input>
        </div>
        <div class="mb-3">
            <label class="form-label" for="m">Memo</label>
            <input class="form-control" type="text" placeholder="Transfer" aria-label="default input example" name="memo">
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Transfer" />
    </form>
</div>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>
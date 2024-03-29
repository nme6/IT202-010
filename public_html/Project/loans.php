<?php
    require(__DIR__ . "/../../partials/nav.php");

    if (!is_logged_in()) {
        die(header("Location: " . get_url("home.php")));
    }

    //get user accounts 
    $uid = get_user_id();
    $query = "SELECT account_number, account_type, balance, created, id from Accounts ";
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

    // Create the actual loan
    if (isset($_POST["dest_id"]) && isset($_POST["deposit"])) 
    {
        $type = "loan";
        $apy = getAPY($type);
        //flash("rate: $apy");
        $deposit = (int)se($_POST, "deposit", "", false);
        $user_dest = (int)se($_POST, "dest_id", "", false);
        if ($deposit < 500) 
        {
            flash("Minimum deposit is $500", "warning");
        } 
        else 
        {
            try 
            {
                $db = getDB();
                $an = null;
                $stmt = $db->prepare("INSERT INTO Accounts (account_number, user_id, balance, account_type, apy) VALUES(:an, :uid, :deposit, :type, :apy)");
                $uid = get_user_id(); //caching a reference

                try {
                    $stmt->execute([":an" => $an, ":uid" => null, ":type" => null, ":deposit" => null, ":apy" => null]);
                    $account_id = $db->lastInsertId();
                    //flash("account_id = $account_id");
                    $an = str_pad($account_id+1,12,"202", STR_PAD_LEFT);
                    $stmt->execute([":an" => $an, ":uid" => $uid, ":type" => $type, ":deposit" => $deposit, ":apy" => $apy]);
                    
                    flash("Successfully created account!", "success");
                } 
                catch (PDOException $e) {
                    flash("An unexpected error occurred, please try again " . var_export($e->errorInfo, true), "danger");
                }
            }
            catch (PDOException $e) 
            {
                $code = se($e->errorInfo, 0, "00000", false);
                //if it's a duplicate error, just let the loop happen
                //otherwise throw the error since it's likely something looping won't resolve
                //and we don't want to get stuck here forever
                if ($code !== "23000") 
                {
                    throw $e;
                }
            }

            $aid = $account_id + 1;
            balance_change($deposit, "deposit", $aid, $aid, $user_dest, "added loan");
            refresh_account_balance($user_dest);
            die(header("Location: " . get_url("my_accounts.php")));
        }
    }
    else
        flash("Account type must be selected", "warning");
?>
<div class="container-fluid col-lg-4 offset-lg-4">
    <h1><span>Loans</span></h1>
    <form method="POST">
        <div class="mb-3">
            <label for="destList" class="form-label">Account Destination</label>
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
        <div class="mb-3">
            <label class="form-label" for="d">Deposit (Minimum = $500) </label>
            <input class="form-control" type="number" name="deposit" placeholder="Amount" id="d"></input>
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Get Loan" />
    </form>
</div>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>
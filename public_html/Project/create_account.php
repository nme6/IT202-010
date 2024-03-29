<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in()) {
    die(header("Location: " . get_url("home.php")));
}

if (isset($_POST["acct_type"]) && isset($_POST["deposit"])) 
{
    $type = se($_POST, "acct_type", "", false);
    $apy = getAPY($type);
    $deposit = (int)se($_POST, "deposit", "", false);
    if ($deposit < 5) 
    {
        flash("Minimum deposit is $5", "warning");
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
                $an = str_pad($account_id,12,"202", STR_PAD_LEFT);
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
    }
    $aid = $account_id + 1;
    balance_change($deposit, "deposit", $aid, -1, $aid, "Opening balance");
    refresh_account_balance($aid);
    die(header("Location: " . get_url("my_accounts.php")));
}
else
    flash("Account type must be selected", "warning");
?>

<div class="container-fluid col-lg-4 offset-lg-4">
    <h1><span>Create Account</span></h1>
    <form method="POST">
        <div class="form-check mb-3" style="margin-left: -4%;">
            <label for="sourceList" class="form-label">Account Type</label>
            <select class="form-select" name="acct_type" id="accountTypes" autocomplete="off">
                <option value="checkings">Checkings</option>
                <option value="savings">Savings</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="d">Deposit (Min = $5.00) </label>
            <input class="form-control" type="number" name="deposit" id="d"></input>
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Create Account" />
    </form>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
<?php
function balance_change($balance_change, $transaction_type, $aid, $account_src = -1, $account_dest = -1, $memo = "")
{
    //Ignore record of 0 point transactions
    if ($balance_change > 0) 
    {
        $query = "INSERT INTO Transaction_History (account_src, account_dest, balance_change, transaction_type, memo) 
            VALUES (:acs, :acd, :pc, :r,:m), 
            (:acs2, :acd2, :pc2, :r, :m)";
        //insert both records at once, note the placeholders kept the same and the ones changed.
        $params[":acs"] = $account_src;
        $params[":acd"] = $account_dest;
        $params[":r"] = $transaction_type;
        $params[":m"] = $memo;
        $params[":pc"] = ($balance_change * -1); //src account is giving away money

        $params[":acs2"] = $account_dest;
        $params[":acd2"] = $account_src;
        $params[":pc2"] = $balance_change;   //dest account is recieving money
        $db = getDB();
        $stmt = $db->prepare($query);
        try 
        {
            $stmt->execute($params);
            //Only refresh the balance of the user if the logged in user's account is part of the transfer
            //this is needed so future features don't waste time/resources or potentially cause an error when a calculation
            //occurs without a logged in user
            if ($account_src == $aid || $account_dest == $aid) 
            {
                refresh_account_balance($aid);
            }
        } 
        catch (PDOException $e) 
        {
            flash("Transfer error occurred: " . var_export($e->errorInfo, true), "danger");
        }
    }
}
<?php
function get_account_balance($aid)
{
    $query = "SELECT balance, id from Accounts ";
    $params = null;

    /*
    Neil Evans (nme6)
    May 12th, 2022
    */
    $query .= " WHERE id = :aid AND is_active = 1";
    $params =  [":aid" => "$aid"];

    $query .= " ORDER BY created desc";
    $db = getDB();

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

    $account = $accounts[0];
    $balance = (int)se($account, "balance","", false);
    return $balance;
}
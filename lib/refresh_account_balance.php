<?php
function refresh_account_balance($src_id)
{   
    // Cache the account balance via Transaction_History history
    $query = "UPDATE Accounts set balance = (SELECT IFNULL(SUM(balance_change), 0) from Transaction_History WHERE account_src = :src) where id = :src";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":src" => $src_id]);
    } catch (PDOException $e) {
        flash("Error refreshing account: " . var_export($e->errorInfo, true), "danger");
    }
}

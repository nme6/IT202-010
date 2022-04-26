<?php
function get_account_balance($aid)
{
    $query = "SELECT balance from Accounts WHERE id = :aid";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":aid" => $aid]);
        $balance = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        return $balance;
    } catch (PDOException $e) {
        flash("Error refreshing account: " . var_export($e->errorInfo, true), "danger");
    }
    return 0;
}
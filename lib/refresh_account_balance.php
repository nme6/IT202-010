<?php
function refresh_account_balance()
{
    if (is_logged_in()) {
        //cache account balance via Transaction_History history
        $query = "UPDATE Accounts set balance = (SELECT IFNULL(SUM(balance_change), 0) from Transaction_History WHERE account_src = :src) where id = :src";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":src" => get_user_account_id()]);
        } catch (PDOException $e) {
            flash("Error refreshing account: " . var_export($e->errorInfo, true), "danger");
        }
    }
}

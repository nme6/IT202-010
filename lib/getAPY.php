<?php
/*
Neil Evans (nme6)
May 12th, 2022
*/
function getAPY($apy_type)
{
    $q = "SELECT apy_type, apy FROM System_Properties WHERE apy_type = :apy_type";
    $p = [":apy_type" => $apy_type];

    $db = getDB();
    $stmt = $db->prepare($q);
    $results = [];
    try {
        $stmt->execute($p);
        $r = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
        if ($r) {
            $results = $r;
            //echo var_export($results, true); 
        } else {
            flash("No accounts found", "warning");
        }
    } catch (PDOException $e) {
        flash(var_export($e->errorInfo, true), "danger");
    }

    $apy = se($results[$apy_type], 'apy_type',"", false);
    //se($apy);
    return $apy;
}
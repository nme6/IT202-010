<?php
function get_user_account_id()
{
    if (is_logged_in() && isset($_SESSION["user"]["account"])) {
        return se($_SESSION["user"]["account"], "id", 0, false);
    }
    return 0;
}
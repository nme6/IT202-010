<?php
function get_user_lastname() 
{
    if (is_logged_in()) { // Check for login first because "user" key may not exist
        return se($_SESSION["user"], "lastname", "", false);
    }
    return "";
}
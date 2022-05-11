<?php
function get_user_firstname() 
{
    if (is_logged_in()) { // Check for login first because "user" key may not exist
        return se($_SESSION["user"], "firstname", "", false);
    }
    return "";
}
<?php

session_start();
function login_checker()
{
    return isset($_SESSION['authenticated']);
}

?>
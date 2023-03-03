<?php
include '../model/users.php';

$users = new users;

$result = '';

if ($users->validate_user_data($_REQUEST) === true)
{
    $result = "auth";

    echo $result;
}

$users->logResult($_REQUEST, $result);
<?php
function connectToDB()
{
    include_once('password.php');
    if (mysqli_connect_errno()) {
        return NULL;
    }
    return $con;
}
?>
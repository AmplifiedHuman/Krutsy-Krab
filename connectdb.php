<?php
function connectToDB()
{
    if (mysqli_connect_errno()) {
        return NULL;
    }
    return $con;
}
?>
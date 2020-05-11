<?php
function connectToDB()
{
    ***REMOVED***
    if (mysqli_connect_errno()) {
        return NULL;
    }
    return $con;
}
?>
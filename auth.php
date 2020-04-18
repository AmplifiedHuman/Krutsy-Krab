<?php
session_start();
/**
 * ***REMOVED*** 
 */
// connect to DB function
include("connectDB.php");

function redirectToLoginPage($conn, $stmt) {
    if (isset($stmt)) {
        mysqli_stmt_free_result($stmt);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
    header('Location: login.php');
    exit;
}

$conn = connectToDB();
// set attempt variable
$_SESSION['attempt'] = TRUE;
// check if empty
if ($conn && !(isset($_POST['username']) && isset($_POST['password']))) {
    redirectToLoginPage($conn, NULL);
}
$username = $_POST['username'];
$password = $_POST['password'];
// use prepare to prevent SQLi
$stmt = mysqli_prepare($conn, 'SELECT password_hash FROM admin_accounts WHERE username=?');
// bind parameter, execute sql, save result
mysqli_stmt_bind_param($stmt, 's', $username);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
// check matches
if (mysqli_stmt_num_rows($stmt) > 0) {
    // bind and fetch
    mysqli_stmt_bind_result($stmt, $password_hash);
    mysqli_stmt_fetch($stmt);
    // verify pass
    if (password_verify($password, $password_hash)) {
        // create user session
        session_regenerate_id();
        $_SESSION["loggedIn"] = TRUE;
        $_SESSION["username"] = $username;
        // success redirect to admin page
        header('Location: admin.php');
    } else {
        redirectToLoginPage($conn, $stmt);
    }
} else {
    redirectToLoginPage($conn, $stmt);
}

// free result, close statement, close connection
mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);
mysqli_close($conn);

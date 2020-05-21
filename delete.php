<?php
session_start();
function redirectToAdminPage($conn, $stmt)
{
    if (isset($stmt)) {
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
    header('Location: admin.php');
    exit;
}

function checkAndResetAutoIncrement($conn) {
    $result = mysqli_query($conn, 'SELECT * FROM contact_responses');
    if (mysqli_num_rows($result) == 0) {
        mysqli_query($conn, 'ALTER TABLE contact_responses AUTO_INCREMENT = 1');
    }
}

// redirect if unauthorised or not logged in
if (!isset($_SESSION['loggedIn']) || empty($_SESSION['authorised'])) {
    header('Location: index.php');
    exit;
}

include('connectdb.php');
$conn=connectToDB();
if ($conn && !isset($_POST['id'])) {
    redirectToAdminPage($conn, NULL);
}
$id=$_POST['id'];
$stmt = mysqli_prepare($conn, 'DELETE FROM contact_responses WHERE id = ?');
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
checkAndResetAutoIncrement($conn);
redirectToAdminPage($conn, $stmt);
?>
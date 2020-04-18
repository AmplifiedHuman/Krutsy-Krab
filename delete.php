<?php
function redirectToAdminPage($conn, $stmt)
{
    if (isset($stmt)) {
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
    header('Location: admin.php');
    exit;
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// redirect if unauthorised
if (!isset($_SESSION['loggedIn'])) {
    header('Location: index.php');
    exit;
}

include('connectDB.php');
$conn=connectToDB();
if ($conn && !isset($_POST['id'])) {
    redirectToAdminPage($conn, NULL);
}
$id=$_POST['id'];
echo var_dump($_POST['id']);
$stmt = mysqli_prepare($conn, 'DELETE FROM contact_responses WHERE id = ?');
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
redirectToAdminPage($conn, $stmt);

?>
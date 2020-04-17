<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = 'Admin Page';
    include("meta.php");
    ?>
</head>

<body>
    <?php
    session_start();
    // redirect if unauthorised
    if (!isset($_SESSION['loggedIn'])) {
        header('Location: index.php');
        exit;
    }
    ?>

    
    <?php
    session_destroy();
    echo "<h1>Hey there admin!</h1>";
    // Redirect to the login page:
    header("refresh:5;url=index.php");
    ?>
</body>

</html>
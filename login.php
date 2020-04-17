<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = 'Contact Us';
    include("meta.php");
    ?>
</head>

<body class="lightpink">
    <?php include("header.html") ?>
    <div class="form-outer-container header-fix login-container">
        <h1 class="generic-title">Staff Login</h1>
        <form class="login-form darkgrey" action="auth.php" method="POST">
            <div class="field-container generic-flex-container">
                <label for="username" class="generic-caption">Username</label>
                <input type="text" id="username" autocomplete="off" name="username" required>
            </div>
            <div class="field-container generic-flex-container">
                <label for="password" class="generic-caption">Password</label>
                <input type="password" id="password" autocomplete="off" name="password" required>
            </div>
            <div class="field-container generic-flex-container">
                <button class="generic-button">Login</button>
            </div>
            <?php
                session_start();
                if (isset($_SESSION['attempt']) && $_SESSION['attempt']) {
                    if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn']) {
                        echo '<p class="login-error">Incorrect username or password.</p>';
                        $_SESSION['attempt'] = FALSE;
                        unset($_SESSION['attempt']);
                    } else if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
                        echo '<p class="login-success">You\'re already logged in.</p>';
                    }
                }
            ?>
        </form>
    </div>
    <?php include("footer.html") ?>
</body>

</html>
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
        <form class="login-form darkgrey" action="authenticate.php">
            <div class="field-container generic-flex-container">
                <label for="username" class="generic-caption">Username</label>
                <input type="text" id="username">
            </div>
            <div class="field-container generic-flex-container">
                <label for="password" class="generic-caption">Password</label>
                <input type="password" id="password">
            </div>
            <div class="field-container generic-flex-container">
                <button class="generic-button">Login</button>
            </div>
        </form>
    </div>
    <?php include("footer.html") ?>
</body>

</html>
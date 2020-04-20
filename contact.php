<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = 'Contact Us';
    include("meta.php");
    ?>
</head>

<body class="lightpink">
    <?php include("header.php") ?>
    <div class="header-fix">
        <div class="generic-cover-image contact-cover-image">
            <h1 class="generic-title">Contact Us</h1>
            <h2 class="generic-caption">We're here to help</h2>
        </div>
    </div>
    <div class="form-outer-container generic-flex-container">
        <?php
        function printErrorAndExit()
        {
            echo "<h2 class=\"generic-caption\">Sorry, an error occured.</h2>";
            print "</div>\n";
            include("footer.html");
            print "</body>\n\n";
            print "</html>";
            exit(-1);
        }

        function printSuccessAndExit()
        {
            echo "\t<div class=\"contact-success\">\n";
            echo "\t\t<h2 class=\"generic-caption\">Your response has been recorded.</h2>";
            echo "\t\t<h2 class=\"generic-caption\">We will be in touch in 1-3 business days.</h2>";
            echo "\t</div>";
            echo "</div>";
            include("footer.html");
            print "</body>\n\n";
            print "</html>";
            exit(0);
        }
        if (!isset($_SESSION['contacted'])) {
            $htmlForm = <<<HTML
        <form name="contact-form" class="form-container rounded normal-text" method="POST"
        onsubmit="return validateForm()" action="sendcontact.php">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" pattern="[A-Za-z]+" title="Letters" required>
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname"  id="lastname" pattern="[A-Za-z]+" title="Letters" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <label for="enquiry">Enquiry</label>
            <select id="enquiry" name="enquiry" required>
                <option value="">Choose Type</option>
                <option value="general">General</option>
                <option value="order">Order</option>
                <option value="complaint">Complaint</option>
                <option value="business">Business</option>
            </select>
            <label for="message">Message</label>
            <textarea class="text-area" maxlength="2000" name="message" placeholder="Enter your message here" id="message" required>
            </textarea>
            <button class="generic-button submit-button">Submit</button>
        </form>

HTML;
            echo $htmlForm;
        } else if ($_SESSION['contacted']) {
            $_SESSION['contacted'] = NULL;
            printSuccessAndExit();
        } else {
            $_SESSION['contacted'] = NULL;
            printErrorAndExit();
        }
        ?>
    </div>
    <?php include("footer.html") ?>
</body>

</html>
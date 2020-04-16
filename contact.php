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

        function printSuccessAndExit($name)
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

        function cleanseInput($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        function isValidName($name)
        {
            return $name !== "" && preg_match("/^[a-zA-Z ]*$/", $name);
        }

        function isValidEmail($email)
        {
            return $email !== "" && filter_var($email, FILTER_VALIDATE_EMAIL);
        }

        function isValidMessage($message)
        {
            return $message !== "";
        }

        function isValidEnquiry($enquiry)
        {
            return $enquiry !== "" && preg_match("/^(general|order|complaint|business)$/", $enquiry);
        }

        function sendMail($firstname, $lastname, $email, $enquiry, $message)
        {
            $myEmail = "chee.tee@ucdconnect.ie";
            $emailBody = "Feedback Received:\n";
            $emailBody .= "Name: $firstname $lastname\n";
            $emailBody .= "Email: $email\n";
            $emailBody .= "Enquiry: $enquiry\n";
            $emailBody .= "Message:\n\n $message";
            return mail($myEmail, $enquiry, $emailBody);
        }

        function connectToDB()
        {
            ***REMOVED***
            if (mysqli_connect_errno()) {
                return null;
            }
            return $con;
        }



        if (empty($_POST)) {
            $htmlForm = <<<HTML
        <form name="contact-form" class="form-container rounded normal-text" method="POST"
        onsubmit="return validateForm()" action="#">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" required>
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname"  id="lastname" required>
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
        } else {
            if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['enquiry']) && isset($_POST['message'])) {
                // trim, remove special characters and slashes
                $firstname = cleanseInput($_POST["firstname"]);
                $lastname = cleanseInput($_POST["lastname"]);
                $message = cleanseInput($_POST["message"]);
                $enquiry = $_POST["enquiry"];
                $email = cleanseInput($_POST["email"]);
                // check values
                if (!isValidName($firstname) || !isValidName($lastname) || !isValidEmail($email) || !isValidMessage($message) || !isValidEnquiry($enquiry)) {
                    printErrorAndExit();
                }
                // only works if mail service is set up on csserver
                if (!sendMail($firstname, $lastname, $email, $enquiry, $message)) {
                }
                // save to db
                $conn = connectToDB();
                if (!$conn) {
                    printErrorAndExit();
                }
                $firstname = mysqli_real_escape_string($conn, $firstname);
                $lastname = mysqli_real_escape_string($conn, $lastname);
                $message = mysqli_real_escape_string($conn, $message);
                $enquiry = mysqli_real_escape_string($conn, $enquiry);
                $email = mysqli_real_escape_string($conn, $email);
                $sql = "INSERT INTO contact_responses 
                        (firstname, lastname, email, enquiry, message) 
                        VALUES ('" . $firstname . "','" . $lastname . "', '" . $email . "', '" . $enquiry . "', '" . $message . "')
                        ";
                if (!mysqli_query($conn, $sql)) {
                    mysqli_close($conn);
                    echo mysqli_error($conn);
                    printErrorAndExit();
                }
                mysqli_close($conn);
                printSuccessAndExit($firstname);
            } else {
                printErrorAndExit();
            }
        }
        ?>
    </div>
    <?php include("footer.html") ?>
</body>

</html>
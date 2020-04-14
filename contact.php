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
    <div class="generic-cover-image contact-cover-image">
        <h1 class="generic-title">Contact Us</h1>
        <h2 class="generic-caption">We're here to help</h2>
    </div>
    <div class="form-outer-container generic-flex-container">
        <form name="contact-form" class="form-container rounded normal-text" method="POST"
            onsubmit="return validateForm()" action="#">
            <p>First Name</p>
            <input type=" text" name="firstname" required>
            <p>Last Name</p>
            <input type="text" name="lastname" required>
            <p>Email</p>
            <input type="email" name="email" required>
            <p>Enquiry</p>
            <select id="enquiry" name="enquiry" required>
                <option value="general">General</option>
                <option value="order">Order</option>
                <option value="complaint">Complaint</option>
                <option value="business">Business</option>
            </select>
            <p>Message</p>
            <textarea class="text-area" maxlength="2000" name="message" placeholder="Enter your message here" required>
            </textarea>
            <input type="submit" class="normal-text rounded submit">
        </form>
    </div>
<?php include("footer.html") ?>
</body>

</html>
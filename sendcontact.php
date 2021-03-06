<?php
session_start();
include('connectdb.php');

function cleanseInput($data)
{
    $data = trim($data);
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

function redirectToContact($conn)
{
    if (isset($conn)) {
        mysqli_close($conn);
    }
    header('Location: contact.php');
    exit;
}

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['enquiry']) && isset($_POST['message'])) {
    // trim, remove special characters and slashes
    $firstname = cleanseInput($_POST["firstname"]);
    $lastname = cleanseInput($_POST["lastname"]);
    $message = cleanseInput($_POST["message"]);
    $enquiry = $_POST["enquiry"];
    $email = cleanseInput($_POST["email"]);
    // check values
    if (!isValidName($firstname) || !isValidName($lastname) || !isValidEmail($email) || !isValidMessage($message) || !isValidEnquiry($enquiry)) {
        $_SESSION['contacted'] = FALSE;
        redirectToContact($conn);
    }
    // send mail to personal email
    sendMail($firstname, $lastname, $email, $enquiry, $message);
    // save to db
    $conn = connectToDB();
    if (!$conn) {
        $_SESSION['contacted'] = FALSE;
        redirectToContact($conn);
    }
    $stmt = mysqli_prepare($conn, "INSERT INTO contact_responses (firstname, lastname, email, enquiry, message) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'sssss', $firstname, $lastname, $email, $enquiry, $message);
    if (!mysqli_stmt_execute($stmt)) {
        $_SESSION['contacted'] = FALSE;
        redirectToContact($conn);
    }
    $_SESSION['contacted'] = TRUE;
    redirectToContact($conn);
} else {
    $_SESSION['contacted'] = FALSE;
    redirectToContact(NULL);
}

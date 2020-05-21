<?php session_start();
// redirect if unauthorised
if (!isset($_SESSION['loggedIn'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = 'Admin Page';
    include("meta.php");
    ?>
</head>

<body class="lightpink">
    <?php include("header.php") ?>
    <h1 class="generic-title header-fix">Admin Panel</h1>
    <?php
    include("connectdb.php");
    $conn = connectToDB();
    $result = mysqli_query($conn, 'SELECT * FROM contact_responses ORDER BY date DESC');
    if ($result) {
        if (mysqli_num_rows($result) <= 0) {
            echo '<h2 class="generic-caption">You have no messages</h2>';
        } else {
            echo '<h2 class="generic-caption">Your Messages</h2>';
            print "<table class=\"message-table\">\n";
            print "        <tr>\n";
            print "            <th scope=\"col\">First Name</th>\n";
            print "            <th scope=\"col\">Last Name</th>\n";
            print "            <th scope=\"col\">Email</th>\n";
            print "            <th scope=\"col\">Enquiry</th>\n";
            print "            <th scope=\"col\">Message</th>\n";
            print "            <th scope=\"col\">Date</th>\n";
            if (!empty($_SESSION['authorised'])) {
                print "            <th scope=\"col\">Delete</th>\n";
            }
            print "        </tr>";
            while ($row = mysqli_fetch_array($result)) {
                print("<tr class='normal-text'>\n");
                printf("<td>%s</td>\n", $row['firstname']);
                printf("<td>%s</td>\n", $row['lastname']);
                printf("<td><a href=\"mailto:%s\" class=\"email\">%s</a></td>\n", $row['email'], $row['email']);
                printf("<td>%s</td>\n", $row['enquiry']);
                printf("<td class=\"message\">%s</td>\n", $row['message']);
                printf("<td>%s</td>\n", $row['date']);
                if (!empty($_SESSION['authorised'])) {
                    echo '<td>';
                    echo '<form action="delete.php" method="POST">';
                    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                    echo '<button>Delete</button>';
                    echo '</form>';
                    echo '</td>';
                }
                print("</tr>\n");
            }
            print "    </table> ";
        }
    } else {
        echo "<p>Querry Error</p>";
    }
    mysqli_close($conn);
    ?>
    <?php include("footer.html") ?>
</body>

</html>
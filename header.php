 <?php session_start(); ?>
 <nav class="lightpink normal-transition">
     <div class="logo-container">
         <img src="img/nav/logo.png" alt="logo" class="generic-image">
     </div>
     <ul class="navigation-links">
         <li class="lightpink normal-transition"><a href="index.php">Home</a></li>
         <li class="lightpink normal-transition"><a href="menu.php">Menu</a></li>
         <li class="lightpink normal-transition"><a href="about.php">About Us</a></li>
         <li class="lightpink normal-transition"><a href="contact.php">Contact</a></li>
         <?php
            // change nav bar appearance if logged in
            if (isset($_SESSION['loggedIn'])) {
                echo '<li class="lightpink normal-transition"><a href="admin.php">Admin</a></li>';
                echo '<li class="lightpink normal-transition"><a href="logout.php">Logout</a></li>';
            } else {
                echo '<li class="lightpink normal-transition"><a href="login.php">Login</a></li>';
            }
            ?>
     </ul>
 </nav>
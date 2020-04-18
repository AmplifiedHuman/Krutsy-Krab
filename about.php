<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = 'About Us';
    include("meta.php");
    ?>
</head>

<body class="lightpink">
    <?php include("header.php") ?>
    <h1 class="generic-title team-title header-fix">Krusty Krab</h1>
    <div class="big-cake-container">
        <img src="img/team/big_cake.svg" alt="big-cake" class="generic-image">
    </div>
    <div class="about-content normal-text">
        Krusty Krab is a sweet local family owned bakery located in Bikini Bottom. We pride ourselves with
        delivering the best cakes and desserts to you!
        All of our cakes and treats are made fresh from scratch with every order. Nothing is ever frozen and we use all
        natural ingredients. Great care is taken with each and every order, and decorated to impress.
        We strive to set new trends and are constantly inspired by our customer's creativity! Combining our good ol'
        fashioned secret recipe with fresh ideas push us into creative unchartered cake decorating territory.
        We promise to leave you satisfied and full of happiness with every bite!
    </div>

    <section class="team-section">
        <h2 class="generic-title">Meet Our Team</h2>
        <div class="generic-flex-container team-container">
            <div class="team-entry">
                <div class="team-image-container">
                    <img src="img/team/person1.svg" class="generic-image" alt="Susan the baker">
                </div>
                <h2>Susan</h2>
                <p class="normal-text">Baker</p>
            </div>
            <div class="team-entry">
                <div class="team-image-container">
                    <img src="img/team/person2.svg" class="generic-image" alt="Michael the chef">
                </div>
                <h2>Michael</h2>
                <p class="normal-text">Chef</p>
            </div>
            <div class="team-entry">
                <div class="team-image-container">
                    <img src="img/team/person3.svg" class="generic-image" alt="Alex the waiter">
                </div>
                <h2>Alex</h2>
                <p class="normal-text">Waiter</p>
            </div>
        </div>
    </section>
    <?php include("footer.html") ?>
</body>

</html>
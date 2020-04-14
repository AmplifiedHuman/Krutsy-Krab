<!DOCTYPE html>
<html lang="en">

<head>
<?php 
    $pageTitle = 'About Us';
    include("meta.php");
?>
</head>

<body class="lightpink">
<?php include("header.html") ?>
    <h1 class="generic-title team-title header-fix">Krusty Krab</h1>
    <div class="big-cake-container">
        <img src="img/big_cake.svg" alt="big-cake" class="generic-image">
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
                    <img src="img/person1.svg" class="generic-image">
                </div>
                <h2>Susan</h2>
                <p>Baker</p>
            </div>
            <div class="team-entry">
                <div class="team-image-container">
                    <img src="img/person2.svg" class="generic-image">
                </div>
                <h2>Michael</h2>
                <p>Chef</p>
            </div>
            <div class="team-entry">
                <div class="team-image-container">
                    <img src="img/person3.svg" class="generic-image">
                </div>
                <h2>Alex</h2>
                <p>Waiter</p>
            </div>
        </div>
    </section>
<?php include("footer.html") ?>
</body>

</html>
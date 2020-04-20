<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = 'Krusty Krab';
    include("meta.php");
    ?>
</head>

<body class="lightpink">
    <?php include("header.php") ?>
    <div class="header-fix">
        <div class="cover parallax" id="hero-image">
            <h1 class="cover-text" id="covertitle">Krusty Krab</h1>
            <h2 class="cover-text">Taste of a lifetime.</h2>
            <form action="menu.php">
                <button class="generic-button browse-button lightgrey">Browse</button>
            </form>
        </div>
    </div>
    <div class="normal-text intro-text">
        Our story began in 1994. Upon finishing their culinary studies in Paris, Gastón Acurio and Astrid Gutsche
        founded their
        eponymous restaurant in a small house in the district of Miraflores. At first, the restaurant was quite French,
        as it
        was dictated by the global trend. Over time, it became decidedly Peruvian. We embraced our culture and flavors,
        experimenting with local ingredients and recipes with one goal in mind, to promote our cuisine around the world.
    </div>
    <div class="lightpink generic-flex-container intro-container">
        <div class="intro-entry rounded">
            <div class="intro-image-container rounded">
                <img src="img/index/intro-1.jpg" class="generic-image rounded" alt="cupcakes">
            </div>
        </div>
        <div class="intro-entry rounded">
            <div class="intro-image-container rounded">
                <img src="img/index/intro-2.jpg" class="generic-image rounded" alt="cupcakes with candles">
            </div>
        </div>
        <div class="intro-entry rounded">
            <div class="intro-image-container rounded">
                <img src="img/index/intro-3.jpg" id="intro-3" class="generic-image rounded" alt="bread on rack">
            </div>
        </div>
    </div>

    <div class="lightgrey product-container">
        <h1 class="generic-title">Our products</h1>
        <div class="generic-flex-container product-grid">
            <a href="menu.php#bread">
                <div class="product-entry darkpink rounded">
                    <div class="product-image-container">
                        <span>
                            <h2 class="generic-title">Fresh Bread</h2>
                        </span>
                        <img src="img/index/bread.jpg" alt="bread" class="generic-image rounded">
                    </div>
                    <h3 class="normal-text">Bread</h3>
                </div>
            </a>
            <a href="menu.php#cakes">
                <div class="product-entry darkpink rounded">
                    <div class="product-image-container">
                        <span>
                            <h2 class="generic-title">Handmade Cakes</h2>
                        </span>
                        <img src="img/index/cakes.jpg" alt="cakes" class="generic-image rounded">
                    </div>
                    <h3 class="normal-text">Cakes</h3>
                </div>
            </a>
            <a href="menu.php#coffee">
                <div class="product-entry darkpink rounded">
                    <div class="product-image-container">
                        <span>
                            <h2 class="generic-title">Hot Coffee</h2>
                        </span>
                        <img src="img/index/coffee.jpg" alt="coffee" class="generic-image rounded">
                    </div>
                    <h3 class="normal-text">Coffee</h3>
                </div>
            </a>
            <a href="menu.php#cupcakes">
                <div class="product-entry darkpink rounded">
                    <div class="product-image-container">
                        <span>
                            <h2 class="generic-title">Sweet Cupcakes</h2>
                        </span>
                        <img src="img/index/cupcakes.jpg" alt="cupcakes" class="generic-image rounded">
                    </div>
                    <h3 class="normal-text">Cupcakes</h3>
                </div>
            </a>
            <a href="menu.php#desserts">
                <div class="product-entry darkpink rounded">
                    <div class="product-image-container">
                        <span>
                            <h2 class="generic-title">Homemade Desserts</h2>
                        </span>
                        <img src="img/index/desserts.jpg" alt="desserts" class="generic-image rounded">
                    </div>
                    <h3 class="normal-text">Desserts</h3>
                </div>
            </a>
        </div>
    </div>

    <h3 class="normal-text location-text">You can find us at</h3>
    <div class="generic-flex-container location-container">
        <div class="location-details">
            <h2>Bikini Bottom</h2>
            <p>Phone: +314 159265358</p>
            <p>Working Hours: 8am - 4pm</p>
            <p>Email: <a href="mailto:example@example.com" class="email">example@example.com</a></p>
            <p>University College Dublin, Belfield, Dublin 4, Ireland</p>
        </div>
        <div class="map-container">
            <iframe src="https://maps.google.com/maps?q=Bermuda%20Triangle&t=&z=17&ie=UTF8&iwloc=&output=embed"></iframe>
        </div>
    </div>
    <?php include("footer.html") ?>
</body>

</html>
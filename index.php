<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = 'Krusty Krab';
    include("meta.php");
    ?>
</head>

<body class="lightpink">
    <?php include("header.html") ?>
    <div class="header-fix">
        <div class="cover parallax" id="hero-image">
            <h1 class="cover-text" id="covertitle">Krusty Krab</h1>
            <h1 class="cover-text">Taste of a lifetime.</h1>
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
                <img src="img/intro-1.jpg" class="generic-image rounded" alt="cupcakes">
            </div>
        </div>
        <div class="intro-entry rounded">
            <div class="intro-image-container rounded">
                <img src="img/intro-2.jpg" class="generic-image rounded" alt="cupcakes with candles">
            </div>
        </div>
        <div class="intro-entry rounded">
            <div class="intro-image-container rounded">
                <img src="img/intro-3.jpg" id="intro-3" class="generic-image rounded" alt="bread on rack">
            </div>
        </div>
    </div>

    <div class="lightgrey product-container">
        <h1 class="generic-title">Our products</h1>
        <div class="generic-flex-container product-grid">
            <div class="product-entry darkpink rounded">
                <div class="product-image-container">
                    <img src="img/bread.jpg" alt="bread" class="generic-image rounded">
                </div>
                <h2 class="normal-text">Bread</h2>
            </div>
            <div class="product-entry darkpink rounded">
                <div class="product-image-container">
                    <img src="img/cakes.jpg" alt="cakes" class="generic-image rounded">
                </div>
                <h2 class="normal-text">Cakes</h2>
            </div>
            <div class="product-entry darkpink rounded">
                <div class="product-image-container">
                    <img src="img/coffee.jpg" alt="coffee" class="generic-image rounded">
                </div>
                <h2 class="normal-text">Coffee</h2>
            </div>
            <div class="product-entry darkpink rounded">
                <div class="product-image-container">
                    <img src="img/cupcakes.jpg" alt="cupcakes" class="generic-image rounded">
                </div>
                <h2 class="normal-text">Cupcakes</h2>
            </div>
            <div class="product-entry darkpink rounded">
                <div class="product-image-container">
                    <img src="img/desserts.jpg" alt="desserts" class="generic-image rounded">
                </div>
                <h2 class="normal-text">Desserts</h2>
            </div>
            <div class="product-entry darkpink rounded">
                <div class="product-image-container">
                    <img src="img/pastries.jpg" alt="pastries" class="generic-image rounded">
                </div>
                <h2 class="normal-text">Pastries</h2>
            </div>
        </div>
    </div>

    <h1 class="normal-text location-text">You can find us at</h1>
    <div class="generic-flex-container location-container">
        <div class="location-details">
            <h1>Bikini Bottom</h1>
            <p>University College Dublin, Belfield, Dublin 4, Ireland</p>
        </div>
        <div class="map-container">
            <iframe src="https://maps.google.com/maps?q=Bermuda%20Triangle&t=&z=17&ie=UTF8&iwloc=&output=embed"></iframe>
        </div>
    </div>
    <?php include("footer.html") ?>
</body>

</html>
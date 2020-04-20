<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = 'Menu';
    include("meta.php");
    ?>
</head>

<body>
    <?php include("header.php") ?>
    <div class="header-fix">
        <div class="generic-cover-image menu-cover-image">
            <h1 class="generic-title">Menu</h1>
        </div>
    </div>
    <div class="menu-container">
        <section class="menu-section bread-section" id="bread">
            <h2 class="normal-text">Bread</h2>
            <div class="generic-grid-container menu-entry-container">
                <div class="menu-entry bread-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/bread/bagel.jpg" class="generic-image" alt="bagel">
                    </div>
                    <h3 class="normal-text">Bagel</h3>
                    <p class="normal-text price">€3</p>
                </div>
                <div class="menu-entry bread-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/bread/toast.jpg" class="generic-image" alt="toast">
                    </div>
                    <h3 class="normal-text">Toast</h3>
                    <p class="normal-text price">€2.80</p>
                </div>
                <div class="menu-entry bread-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/bread/banana-bread.jpg" class="generic-image" alt="Banana Bread">
                    </div>
                    <h3 class="normal-text">Banana Bread</h3>
                    <p class="normal-text price">€3.20</p>
                </div>
                <div class="menu-entry bread-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/bread/challah.jpg" class="generic-image" alt="challah">
                    </div>
                    <h3 class="normal-text">Challah</h3>
                    <p class="normal-text price">€3</p>
                </div>
                <div class="menu-entry bread-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/bread/bun.jpg" class="generic-image" alt="bun">
                    </div>
                    <h3 class="normal-text">Bun</h3>
                    <p class="normal-text price">€1.50</p>
                </div>
                <div class="menu-entry bread-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/bread/crossaint.jpg" class="generic-image" alt="crossaint">
                    </div>
                    <h3 class="normal-text">Crossaint</h3>
                    <p class="normal-text price">€1.25</p>
                </div>
            </div>
        </section>

        <section class="menu-section cakes-section darkgrey" id="cakes">
            <h2 class="normal-text">Cakes</h2>
            <div class="generic-grid-container menu-entry-container">
                <div class="menu-entry cake-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/cakes/strawberry.jpg" class="generic-image rounded" alt="strawberry cake">
                    </div>
                    <h3 class="normal-text">Strawberry Cake</h3>
                    <p class="normal-text price">€5.70</p>
                </div>
                <div class="menu-entry cake-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/cakes/cheese.jpg" class="generic-image rounded" alt="cheese cake">
                    </div>
                    <h3 class="normal-text">Cheese Cake</h3>
                    <p class="normal-text price">€5.50</p>
                </div>
                <div class="menu-entry cake-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/cakes/sponge.jpg" class="generic-image rounded" alt="sponge cake">
                    </div>
                    <h3 class="normal-text">Sponge Cake</h3>
                    <p class="normal-text price">€4.50</p>
                </div>
                <div class="menu-entry cake-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/cakes/carrot.jpg" class="generic-image rounded" alt="carrot cake">
                    </div>
                    <h3 class="normal-text">Carrot Cake</h3>
                    <p class="normal-text price">€5.50</p>
                </div>
                <div class="menu-entry cake-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/cakes/red-velvet.jpg" class="generic-image rounded" alt="red velvet cake">
                    </div>
                    <h3 class="normal-text">Red Velvet</h3>
                    <p class="normal-text price">€7</p>
                </div>
                <div class="menu-entry cake-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/cakes/blueberry.jpg" class="generic-image rounded" alt="blueberry cake">
                    </div>
                    <h3 class="normal-text">Blueberry Cake</h3>
                    <p class="normal-text price">€5.70</p>
                </div>
                <div class="menu-entry cake-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/cakes/chocolate.jpg" class="generic-image rounded" alt="chocolate cake">
                    </div>
                    <h3 class="normal-text">Chocolate Cake</h3>
                    <p class="normal-text price">€5.70</p>
                </div>
                <div class="menu-entry cake-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/cakes/tiramisu.jpg" class="generic-image rounded" alt="tiramisu cake">
                    </div>
                    <h3 class="normal-text">Tiramisu</h3>
                    <p class="normal-text price">€6</p>
                </div>
                <div class="menu-entry cake-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/cakes/lemon.jpg" class="generic-image rounded" alt="lemon cake">
                    </div>
                    <h3 class="normal-text">Lemon Cake</h3>
                    <p class="normal-text price">€5.50</p>
                </div>
            </div>
        </section>

        <section class="menu-section coffee-section" id="coffee">
            <h2 class="normal-text">Coffee</h2>
            <div class="generic-grid-container menu-entry-container">
                <div class="menu-entry coffee-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/coffee/americano.jpg" class="generic-image" alt="americano coffee">
                    </div>
                    <h3 class="normal-text">Americano</h3>
                    <p class="normal-text price">€2.90</p>
                </div>
                <div class="menu-entry coffee-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/coffee/cappuccino.jpg" class="generic-image" alt="cappuccino coffee">
                    </div>
                    <h3 class="normal-text">Cappuccino</h3>
                    <p class="normal-text price">€3.10</p>
                </div>
                <div class="menu-entry coffee-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/coffee/espresso.jpg" class="generic-image" alt="espresso coffee">
                    </div>
                    <h3 class="normal-text">Espresso</h3>
                    <p class="normal-text price">€1.50</p>
                </div>
                <div class="menu-entry coffee-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/coffee/latte.jpg" class="generic-image" alt="latte coffee">
                    </div>
                    <h3 class="normal-text">Latte</h3>
                    <p class="normal-text price">€2.90</p>
                </div>
                <div class="menu-entry coffee-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/coffee/matcha-latte.jpg" class="generic-image" alt="matcha latte coffee">
                    </div>
                    <h3 class="normal-text">Matcha Latte</h3>
                    <p class="normal-text price">€3.10</p>
                </div>
                <div class="menu-entry coffee-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/coffee/mocha.jpg" class="generic-image" alt="mocha coffee">
                    </div>
                    <h3 class="normal-text">Mocha</h3>
                    <p class="normal-text price">€3.10</p>
                </div>
            </div>
        </section>

        <section class="menu-section cupcakes-section darkgrey" id="cupcakes">
            <h2 class="normal-text">Cupcake</h2>
            <div class="generic-grid-container menu-entry-container">
                <div class="menu-entry cupcake-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/cupcakes/strawberry.jpg" class="generic-image rounded" alt="strawberry cupcake">
                    </div>
                    <h3 class="normal-text">Strawberry Cupcake</h3>
                    <p class="normal-text price">€1.50</p>
                </div>
                <div class="menu-entry cupcake-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/cupcakes/chocolate.jpg" class="generic-image rounded" alt="chocolate cupcake">
                    </div>
                    <h3 class="normal-text">Chocolate Cupcake</h3>
                    <p class="normal-text price">€1.50</p>
                </div>
                <div class="menu-entry cupcake-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/cupcakes/mint.jpg" class="generic-image rounded" alt="mint cupcake">
                    </div>
                    <h3 class="normal-text">Mint Cupcake</h3>
                    <p class="normal-text price">€1.30</p>
                </div>
                <div class="menu-entry cupcake-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/cupcakes/vanilla.jpg" class="generic-image rounded" alt="vanilla cupcake">
                    </div>
                    <h3 class="normal-text">Vanilla Cupcake</h3>
                    <p class="normal-text price">€1.30</p>
                </div>
            </div>
        </section>

        <section class="menu-section desserts-section" id="desserts">
            <h2 class="normal-text">Desserts</h2>
            <div class="generic-grid-container menu-entry-container">
                <div class="menu-entry dessert-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/desserts/brownies.jpg" class="generic-image" alt="brownies">
                    </div>
                    <h3 class="normal-text">Brownies</h3>
                    <p class="normal-text price">€1.30</p>
                </div>
                <div class="menu-entry dessert-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/desserts/cookies.jpg" class="generic-image" alt="cookies">
                    </div>
                    <h3 class="normal-text">Cookies</h3>
                    <p class="normal-text price">€0.70</p>
                </div>
                <div class="menu-entry dessert-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/desserts/crepe.jpg" class="generic-image" alt="crepe">
                    </div>
                    <h3 class="normal-text">Crepe</h3>
                    <p class="normal-text price">€5.20</p>
                </div>
                <div class="menu-entry dessert-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/desserts/doughnuts.jpg" class="generic-image" alt="doughnuts">
                    </div>
                    <h3 class="normal-text">Doughnuts</h3>
                    <p class="normal-text price">€1.30</p>
                </div>
                <div class="menu-entry dessert-entry">
                    <div class="menu-image-container">
                        <img src="img/menu/desserts/pancakes.jpg" class="generic-image" alt="pancakes">
                    </div>
                    <h3 class="normal-text">Pancakes</h3>
                    <p class="normal-text price">€2.30</p>
                </div>
            </div>
        </section>

    </div>

    <?php include("footer.html") ?>
</body>

</html>
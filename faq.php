<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = 'FAQ';
    include("meta.php");
    ?>
    <script src="js/expand.js"></script>
</head>

<body class="lightpink">
    <?php include("header.php"); ?>
    <div class="header-fix">
        <div class="generic-cover-image faq-cover-image">
            <h1 class="generic-title">FAQ</h1>
            <h2 class="generic-caption">Some questions that you might have</h2>
        </div>
    </div>

    <section class="faq-section">
        <div class="toggle">
            <h3 class="question">How do I place an order?</h3>
            <div class="answer">
                <p>
                    You can place an order by calling our contact number or by visiting our physical store located in Bikini Bottom.
                </p>
            </div>
        </div>
        <div class="toggle">
            <h3 class="question">Can I order online?</h3>
            <div class="answer">
                <p>
                    We do not finalize any orders through e-mail or any social networking sites. You may send photos/details
                    to us for pricing, but you must then call to finish the order.
                    All orders require a deposit to ensure your order is placed.
                </p>
            </div>
        </div>
        <div class="toggle">
            <h3 class="question">Refund/Exchange Policy</h3>
            <div class="answer">
                <p>
                    We take pride in our desserts and cakes. If you are unhappy with your order and/or purchase, immediately notify us (within 24 hours ) of your concern We retain the right to judge our product quality for ourselves & determine the amount that can be refunded.
                    All refunds will be provided as in-store credit.
                </p>
            </div>
        </div>

        <div class="toggle">
            <h3 class="question">How long did it take to create this site?</h3>
            <div class="answer">
                <p>
                    It took a week with tons of googling and experimenting with different stuff.
                </p>
            </div>
        </div>

        <div class="toggle">
            <h3 class="question">Who is the creator of this site?</h3>
            <div class="answer">
                <p>
                    You can find me on <a href="https://github.com/AmplifiedHuman" class="email">Github</a>.
                </p>
            </div>
        </div>

        <div class="toggle">
            <h3 class="question">Who lives in a pineapple under the sea?</h3>
            <div class="answer">
                <p>
                    Hint: He's yellow.
                </p>
            </div>
        </div>
    </section>

    <?php include("footer.html"); ?>
</body>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Us</title>
        <link rel="stylesheet" href="contactUs.css">
        <script src="https://kit.fontawesome.com/06c53317f1.js"></script>
    </head>
    <body>
        <!-- Navigation Bar Part -->
        <nav>
            <div class="nav__logo">
                <a href="../index.php"><img src="../assets/logo.png" alt="logo" /></a>
            </div>
            <ul class="nav__links">
                <li class="link"><a href="../index.php">Home</a></li>
                <li class="link"><a href="#">Program</a></li>
                <li class="link"><a href="../index.php#pricingid">Pricing</a></li>
                <li class="link"><a href="../index.php#reviews">Reviews</a></li>
            </ul>
            <button class="btn"><a href="reservation.php">Book A Class</a></button>
        </nav>

        <!-- Contact Us form -->
        <form class="contact" action="contact.php"  method="POST">      
            <input id="name" name="name" type="text" class="feedback-input" placeholder="Name" />   
            <input id="email" name="email" type="text" class="feedback-input" placeholder="Email" />
            <textarea id="message" name="message" class="feedback-input" placeholder="Message"></textarea>
            <input class="submit" type="submit" value="SUBMIT"/>
        </form>
    </body>
</html>
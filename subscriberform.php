<?php


if($_POST["message"]) {


mail("your@email.address", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


?>

<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <a href="index.html" class="brand-logo">jeneth diesta</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="jeneth.html">About Me</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>drop a note</h3>
            </div>
        </div>
        <div class="row">
            <div class=" col-md-12">
            <form method="post" action="subscriberform.php">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Enter name">

                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email Address</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="example@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="MessageArea">Message</label>
                        <textarea class="form-control" id="MessageArea" rows="6"></textarea>

                    </div>
                    <a href="mailto:diesta.jeneth@gmail.com">Send Email</button></a>


                </form>
            </div>
        </div>
    </main>





    <footer class="page-footer">
        <div class="pgfooter">
            © 2020 Copyright Jeneth Diesta
        </div>
        </div>
    </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>


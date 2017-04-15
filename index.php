
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Sticky Footer Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/main.css" rel="stylesheet">

    </head>
    <?php
    $page = filter_input(INPUT_GET, 'page');
    ?>
    <body>
        <!-- NavBar -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button style="margin-top: 30px" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php?page=home">
                        <span><img alt="Brand" src="img/logo.jpg" width="70px"></span>
                        HOMOPRUTI
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php echo ($page == "about" ? "class='active'" : ""); ?>><a href="about">O NÁS <span class="sr-only">(current)</span></a></li>
                        <li <?php echo ($page == "services" ? "class='active'" : ""); ?>><a href="services">SLUŽBY <span class="sr-only">(current)</span></a></li>
                        <li <?php echo ($page == "references" ? "class='active'" : ""); ?>><a href="references">REFERENCE <span class="sr-only">(current)</span></a></li>						
                        <li <?php echo ($page == "contact" ? "class='active'" : ""); ?>><a href="contact">KONTAKT <span class="sr-only">(current)</span></a></li>
                        <!--<li <?php echo ($page == "blog" ? "class='active'" : ""); ?>><a href="blog">BLOG <span class="sr-only">(current)</span></a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /NavBar -->

        <!-- Heading Strip -->
        <div id="headingStrip" >
            <div class="container fadeInEffect" style="display: none">
                <?php
                switch ($page) {									
                    case 'about':
                        echo "<h1>O nás</h1>";
                        break;
                    case 'services':
                        echo "<h1>Služby</h1>";
                        break;
                    case 'references':
                        echo "<h1>Reference</h1>";
                        break;
                    case 'contact':
                        echo "<h1>Kontakt</h1>";
                        break;
                }
                ?>

            </div>  
        </div>
        <!-- /Heading Strip -->

        <!-- Content -->
        <?php
		$page = (!empty($page) ? $page : "home");
        include "pages/$page.php";
        ?>

        <!-- /Content -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <p class="text-muted">Place sticky footer content here.</p>
            </div>
        </footer>
        <!-- /Footer -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/effects.js"></script>
    </body>
</html>

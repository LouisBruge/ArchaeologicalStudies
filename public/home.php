<!DOCTYPE html>
<html>
    <head>
        <title> INDEX </title>
        <meta charset="utf-8">

        <meta name=viewport" content="width=device-width, initial-scale=1">

        <!-- JQuery script -->
        <script src="../app/vendor/components/jquery/jquery.slim.js"></script>


        <!-- BootStraps files and CSS files -->
        <link rel="stylesheet" href="../app/vendor/twbs/bootstrap/dist/css/bootstrap.css" type="text/css" media="screen" />

        <!-- BootStraps Javascripts file -->
        <script src="../app/vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
        <!-- CSS files -->
        <link rel="stylesheet" href="css/index.css" type="text/css" media="screen" />
    </head>

    <body>
        <header>
            <h1 class="text-center" > 
                <a href="index.html" >Archaeological Studies</a> 
            </h1>
        </header>

        <!-- Navbar -->
        <nav  class="nav navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        Archaeological Studies
                    </a>
                </div>

                <!-- Slogan of the site -->
                <p class="navbar-text" id="slogan"> Since 2018, swim among french archaeology </p>

                <!-- Main menu -->
                <ul class="nav navbar nav-justified">
                    <li role="presentation"> 
                        <a href="" >Archaeological site</a>
                    </li>
                    <li role="presentation">
                        <a href="">Professionnel of Archaeology</a>
                    </li>
                    <li role="presentation">
                      <a href="">Library</a>
                  </li>
                </ul>
            </div>
        </nav>
        <main>

            <!-- Gallery for the disclaimer -->
            <div class="container-fluid" id="disclaimer-img">
                <img src="assets/salle_etude.jpg" alt="salle of study" class="img-responsive"> 
                <figcaption>
                    <cite class="text-right">
                        Salle of archaeological studies of the SRA Nord 
                    </cite>
                    (
		            <span class="glyphicon glyphicon-copyright-mark"> </span> 
                    L. Bruge)
                </figcaption>
            </div>

            <!-- Disclaimer -->
            <div id="disclaimer" class="container text-justify">
                    <p class="text-capitalize">
                        Welcome to the <em> Historical Studies </em>! <br />
                    </p>
            </div>

            <div id="contenu" class="container-fluid">

                    <div class="col-sx-12 col-sm-4 center-block">
                         <h2> Archaeological sites </h2>
                         <p>
                            Here, you will find the list of french archaeological professionnals, with the main prehistorical site, among the thousand and thousand sites in France! <br />
                         </p>
                         <button type="button" class="btn btn-primary"> Acces Here!</button>
                    </div>

                    <div class="col-sx-12 col-sm-4 center-block">
                        <h2> Professionnels of Archaeology </h2>
                        <p>You will find also the list of the professionnels of the archaeology. <br /> </p>
                         <button type="button" class="btn btn-primary"> Acces Here!</button>
                    </div>

                    <div class="col-sx-12 col-sm-4 center-block">
                        <h2> Bibliography </h2>
                        <p> We provide you also, a short and not comprehensive bibliography of the main prehistorical search. The books are written on english and french. <br />
                        </p>
                         <button type="button" class="btn btn-primary"> Acces Here!</button>
                    </div>
            </div>
        </main>

        <!-- Footer with the copyright, contact and about sections -->
        <footer>
	    <div class="container text-center">
            <div class="col-xs-12 col-sm-4">
                <p>
		    <span class="glyphicon glyphicon-copyright-mark"> </span>
                    2018 wild Code School 
                </p>
            </div>
            <div>
            <div class="col-xs-12 col-sm-4">
                <p>
		    <span class="glyphicon glyphicon-envelope"></span>
                    <a href="" > Contact's form</a>
                </p>
            </div>
            <div class="col-xs-12 col-sm-4">
                <p>
		    <span class="glyphicon glyphicon-user"></span>
                    <a href="aboutUs.html" > About US </a>
                </p>
            </div>
	    </div>
        </footer>
    </body>

</html>

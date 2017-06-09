<?php ?>
<!DOCTYPE html>
<!--
Projet: MINISITE
JUIN 2017
HILLEWAERT Daniel
-->

<html>
    <head>
        <title>MINISITE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/general_suite_suite.css" type="text/css" rel="stylesheet">
        <link href="css/page_1.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <main>
            <nav>
		<div><a href="http://www.isl.be/"><img src="img/facebook.png" alt="facebook" /></a></div>
                <div><a href="http://www.isl.be/"><img src="img/twitter.png" alt="twitter" /></a></div>
                <div><a href="http://www.isl.be/"><img src="img/linkedin.png" alt="linkedin" /></a></div>
                <div><a href="http://www.isl.be/"><img src="img/google.png" alt="google" /></a></div>
            </nav>

            <header>
		<div class="logo">
		    <div class="logo_img"><img src="img/logoA.png" alt="logo" /></div>
		    <div class="logo_txt">
			<div class="txt_nom">John Doe</div>
			<span class="txt_fonction">Architecte-Urbaniste</span>
		    </div>
		</div>

		<div class="lien-1">
		    <!--<a href="page_acc.php">-->
			<div class="titre_lien">A PROPOS</div>
			<div class="lien_img_1">
			    <img src="img/about.png" alt="A propos" />
			</div>
			<div class="lien_footer_1">De moi</div>
		    <!--</a>-->
		</div>

		<div class="lien-2">
		    <!--<a href="pg_portfolio.php">-->
			<div class="titre_lien">PORTFOLIO</div>
			<div class="lien_img_2">
			    <img src="img/portfolio.png" alt="Portfolio" />
			</div>
			<div class="lien_footer_2">Mes Travaux</div>
		    <!--</a>-->
		</div>
		
		<div class="lien-3">
		    <!--<a href="pg_cv.php">-->
			<div class="titre_lien">CV</div>
			<div class="lien_img_3">
			    <img src="img/resume.png" alt="CV" />
			</div>
			<div class="lien_footer_3">Mon profil</div>
		    <!--</a>-->
		</div>

		<div class="lien-4">
		    <!--<a href="pg_contacts.php">-->
			<div class="titre_lien">CONTACTS</div>
			<div class="lien_img_4">
			    <img src="img/contacts.png" alt="Contacts" />
			</div>
			<div class="lien_footer_4">Contactez-moi</div>
		    <!--</a>-->
		</div>
		
            </header>
            <section>
		<?php
		include("pageg_1.php");
		?>
            </section>
        </main>
    </body>
</html>

<?php
include("pg_haut.php");
?>
<div class="bloc_pg_4_A">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10120.576311176088!2d5.5603796!3d50.6430153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa33e2d934b144ff1!2sInstitut+Saint-Laurent+de+Promotion+Sociale!5e0!3m2!1sfr!2sbe!4v1497512155711" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="bloc_pg_4_B">
    <div class="titre_bloc_pg_4_B">Contact Infos</div>

    <div class="nom_champ_bloc_pg_4">
	Adresse
    </div>
    <div class="champ_bloc_pg_4_B">
	33, rue Saint-Laurent 4000 Liège
    </div>

    <div class="nom_champ_bloc_pg_4">
	Email
    </div>
    <div class="champ_bloc_pg_4_B">
	email@gmail.com
    </div>

    <div class="nom_champ_bloc_pg_4">
	Tel
    </div>
    <div class="champ_bloc_pg_4_B">
	+123 456 789 111
    </div>

    <div class="nom_champ_bloc_pg_4">
	Site
    </div>
    <div class="champ_bloc_pg_4_B">
	www.le_site.be
    </div>


</div>
<div class="bloc_pg_4_C">
    <div class="titre_bloc_pg_4_C">Contactez - moi !</div>

    <form name="me_contacter" action="page_1.php" method="POST">
	<div class="nom_champ_bloc_pg_4">
	    <label for="nom">Votre Non:</label>
	</div>
	<div class="champ_bloc_pg_4">
	    <input type="text" name="nom" id="nom"/>
	</div>

	<div class="nom_champ_bloc_pg_4">
	    <label for="email">Votre Email:</label>
	</div>
	<div class="champ_bloc_pg_4">
	    <input type="text" name="email" id="email"/>
	</div>

	<div class="nom_champ_bloc_pg_4">
	    <label for="message">Votre Message:</label>
	</div>
	<div class="champ_bloc_pg_4">
	    <textarea type="text" name="message" id="message" rows="5" cols="30"></textarea>
	</div>
	<span class="bouton_bloc_pg_4">
	    <input type="submit" name="submit" />
	</span>

    </form>

</div>
<?php
include("pg_bas.php");
?>
<?php
	get_header();
?>
	<h1 class="hidden">Mon portfolio</h1>
	<header>
		<ul id="nav">
			<li><a href="./index.php">Accueil</a></li>
			<li><a href="page_web.php">Web</a></li>
			<li><a href="page_2d.php">2D</a></li>
			<li><a href="blog.php">Blog</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
		<a href="index.php" id="logo"><img src="./img/logo_moi.png" alt="Retour à la page d'accueil" width="240" height="55"></a>
		<p class="bleu">Je peux vous aider à réaliser vos envies.<br />En tant que <span>Web Developper</span>, je vous ferai un site fonctionnel, accessible et agréable.</p>
	</header>
	<section id="bandeau">
		<h1 class="hidden">bandeau</h1>
		<div class="slider">
			<h2>Refonte de site</h2>
			<p>Votre site a besoin d'un coup de jeune, il ne vous correspond tout simplement plus&nbsp;?</p>
			<p>Contactez-moi, nous en discuterons ensemble.</p>
			<img src="./img/logo_sebio_penche.png" alt="Logo d'un site pour lequel j'ai fait une refonte" width="420" height="230">
		</div>
		<!--<div class="slider">
			<h2>Création de site</h2>
			<p>Envie de communiquer avec le monde&nbsp;?</p>
			<p>Je peux vous aider.</p>
			<img src="../img/logo_sebio_penche.png" alt="Logo d'un site pour lequel j'ai fait une refonte" width="420" height="230">
		</div>-->
	</section>
	<section class="moi">
		<h1 class="bleu">&Agrave; propos de moi</h1>
		<img src="./img/moi.png" alt="C'est moi" width="400" height="230"> 
		<p>Jeune maman dynamique, je me tiens à mes engagements et aime arriver à mes fins.</p> 
		<p>Durant notre collaboration, vous aurez l’occasion d’en juger.</p>
	</section>
	<section class="realisations">
		<h1 class="bleu">Dernières réalisations</h1>
		<div>
			<img src="./img/sebio_small.png" alt="Refonte du site SeBIO" width="200" height="250">
			<img src="./img/appliseries.png" alt="" width="200" height="250">
			<img src="./img/logo_sebio.png" alt="Création de logo" width="200" height="250">
		</div>
		<p><a href="./page_web.php">Découvrez en d'autres</a></p>
	</section>
	<section class="references">
		<h1 class="bleu">Quelques références</h1>
		<p>Je posterai ici des liens de sites ou d'articles intéressants à consulter</p>
	</section>
<?php
	get_footer();
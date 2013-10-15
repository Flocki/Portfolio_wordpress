<?php
	get_header();
?>
	<h1 class="hidden">Mon portfolio</h1>
	<header>
		<ul id="nav">
			<li><a href="./index.php">Accueil</a></li>
			<li><a href="./page_web.php">Web</a></li>
			<li><a href="./page_2d.php">2D</a></li>
			<li><a href="./blog.php">Blog</a></li>
			<li><a href="./contact.php">Contact</a></li>
		</ul>
		<a href="index.php" id="logo"><img src="./img/logo_moi.png" alt="Retour à la page d'accueil" width="240" height="55"></a>
	</header>
		<form action="" method="post">
			<label for="nom">Votre nom&nbsp:</label>
			<input type="text" id="nom" title="Entrez votre nom" /><br />
			<label for="prenom">Votre prénom&nbsp;:</label>
			<input type="text" id="prenom" title="Entrez votre prénom" /><br />
			<label for="email">Votre email&nbsp:</label>
			<input type="text" id="email" title="Entrez votre prénom" /><br />
			<label for="message">Votre message&nbsp;:</label>
			<textarea name="Entrez votre message" id="message" cols="30" rows="10"></textarea><br />
			<input type="submit" id="envoi" title="Envoyez moi votre message">
		</form>
<?php
	get_footer();
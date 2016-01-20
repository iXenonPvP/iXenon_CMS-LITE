<?php 
	
   	$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', 'timifloro');
   	$nom_serveur = "RedPvP";
	$ip_serveur = "play.redpvp.fr";
	$version_serveur = "1.7/1.8";
	$connexion = "1"; //0 = Connexion au site désactiver, 1 = connexion au site activer
	

	//Ne rien toucher sauf si connaiseur !
 ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $nom_serveur; ?> - Version Lite</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="style.css" media="screen">	
</head>

<body>
	<div id="title">RedPvP CMS - Lite Version</div>
	<div id="wrapper">
		<div id="header" class="gradient">
		<a href="index.php">Accueil</a>
		<a href="">Rejoindre</a>
		<a href="">Connexion</a>
		<a href="">Support</a>
		<a href="">Règlement</a>
		<a href="">Contact</a>
		</div>
		
		<div id="contenu">
		<?php 

   			$req_selectNews = $bdd->query('SELECT * FROM news');
   			while($selectNews = $req_selectNews->fetch()) {
   			echo '<div class="news_content">';
   			echo $selectNews['content'].'<br />';
   			echo '<right><bold> Ecrit par '.$selectNews['pseudo'].'<br /></bold></right>';
   			echo '<right><bold> Le '.$selectNews['date'].' a '.$selectNews['heure'].'</bold></right>';
   			echo '</div>';
   			}
 		?>
			<div id="sidebar">
				<div class="widget">
					<h3 class="gradient">Informations du serveur</h3>
					<div class="widget-text">Helloo it's me</div>
				</div>
				<?php if($connexion == "1") { ?>
				<div class="widget">
					<h3 class="gradient">Connexion au site</h3>
					<div class="widget-text connexion">
						<form method="post">
							Identifiant:<br>
							<input type="text2"><br>
							Mot de passe:<br>
							<input type="password">
							
							<span style="float: left; margin-top: 2px;"><input type="checkbox">Rester connecté</span>
							<span style="float: right;"><input type="submit" class="gradient" value="Se connecter"></span>
							<p style="clear: both;"></p>
					</div>
				</div>
				<?php } else { } ?>

				<div class="widget">
					<h3 class="gradient">IP du serveur</h3>
					<div class="widget-test"><?php echo $ip_serveur; ?></div>
					<div class="widget-test">Version : <?php echo $version_serveur; ?></div>
				</div>
			</div>
			<p style="clear: both;"></p>
		</div>
	
	
	
		<div id="footer" class="gradient">
			Site proposé par <a href="" target="_blank">iXenon CMS</a> version Lite
		</div>
	
	</div>
	

</body>
</html>

<!DOCTYPE html>
	<html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>salut</title>
			<link href="<?php echo base_url().'assets/css/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css">
			<link href="<?php echo base_url().'assets/css/bootstrap/css/bootstrap-theme.min.css' ?>" rel="stylesheet" type="text/css">
	</head>
	<body>
		
<header>
 	
		<nav class="navbar navbar-inverse navbar-fixed-top">
	  		<div id="btHOF" class="navbar-header">
	    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-navbar">
	      			<span class="sr-only">Navigation</span>
	      		<span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <span><a class="navbar-brand"id="option" href="./Accueil.php"><img src="../../css/image/HallOfFame.png" alt="HallOfFame" /></a></span>
	  </div>
	
	  <!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse" id="navbar-navbar">
	 
	    <ul class="nav navbar-nav">
	      <li><a class="option" href ="./Accueil.php">Accueil</a></li>
	      <li><a class="option" href="./Profil.php">Profil</a></li>

	      <li><a id="upload" class="option" href="#myModal" data-toggle="modal">Charger article</a></li>
	    </ul>
	    <form id="search_form" class="navbar-form navbar-left" role="form" action="../verifications/verif_search.inc.php" method="post">
	      <div class="form-group">
	        <input type="text" id="search" name="searched" class="form-control" placeholder="Trouvez des personnes ...">
	      </div>
	      <button type="submit" name="seek" id="button_search" class="btn btn-default">Rechercher&nbsp;<span class="glyphicon glyphicon-search"></span></button>
	    </form>
	    <ul class="nav navbar-nav navbar-right">
	      <li class="dropdown">
	        <a href="#" name='buttonOption' id="option" class="dropdown-toggle" data-toggle="dropdown" ><img src="../../css/image/cogs.gif" alt="Options" /><b class="caret"></b></a>
	        <ul id="deroulant"class="dropdown-menu">
	          <li id="textf"><a id="textOption" href="../navigation/compte.php" >Compte</a></li>
	          <li id = "divider"class="divider"></li>
	          <li id="textf"><a id="textDeconnect" href="../navigation/logout.php" >Déconnexion</a></li>
	        </ul>
	      </li>
	    </ul>
	  </div>
	</nav>
	</header>	
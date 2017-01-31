<?php include("header.php"); ?>

<!--img class="responsive-img" src="./../img/HomePage_vigne.jpg"-->

<body id="HomePageImage">

	<div id="HomePageBox">

		<div id="HomePageForm" >
			<h5>Bienvenu sur VeilleRSS !</h5>
			<form method="post" action="./../Controller/ControllerConnexion.php">
			  <div class="form-group">
			    <label id="HomePageText" >Identifiant</label>
			    <input type="text" class="form-control" name="loginHome" id="HomePageText">
			  </div>
			  <div class="form-group">
			    <label id="HomePageText">Mot de Passe</label>
			    <input type="password" class="form-control" name="passwordHome" id="HomePageText">
			  </div>
			  <button type="submit" class="btn btn-default" id="ButtonModification">Se connecter</button>



				<div class="fixed-action-btn toolbar">
			    <a class="btn-floating btn-large grey darken-1">
			      <i class="large material-icons">message</i>
			    </a>
			    <ul>
			      	<li class="waves-effect waves-light">Cette app vous permet de suivre les flux RSS de vos sites préférés !</li>
					</ul>
			  </div>


			</form>

		</div>

	</div>

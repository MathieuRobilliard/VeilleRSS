<?php include("header.php"); ?>

<!--img class="responsive-img" src="./../img/HomePage_vigne.jpg"-->

<body id="HomePageImage">

	<div id="HomePageBox">

		<div id="HomePageForm" >
				<h5>Welcome to VeilleRSS !</h5>

				<!-- This code is the form
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
				-->

				<!-- This code is without identification -->
					<br>
					<a href="./../View/ViewCategories.php" class="btn btn-default" id="ButtonModification">Log in</a>

			</form>

		</div>

	</div>


	<div class="fixed-action-btn">
		<a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
		<ul>
      <li><a class="btn-floating red"><i class="material-icons" id="tooltipped_infosSite">format_quote</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons" id="tooltipped_infosDetails">comment</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons" id="tooltipped_author">perm_contact_calendar</i></a></li>
			<li><a class="btn-floating blue"><i class="material-icons" id="tooltipped_contacts">email</i></a></li>
    </ul>
  </div>



	<!-- JS Scripts -->
	<script type="text/javascript" src="./../js/TooltipsManagement.js"></script>

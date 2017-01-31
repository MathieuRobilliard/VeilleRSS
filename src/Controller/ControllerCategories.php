
<?php include("./../Model/ModelCategories.php"); ?>


<?php

//Check if a new Site has been added in the form in the modal
//of ControllerSites.php.
if (isset($_POST['nameCategory'])) {

  $nameCategory = $_POST['nameCategory'];

  createCategory($nameCategory);
  header('Location: ./../View/ViewCategories.php');
}



		$tab_categories = selectAllCategories();	//Contain all categories of the bd

?> 	<div class="row">
				<br>
<?php print_categories($tab_categories); ?>
				<div class="col s12 m6 l4">
					<div class="card blue-grey darken-1">
						<div class="card-action">
							<a href="#modalNewCategory" id="ButtonNew">Ajouter une catégorie</a>
						</div>
					</div>
				</div>

				<div id="modalNewCategory" class="modal">
						<form method="post" action="./../View/ViewCategories.php">
							<div class="modal-content">
								<h4>Ajouter un Catégorie</h4>
											<div class="form-group">
												 <label id="HomePageText" >Nom de votre catégorie</label>
												 <input type="text" class="form-control" name="nameCategory" id="HomePageText">
											</div>
							</div>
							<div class="modal-footer">
											<input type="submit" value="Envoyer" class=" modal-action modal-close waves-effect waves-green btn-flat"/>
							</div>
						</form>
				</div>


		</div>

<?php

/* Functions */
function print_categories($tab) {

    foreach ($tab as $j) {
        $nameCategory = $j->nameCategories;
				$idCategory = $j->idCategories;
        ?>
		  <div class="col s12 m6 l4">
				<div class="card blue-grey darken-1">
					<div class="card-content white-text">
						<span class="card-title"><?php echo $nameCategory; ?> </span>
					</div>
					<div class="card-action">
						<a href="./../View/ViewSites.php?id=<?php echo $idCategory ?>">Voir les sites de la catégorie</a>
					</div>
				</div>
			</div>

		<?php
    }
}
?>


<!-- JS Scripts -->
<script type="text/javascript" src="./../js/ModalManagement.js"></script>

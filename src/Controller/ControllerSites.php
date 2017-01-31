<!--
This file manage the view of all sites linked with the category.
The category is given by ControllerCategories by it id.
-->

<?php include("./../Model/ModelSites.php"); ?>

<?php


//Check if a new Site has been added in the form in the modal
//of ControllerSites.php.
if ( isset($_POST['nameRSSFeed']) && isset($_POST['newRSS']) ) {

  $newSiteName = $_POST['nameRSSFeed'];
  $newRSS = $_POST['newRSS'];
  $idCategory = $_GET['id'];

  createRSSFeed($newSiteName,$newRSS,$idCategory);
  header('Location: ./../View/ViewSites.php?id='.$idCategory);
}


//Check if an id was put in the URL
if (isset($_GET['id'])) {
  $idCategory = $_GET['id'];

  //Select all sites from the category
  $tab_sites = selectSites($idCategory);

  ?>
    <div class="collection" id="tabOfSites">
    <?php
  				print_Sites($tab_sites);
    ?>
          <!-- Modal Trigger -->
          <a class="waves-effect waves-light btn modal-trigger" href="#modalNewRSS" id="ButtonNew">Ajouter un flux</a>
          <!-- Modal Structure -->
          <div id="modalNewRSS" class="modal">
              <form method="post" action="./../View/ViewSites.php?id=<?php echo $idCategory ?>">
                <div class="modal-content">
                  <h4>Ajouter un flux RSS</h4>
                        <div class="form-group">
                           <label id="HomePageText" >Nom du flux</label>
                           <input type="text" class="form-control" name="nameRSSFeed" id="HomePageText">
                        </div>
                        <div class="form-group">
                           <label id="HomePageText">URL du flux</label>
                           <input type="text" class="form-control" name="newRSS" id="HomePageText">
                        </div>
                </div>
                <div class="modal-footer">
                        <input type="submit" value="Envoyer" class=" modal-action modal-close waves-effect waves-green btn-flat"/>
                </div>
              </form>
          </div>


    </div><!--END Collection-->

<?php
}
else {
  header('Location: ./../View/HomePage.php');
}


/* Functions */
function print_Sites($tab) {

    foreach ($tab as $j) {
        $nameSite = $j->nameSites;
				$idSite = $j->idSites;
        ?>
          <a href="./../View/ViewFeed.php?id=<?php echo $idSite ?>" class="collection-item" id="listOfSites"><?php echo $nameSite; ?></a>
		    <?php
    }
}//END print_Sites
?>

<!-- JS Scripts -->
<script type="text/javascript" src="./../js/ModalManagement.js"></script>

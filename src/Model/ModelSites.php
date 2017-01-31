

<?php

function selectSites($idCategory) {
			try
			{
				include("model.php");
				$sql = "SELECT idSites, nameSites FROM Sites WHERE idCategory = '$idCategory'";
				$req = $pdo->prepare($sql);
				$req->execute();
				return $req->fetchAll(PDO::FETCH_OBJ);

			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
				die("<br /> Erreur dans la BDD ");
			}
		}


function selectFeed($idSite) {
			try
			{
						include("model.php");
						$sql = "SELECT rssFeedLink, nameSites FROM Sites WHERE idSites = '$idSite'";
						$req = $pdo->prepare($sql);
						$req->execute();
						return $req->fetchAll(PDO::FETCH_OBJ);
			}
			catch (PDOException $e)
			{
						echo $e->getMessage();
						die("<br /> Erreur dans la BDD ");
			}
}

function createRSSFeed($newSiteName,$newRSS,$idCategory) {
			try
			{
				include("model.php");
				$sql = "INSERT INTO sites (nameSites, rssFeedLink, idCategory) VALUES(?, ?, ?)";
				$req = $pdo->prepare($sql);
				$req->execute(array($newSiteName, $newRSS, $idCategory));
			}
			catch (PDOException $e) {
				echo $e->getMessage();
				die("<br /> Erreur dans la BDD ");
			}
}



?>

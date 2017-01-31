

<?php

/*
* Select all categories in the BD
* @return A PDO object with all the categories
*/
function selectAllCategories()
		{
			try
			{
				include("model.php");
				$sql = "SELECT * FROM Categories";
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


function createCategory($nameCategory) {
			try
			{
						include("model.php");
						$sql = "INSERT INTO categories (nameCategories) VALUES(?)";
						$req = $pdo->prepare($sql);
						$req->execute(array($nameCategory));
			}
			catch (PDOException $e) {
						echo $e->getMessage();
						die("<br /> Erreur dans la BDD ");
			}
}

?>

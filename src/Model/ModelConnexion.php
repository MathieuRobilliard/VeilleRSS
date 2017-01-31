
<?php


/**
* This function seek in the BD if a name exist.
* @param $nameUser The pseudo of the user we want to know if he is in the BD
* @return $id[0] is equal with $nomJoueur or it is empty
*/
function get_not_userName($nameUser)
{
	try
		{
			include("model.php");
				$sql = "SELECT pseudoUsers FROM Users WHERE pseudoUsers = '$nameUser'";
				$req = $pdo->prepare($sql);
				$req->execute();
				$id = $req->fetch();
				return $id[0];	// If only one data is return
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			die("<br /> Erreur dans la BDD ");
		}
}

/**
* This function seek in the BD if a password exist for a user name.
*/
function get_not_userPassWord($nameUser, $password)
{
	try
		{
			include("model.php");
				$sql = "SELECT passwordUsers FROM Users WHERE pseudoUsers = '$nameUser' AND passwordUsers = '$password'";
				$req = $pdo->prepare($sql);
				$req->execute();
				$id = $req->fetch();
				return $id[0];	// If only one data to return
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			die("<br /> Erreur dans la BDD ");
		}
}

?>

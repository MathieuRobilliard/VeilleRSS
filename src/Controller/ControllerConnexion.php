<?php

include("./../Model/ModelConnexion.php");
/*$reponse = get_All_Users();*/

$pseudo = $_POST['loginHome'];
$passwordHome = $_POST['passwordHome'];
//$motDePasseHash = md5($motDePasse);		// Hash with md5 algorithm
$validPseudo = false;
$validPassword = false;

//echo $pseudo." ".$passwordHome." ";

// Compare the pseudo of the form with all nomJoueur in the BD
$isUser = get_not_userName($pseudo);
//echo $isUser;

if (!$isUser)	// The pseudo give by the user is not in the BD
{
  	$validPseudo = $isUser;
  	$validPassword = false;
            header('Location: ./../View/HomePage.php');
}
elseif($isUser == $pseudo)
{
  	$passWordIsGood = get_not_userPassWord($pseudo,$passwordHome);

  	if($passWordIsGood == "")	// The pseudo is good but the password is not
  	{
    		$validPseudo = $isUser;
    		$validPassword = false;
        header('Location: ./../View/HomePage.php');
  	}
  	elseif($passWordIsGood == $passwordHome)	// Pseudo and password are good
  	{
    		$validPseudo = $isUser;
    		$validPassword = true;
        header('Location: ./../View/ViewCategories.php');
  	}
}

echo "--> ".$validPseudo." : ".$validPassword;


?>

<!--

-->

<?php include("./../Model/ModelSites.php"); ?>

<?php

//Check if an id was put in the URL
if (isset($_GET['id'])) {
  $idSite = $_GET['id'];

  //Select the feed of the web site
  $tab_feeds = selectFeed($idSite);
  print_Feeds($tab_feeds);
}
else {
  header('Location: ./../View/HomePage.php');
}


/* Functions */

function print_Feeds($tab) {

    foreach ($tab as $j) {
        $nameSite = $j->nameSites;
				$rss = $j->rssFeedLink;


        $url = $rss;
        $rss = simplexml_load_file($url);
        echo '<ul>';
        foreach ($rss->channel->item as $item) {
             $datetime = date_create($item->pubDate);
             $date = date_format($datetime, 'd M Y, H\hi');

             $link = $item->link;
             $title = $item->title;
             $text = $item->description;

             echo '<div id="BoxForRSSNews" class="z-depth-5">';
                 echo '<li><a href="'.$link.'" id="ParametersForTitles">'.$title.'</a></li>';
                 echo '<li>'.$text.'</li>';
                 echo '<li id="ParametersForDates">'.$date.'</li>';
            echo '</div>';
        }
        echo '</ul>';
        ?>


        <script type="text/javascript">
            /*
            var rss = '<?php echo $rss; ?>';
            var member=""; //optionnel si vous etes inscrit sur la plateforme actifpub  le parametrage se fait dans votre espace membre
            var fichier= rss;
            var limite="1";  //  sujets compris entre 1
            var limite1="10";   //  et plus
            var aspect="1";  //  0 ou 1 (1 permet d'afficher lien + description, 0 que les liens)
            var minute="1";  //  0 ou 1 (1 permet d'afficher date et heure, 0 pas de date et heure)
            var sujet="1"; //  0 ou 1 (1 permet d'afficher le titre des sujets traités, 0 pas de titre )
            var te="Geneva, Arial, sans-serif";  // Police de caractères (Verdana, arial etc...)
            var fil_textsize="13"; // taille des liens et description
            var title_textcolor="1F70B4"; // couleur des liens (000000 donne noir)
            var tlien="none"; // style du lien none ou underline
            var text_textcolor="000000";  // couleur description (000000 donne noir)
            var frame_color="FFFFFF"; // couleur arrière plan (FFFFFF donne blanc)
            var content="0"; // 0 ou 1 comme paramètre optionnel, 1  format html,  0  format texte
            var extract="";  // laisser vide ou indiquez le nombre de caractères que vous souhaitez garder dans le corps du flux
            var cache="15"; // gestion du cache exprimée en minutes - en fonction de la fréquence de mise à jour

            document.write('<s'+'cript language="JavaScript" type="text/javascript" SRC="http://www.actifpub.com/rss.php?fichier_AP_='+fichier+'&limite_AP_='+limite+'&limite1_AP_='+limite1+'&aspect_AP_='+aspect+'&minute_AP_='+minute+'&sujet_AP_='+sujet+'&te_AP_='+te+'&fil_textsize_AP_='+fil_textsize+'&title_textcolor_AP_='+title_textcolor+'&text_textcolor_AP_='+text_textcolor+'&frame_color_AP_='+frame_color+'&content_AP_='+content+'&cache_AP_='+cache+'&extract_AP_='+extract+'&tlien_AP_='+tlien+'&java=1&member_AP_='+member+'"></sc'+'ript>');
            */
        </script>

        <?php
    }
}//END print_Feeds
?>

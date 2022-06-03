<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, 
sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br></p>

<p>Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).<br></p>

<?php
$nomsInput = array("Nom","Prénom","Adresse mail", "Ville", "Sexe");
$elements = array("Développeur Logiciel","Designer web","Intégrateur","Chef de projet");

afficherInput($nomsInput);
alimenterListeDeroulante($elements);

function afficherInput($array){
    echo '<form>';
        for ($i=0; $i < count($array); $i++){
            echo $array[$i].'<br><input style=margin-bottom:25 type="texte" label="'.$array[$i].'"/><br>'; 
            //count = compte tous les éléments d'un tableau
        }
    echo '</form>';
}


function alimenterListeDeroulante($elements){
    echo "<select style=margin-bottom:50>";
    foreach ($elements as $k){
        echo "<option>".$k."</option>";   
    }
    echo "</select>";
}

echo '<br><input type="submit" value="Envoyer">';
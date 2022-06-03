<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.<br></p>

<p>Exemple:<br>
$nomsInput = array("Nom","Prénom","Ville");<br>
afficherInput($nomsInput);</p>

<?php
$nomsInput = array("Nom","Prénom","Ville");

afficherInput($nomsInput);

function afficherInput($array){
    foreach($array as $k){
        echo "<h2 style=margin-bottom:0 font-size:20;>".$k."</h2> <input type=text SIZE=15 MAXLENGTH=25>";
    }
}

/*Deuxième méthode

echo "hello world";

$nomsinput = array ("nom,"prénom", "ville");

afficherInput($nomsinput);

function afficherInput($tableau){
    echo '<form>';
        foreach($tableau as $element){
            echo $element.'<br><input type="texte" label="'.$elements.'"/><br>';
        }
    echo '</form>';
}*/

afficherInput2($nomsInput);

function afficherInput2($array){
    echo '<form>';
        for ($i=0; $i < count($array); $i++){
            echo $array[$i].'<br><input type="texte" label="'.$array[$i].'"/><br>'; //count = compte tous les éléments d'un tableau
        }
}
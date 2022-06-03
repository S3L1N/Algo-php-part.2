<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br></p>

<p>Exemple:<br>
afficherRadio($nomsRadio);</p>

<?php

$nomsRadio = array ("Monsieur","Madame","Mademoiselle");

afficherRadio($nomsRadio);

function afficherRadio($nomsRadio){
    echo '<form>';
    foreach($nomsRadio as $k){
        echo '<br><input type="radio" value="'.$k.'"/>'.$k.'<br>';
    }
    echo '</form>';
}
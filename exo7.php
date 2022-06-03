<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher.
    On pourra préciser dans le tableau associatif si la case est cochée ou non.<br></p>

<p>Exemple:<br>
genererCheckbox($elements);<br>
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>

<?php
$elements = array ('Choix 1' => "", 'Choix 2' => "checked", 'Choix 3' => "");

genererCheckbox($elements);

function genererCheckbox($elements){
    echo'<form>';
        foreach($elements as $k=>$v){
            echo '<input type = "checkbox" '.$v.'>'.$k.'</input><br>';
        }
    echo '</form>';
}
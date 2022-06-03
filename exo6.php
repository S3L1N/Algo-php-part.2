<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de
    remplir une liste déroulante à partir d'un tableau de valeurs.<br></p>

<p>Exemple:<br>
$elements = array("Monsieur","Madame","Mademoiselle");<br>
alimenterListeDeroulante($elements);</p>

<?php
$elements = array("Monsieur","Madame","Mademoiselle");

alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements){
    echo "<select>";
    foreach ($elements as $k){
        echo "<option>".$k."</option>";   
    }
    echo "</select>";
}

alimenterListeDeroulante2($elements);

function alimenterListeDeroulante2($array){
    echo '<select>';
        for ($i=0; $i < count($array); $i++){
            echo '<option>'.$array[$i].'</option>';
        }
    echo '</select>';
}
<h1>Exercice 2</h1>
<p>Soit le tableau suivant :<br>
$capitales = array<br> 
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br></p>

<p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.<br>
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<?php
$capitales = array("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome");
$villes = "Paris";

ksort($capitales);
afficherTableHTML($capitales);

function afficherTableHTML($array){
    echo "<table border=1><th>Pays</th><th>Capitales</th>";

        foreach ($array as $k => $v) {
            echo "<tr><td>".strtoupper($k)."</td><td>".ucfirst($v)."</td></tr>";
        }
    echo "</table>";
}

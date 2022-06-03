<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>
https://fr.wikipedia.org/wiki/<br></p>

<p>Le tableau passé en argument sera le suivant :<br>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin", "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>

<?php
$capitales = array("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome");
//Définir tableau assiociatif : type de données associant à un ensemble de clefs, un ensemble correspondant de valeurs.

ksort($capitales);
// Définir ksort : tri le tableau array suivant les clés, en maintenant la correspondance enter les clés et les valeurs. Fonction pratique pour les tableaux associatifs..

afficherTableHTML($capitales2);

function afficherTableHTML($array){
    echo "<table border = 1> <th>Pays</th> <th>Capitales</th> <th>Liens</th>";
        foreach($array as $k => $v){
            echo "<tr><td>".$k ."</td><td>".$v ."</td><td><a href = 'https://fr.wikipedia.org/wiki/".$v ."'>Lien</a></td></tr>";
        }
    echo "</table>";
}
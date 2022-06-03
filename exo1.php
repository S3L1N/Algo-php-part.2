<h1>Exercice 1</h1>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.<br>
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;.</p>

<h2>Résultat</h2>

<?php
$texte="Ceci est mon texte.";

function convertirMajRouge($texte){
    echo "<p style='color:red'>".mb_strtoupper($texte)."</p>";
}
convertirMajRouge($texte);
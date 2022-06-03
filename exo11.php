<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.<br></p>

<p>Exemple:<br>
formaterDateFr("2018-02-23");</p>

<?php
$date = "2018-02-23";

formaterDateFr($date);

function formaterDateFr($date){
    setlocale(LC_TIME, "fr_FR"); // setlocale — Modifie les informations de localisation
    echo strftime("%A %d %B %G", strtotime($date));
    //  %A donne le jour en lettres    %d donne le jour en chiffres   %B donne le mois en lettres  %G donne l'année
}
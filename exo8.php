<h1>Exercice 8</h1>

<p>Soit l’URL suivante: http://my.mobirise.com/data/userpic/764.jpg <br>
    Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br></p>

<p>Exemple:<br>
repeterImage($url,4);</p>

<?php
$url = '<img src="http://my.mobirise.com/data/userpic/764.jpg">';
$url2 =  '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk2ZoeOAPfQE-BoFixWCpuGurx2ccKKDLk5m0CzxMhszEpV8qrgEwIdk9ULQ8J0y96iqc&usqp=CAU">';

repeterImage($url, 4);
repeterImage($url2, 8);

function repeterImage($url, $nombre){
    for ($i = 1; $i <= $nombre; $i++){ //Pour i allant de 1. // L'instruction $i++ est équivalente à $i = $i + 1
        echo $url;
    }
}
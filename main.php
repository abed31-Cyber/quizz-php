
<?php

echo "Entrée un mot:";
$mot =trim(fgets(STDIN));

$lines = file("line.txt");

foreach($lines as $line) {
if ($line == $mot) {
echo "$line";



// fonction strpos = rechercher un texte spéifique dans une texte


// exercice n°6: 
// Rechercher un mot dans un fichier

//     Demandez à l'utilisateur de saisir un mot, puis affichez toutes les lignes du fichier qui contiennent ce mot.





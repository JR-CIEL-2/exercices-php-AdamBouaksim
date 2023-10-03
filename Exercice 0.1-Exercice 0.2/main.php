<?php

include("statistique.php");
$Notes = array(15, 12, 9);

$salaire_impair = array(1500,4500,2200,1500,3300,1800,1700,2000,4000);
$salaire_pair = array(1500,1500,1700,1800,2000,2200,3300,4500);
sort($salaire_pair);
sort($salaire_impair);

#EIFSUQHDFKVJS


echo "La moyenne des notes est de " . moyenne($Notes) . " / 20. \n";

echo "salaires impaire : " .moyenne($salaire_impair). ". \n";
echo "salaires paire : " .moyenne($salaire_pair). ". \n";
echo "mediane impaire : " .mediane($salaire_impair). ".\n";
echo "mediane paire : " .mediane($salaire_pair). ".\n";



















































/*
$tab = array(12,14,10);
echo moyenne($tab);

$salaires_impair = array(1500,4500,2200,1500,3300,1800,1700,2000,4000);
$salaires_pair = array(1500,1500,1700,1800,2000,2200,3300,4500);

sort($salaires_impair);
sort($salaires_pair);

print_r($salaires_impair);
print_r($salaires_pair);

echo mediane($salaires_impair),"\n";
echo mediane($salaires_pair);*/


?>

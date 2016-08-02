<?php
// Creation du tableau $mois
$mois = array('Janvier' ,'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
// Boucle pour afficher les elements du tableau
for ($numero = 0; $numero < 12; $numero++){
// affichera $mois[0], $mois[1] etc.
    echo $mois[$numero] . '<br />';
}
?>

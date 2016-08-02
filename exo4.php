<?php
// Création du tableau $mois
$mois = array('Janvier' ,'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
// on remplace 'Aout' par 'Août'
$mois[7] = 'Août';
// On affiche l'index 7 donc 'Août'
echo $mois[7];
 ?>

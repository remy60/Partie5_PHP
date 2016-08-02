<?php
// On crée notre array $hautDeFrance
$hautDeFrance = array (
    60 => 'Oise',
    80 => 'Somme',
    02 => 'Aisne',
    62 => 'Pas-de-Calais',
    59 => 'Nord');
    // On affiche tout les elements du tableau et on concat le tout !
    foreach($hautDeFrance as $cle => $element)
{
    echo 'Le departement'.' ' .$element .' '.'a le numéro'.' '.$cle .' '. '<br />';
}
?>

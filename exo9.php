<?php
// On crée notre array $hautDeFrance
$hautDeFrance = array (
    60 => 'Oise',
    80 => 'Somme',
    02 => 'Aisne',
    62 => 'Pas-de-Calais',
    59 => 'Nord');
    // On parcourt le tableau avec la boucle Foreach
    // as == en tant que
    foreach($hautDeFrance as $element)
{
    echo $element . '<br />';
}
?>

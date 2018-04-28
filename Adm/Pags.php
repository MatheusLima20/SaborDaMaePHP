

<?php

$pag = filter_input(INPUT_GET, 'pag', FILTER_SANITIZE_STRING);


switch ($pag) {

    case "home": include_once 'Home.php';        
        break;
        
    case "cardapio": include_once 'Cardapio.php';
        break;
        
    case "contato": include_once 'Contato.php';
        break;
        
    case "sobre": include_once 'Sobre.php';
        break;
        
    default: require_once 'Home.php';
        
}
?>

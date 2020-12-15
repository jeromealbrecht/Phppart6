<?php

// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent
// et les afficher : index.php?language=PHP&server=LAMP

if (isset($_GET['language']) && isset($_GET['server'])){

    echo $_GET['language'] . $_GET['server'];

} else {
    echo 'il manque des paramètres d\'url';
}

?>
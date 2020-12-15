<?php

// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?building=12&room=101

if (isset($_GET['building']) && isset($_GET['room'])){

    echo $_GET['building'] . $_GET['room'];

} else {
    echo 'il manque des paramètres d\'url';
}

?>
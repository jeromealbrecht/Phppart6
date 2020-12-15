<?php

// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?week=12

if (isset($_GET['week'])){

    echo $_GET['week'];

} else {
    echo 'il manque des paramètres d\'url';
}

?>
<?php
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  
// et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016

if (isset($_GET['startDate']) && isset($_GET['endDate'])){

    echo $_GET['startDate'] . $_GET['endDate'];

} else {
    echo 'il manque des paramètres d\'url';
}

?>
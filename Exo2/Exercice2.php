<?php


// Faire une page index.php. Tester sur cette page que le paramètre age existe 
// et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean


if (isset($_GET['firstname']) && isset($_GET['lastname'])){

    echo $_GET['firstname'] . $_GET['lastname'];

} else {
    echo 'il manque des paramètres d\'url';
}

?>
<?php

if (isset($_GET['firstname']) && isset($_GET['lastname'])){

    echo $_GET['firstname'] . $_GET['lastname'];

} else {
    echo 'il manque des paramètres d\'url';
}

?>
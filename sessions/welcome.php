<?php

require 'nickname.php';

if(isset($_SESSION["pseudo"]) && !empty($_SESSION["pseudo"]))
{
    $pseudo = $_SESSION['pseudo'];
    echo "Bienvenue " . $pseudo;
} else {
    echo "Bienvenue invité";
}

?>
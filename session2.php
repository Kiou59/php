<?php

session_start();

if(isset($_SESSION['foo'])){
    echo($_SESSION['foo']);
} else{
    echo("Vous devez d'abbord exécuter le script session1.php");
}


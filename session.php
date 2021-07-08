<?php

session_start();

if (isset($_GET["name"])){
    $_SESSION['user'] = $_GET["name"];
    echo 'Hello '. htmlspecialchars($_GET["name"]);
}
else {
    if (isset($_SESSION['user'])){
        echo 'Hello '. htmlspecialchars($_SESSION['user']);
    }

    else {
        echo "Hello platypus";
    }
}

 ?>

<?php
    session_start();

    $_SESSION['palabra'] = $_POST['palabra'];


    

    header("Location: logicGame.php");
?>
<?php
    session_start();

    $palabra = $_SESSION['palabra'];




    
    echo "<h1>El arca de Noé entran muchas cosas. ¿Qué cosas entran?</h1>";
    echo ": " . $palabra;
?>
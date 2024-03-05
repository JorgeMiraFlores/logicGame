<?php
    session_start();

    $palabra = $_SESSION['palabra'];




    
    echo "<h1>El arca de Noé entran muchas cosas. ¿Qué cosas entran?</h1>";
    if(contains($palabra, "e")){
        echo "La palabra: " . $palabra . " no entra en el arca de Noé";
    }else{
        echo "La palabra: " . $palabra . " entra en el arca de Noé";
    }

?>
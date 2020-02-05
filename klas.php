<?php   
    echo("Wie zit er in de klas").PHP_EOL;
    $invoer = explode(" ",readline(""));
    echo("De studenten in de klas zijn").PHP_EOL;
    foreach($invoer as $invoer1){
        echo($invoer1).PHP_EOL;
    }

?>
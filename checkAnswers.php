<?php

    $classGreen = "";


    if (!empty($_POST['answer'])){
        echo "Deine Antowrt ist:<br/>";
        echo "<b>" . $_POST['answer'] . "</b>";
        $classGreen = "greenCorrect";
        $classRed ="redFalse";
    }
?>
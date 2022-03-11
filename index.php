<?php

    //Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP


    $faqs = [
        "questionOne" => [
            [
                'answer' => 'bla bla' 
            ]
        ],

        "questionTwo" => [
            [
                'answer' => 'yo yo' 
            ]
        ],

        "questionThree" => [
            [
                'answer' => 'bom bom' 
            ]
        ],

        "questionFour" => [
            [
                'answer' => 'clap clap' 
            ]
        ],
    ];
 

    foreach ($faqs as $qustion => $answers) {

        echo "<h1> $qustion </h1>";  

        foreach ($answers as $content ) {

            echo "<ul>";

            foreach ($content as $key => $contenuto) {
                
                echo "<li>$contenuto</li>";
            }

            echo "</ul>";
            
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
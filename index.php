<?php

    global $classGreen;
    global $classRed;

    use Model\DataHandler;

    require_once './Model/DataHandler.php'
?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

<?php

    $dataHandler = new DataHandler();

    $questionsAnswers = array();

    $dataHandler->fileToArray($questionsAnswers);


    include 'checkAnswers.php';

    $answersRndArry = array('<p><?= $questionsAnswers[$questionNumber][0] ?></p>');

    // QuestionsNr. ist eine Rnd es sollen 5 zahlen für 5 Fragen gewählt werden
    $questionNumber = 0;
    echo count($questionsAnswers);





?>






<form action="index.php" method="post">
    <?php $questionNumber = rand(0,count($questionsAnswers)) ?>
    <p><?= $questionsAnswers[$questionNumber][0] ?></p>

    <div class="<?=$classGreen?>">
        <label>
            <input type="radio" name="answer" value="Korrekt"   >
        </label>
        <?= $questionsAnswers[$questionNumber][1] ?>
    </div>
    <div class="<?=$classRed?>">
        <label>
            <input type="radio" name="answer" value="Falsch"    >
        </label>
        <?= $questionsAnswers[$questionNumber][2] ?> <br>
        <label>
            <input type="radio" name="answer" value="Falsch"     >
        </label>
        <?= $questionsAnswers[$questionNumber][3] ?> <br>
    </div>
    <br>
    <?php $questionNumber = rand(0,count($questionsAnswers)) ?>
    <p><?= $questionsAnswers[$questionNumber][0] ?></p>

    <div class="<?=$classGreen?>">
        <label>
            <input type="radio" name="answer" value="Korrekt"   >
        </label>
        <?= $questionsAnswers[$questionNumber][1] ?>
    </div>
    <div class="<?=$classRed?>">
        <label>
            <input type="radio" name="answer" value="Falsch"    >
        </label>
        <?= $questionsAnswers[$questionNumber][2] ?> <br>
        <label>
            <input type="radio" name="answer" value="Falsch"     >
        </label>
        <?= $questionsAnswers[$questionNumber][3] ?> <br>
    </div>
    <br>
    <?php $questionNumber = rand(0,count($questionsAnswers)) ?>
    <p><?= $questionsAnswers[$questionNumber][0] ?></p>

    <div class="<?=$classGreen?>">
        <label>
            <input type="radio" name="answer" value="Korrekt"   >
        </label>
        <?= $questionsAnswers[$questionNumber][1] ?>
    </div>
    <div class="<?=$classRed?>">
        <label>
            <input type="radio" name="answer" value="Falsch"    >
        </label>
        <?= $questionsAnswers[$questionNumber][2] ?> <br>
        <label>
            <input type="radio" name="answer" value="Falsch"     >
        </label>
        <?= $questionsAnswers[$questionNumber][3] ?> <br>
    </div>
    <br>




    <input type="submit" value="senden"/>
    <input type="reset" value="löschen"/>
    <br>

</form>



</body>
</html>
<?php

?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

    $filename = "./Data/questions.txt";
    $handle = fopen($filename, "r");
    $i = 0;
    $arr = "";
    $my = array();
    while (!feof($handle))
    {
        $arr = (explode("|", fgets($handle)));
        $my[$i] = $arr;
        $i++;
    }
    fclose($handle);

//    foreach ($my as $item) {
//        echo print_r($item) ."<br>";
//    }

    echo print_r($my[0]) . "<br>";

    echo print_r($my[1]). "<br>";
    echo print_r($my[53]). "<br>";




    $text = $my[1];
    var_dump($text);
    echo "$text[0]" . "<br>";
    $questionNumber = 0;
?>



<form action="index.php" method="post">
    <p><?php
            echo $my[$questionNumber][0]
        ?></p>

    <input type="radio" name="answer" value="Korrekt" /><?php echo $my[$questionNumber][1] ?><br/>
    <input type="radio" name="answer" value="Falsch"/><?php echo $my[$questionNumber][2] ?><br/>
    <input type="radio" name="answer" value="Falsch"/><?php echo $my[$questionNumber][3] ?><br/>
    <br>
    <input type="submit" value="senden"/>
    <input type="reset" value="löschen"/>
    <br>

</form>

<?php
    include 'checkAnswers.php'
?>

</body>
</html>
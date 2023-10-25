<?php

    $questionNumber = rand(0, count($questionsAnswers)) ?>
<p><?= $questionsAnswers[$questionNumber][0] ?></p>

<div class="<?= $classGreen ?>">
    <label>
        <input type="radio" name="answer" value="Korrekt">
    </label>
    <?= $questionsAnswers[$questionNumber][1] ?>
</div>
<div class="<?= $classRed ?>">
    <label>
        <input type="radio" name="answer" value="Falsch">
    </label>
    <?= $questionsAnswers[$questionNumber][2] ?> <br>
    <label>
        <input type="radio" name="answer" value="Falsch">
    </label>
    <?= $questionsAnswers[$questionNumber][3] ?> <br>
</div>
<br>


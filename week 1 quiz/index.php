<?php


$vragen = [
    ["vraag" => "Wat is de hoofdstad van Frankrijk?", "antwoord" => "Parijs", "punten" => 3],
    ["vraag" => "Hoeveel planeten zijn er in ons zonnestelsel?", "antwoord" => "8", "punten" => 5],
    ["vraag" => "Wat is de wortel van 144?", "antwoord" => "12", "punten" => 7],
    ["vraag" => "In welk jaar begon de Tweede Wereldoorlog?", "antwoord" => "1939", "punten" => 6],
    ["vraag" => "Wat is de chemische formule van water?", "antwoord" => "H2O", "punten" => 9],
];

function moeilijkheid($punten)
{
    if ($punten < 5) {
        return "Makkelijk";
    } elseif ($punten <= 8) {
        return "Gemiddeld";
    } else {
        return "Moeilijk";
    }
}


$totaalPunten = 0;
foreach ($vragen as $vraag) {
    $totaalPunten += $vraag["punten"];
}

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
</head>

<body>

    <h1>Quiz</h1>

    <?php

    $nummer = 1;

    foreach ($vragen as $vraag) {
        $niveau = moeilijkheid($vraag["punten"]);

        echo "<p>";
        echo "<strong>Vraag " . $nummer . ":</strong> " . $vraag["vraag"] . "<br>";
        echo "Antwoord: " . $vraag["antwoord"] . "<br>";
        echo "Punten: " . $vraag["punten"] . "<br>";
        echo "Moeilijkheid: " . $niveau;
        echo "</p>";
        echo "<hr>";

        $nummer++;
    }
    ?>

    <p><strong>Totaal aantal punten: <?php echo $totaalPunten; ?></strong></p>

</body>

</html>
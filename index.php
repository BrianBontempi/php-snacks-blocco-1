<?php
$matches = [
    [
        "home_team" => "Olimpia Milano", 
        "away_team" => "Cantù", 
        "score_home_team" => 55, 
        "score_away_team" => 60
    ],
    [
        "home_team" => "Virtus Bologna", 
        "away_team" => "Dinamo Sassari", 
        "score_home_team" => 72, 
        "score_away_team" => 68
    ],
    [
        "home_team" => "EA7 Emporio Armani Milano",
        "away_team" => "Fortitudo Bologna", 
        "score_home_team" => 80, 
        "score_away_team" => 75
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($matches as $match => $value) : ?>
            <li><?= $value["home_team"] ?> - <?= $value["away_team"] ?> | <?= $value["score_home_team"] ?>-<?= $value["score_away_team"] ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
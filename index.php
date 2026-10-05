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

// Snack 2
$name = $_GET['name'] ?? null;
$mail = $_GET['mail'] ?? null;
$age = $_GET['age'] ?? null;

$access_message = null;
if ($name !== null || $mail !== null || $age !== null) {
    $name_ok = strlen(trim((string) $name)) > 3;
    $mail_ok = str_contains((string) $mail, '.') && str_contains((string) $mail, '@');
    $age_ok = is_numeric($age);

    $access_message = ($name_ok && $mail_ok && $age_ok) ? 'Accesso riuscito' : 'Accesso negato';
}

// Bonus
$paragraph = "PHP è un linguaggio di scripting lato server. Viene usato soprattutto per creare pagine web dinamiche. Il codice viene eseguito sul server e al browser arriva solo l'HTML risultante. Con PHP possiamo leggere i dati inviati da un form. Possiamo anche collegarci a un database e mostrare i risultati in pagina. Oggi lo abbiamo usato per i primi snack.";

$sentences = explode('.', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks</title>
</head>

<body>
    <h2>Snack 1</h2>
    <ul>
        <?php foreach ($matches as $match => $value) : ?>
            <li><?= $value["home_team"] ?> - <?= $value["away_team"] ?> | <?= $value["score_home_team"] ?>-<?= $value["score_away_team"] ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Snack 2</h2>
    <form action="" method="GET">
        <input type="text" name="name" placeholder="Nome" value="<?= htmlspecialchars($name ?? '') ?>">
        <input type="text" name="mail" placeholder="Mail" value="<?= htmlspecialchars($mail ?? '') ?>">
        <input type="text" name="age" placeholder="Età" value="<?= htmlspecialchars($age ?? '') ?>">
        <button type="submit">Invia</button>
    </form>
    <?php if ($access_message !== null) : ?>
        <p><strong><?= $access_message ?></strong></p>
    <?php endif; ?>

    <h2>Bonus</h2>
    <?php foreach ($sentences as $sentence) : ?>
        <?php if (trim($sentence) !== '') : ?>
            <p><?= trim($sentence) ?>.</p>
        <?php endif; ?>
    <?php endforeach; ?>
</body>

</html>
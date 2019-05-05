<?php
$title = 'PHP';
$heading = 'Урок 2 задание 5';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
    <h1>
        <?= $heading ?>
    </h1>
    <div class="footer">
        <p> <?= date('Y') ?> год</p>
    </div>
</body>
</html>
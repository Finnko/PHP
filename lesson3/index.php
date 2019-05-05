<?php
$title = 'PHP урок 3';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<div class="task1">
    <?php
    $i = 0;

    while ($i < 100) {
        if ($i % 3 == 0) {
            echo $i . ' ';
        }
        $i++;
    }
    ?>
</div>
<br>
<hr>
<div class="task2">
    <?php
    $i = 0;

    do {
        if ($i == 0) {
            echo $i . ' - это ноль' . '<br>';
        } elseif ($i % 2 == 0) {
            echo $i . ' - это четное число' . '<br>';
        } else {
            echo $i . ' - это нечетное число' . '<br>';
        }
        $i++;

    } while ($i <= 10);

    ?>
</div>
<br>
<hr>
<div class="task3">

</div>
</body>
</html>
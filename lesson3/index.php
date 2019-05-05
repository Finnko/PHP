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
    echo 'Задание 1' . '</br>';

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
    echo 'Задание 2' . '</br>';

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
    <?php
    echo 'Задание 3' . '</br>';

    $districts = [
        'Московская область:' => [
                'Москва', 'Зеленоград', 'Клин'
        ],
        'Ленинградская область:' => [
                'Санкт-Петербург', 'Всеволжск', 'Павловск', 'Кронштадт'
        ],
        'Рязанская область:' => [
                'Рязань', 'Касимов', 'Лесной'
        ]
    ];

    foreach ($districts as $district => $towns) {
        echo '<br>' . $district . '<br>';

        foreach ($towns as $town) {
            echo $town . ' ';
        }
    };
    ?>

</div>
</body>
</html>
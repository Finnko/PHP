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
<br>
<hr>
<div class="task4,9">
    <?php
    echo 'Задание 4 + 9' . '</br>';

    function translate ($string) {
        $converter = [
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'ё' => 'e',
            'ж' => 'zh',
            'з' => 'z',
            'и' => 'i',
            'й' => 'i',
            'к' => 'k',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'о' => 'o',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ф' => 'f',
            'х' => 'h',
            'ц' => 'c',
            'ч' => 'ch',
            'ш' => 'sh',
            'щ' => 'shch',
            'ъ' => ' ',
            'ы' => 'i',
            'ь' => ' ',
            'э' => 'e',
            'ю' => 'yu',
            'я' => 'ya',
            ' ' => '_'
        ];
        return strtr($string, $converter);
    };

    echo translate('москва не сразу строилась');

    ?>
</div>
<br>
<hr>
<div class="task5">
    <?php
    echo 'Задание 5' . '</br>';

    $str = 'Век живи, век учись';

    echo str_replace(' ', '_', $str);

    ?>
</div>
<br>
<hr>
<div class="task6">
    <?php
    echo 'Задание 6' . '</br>';

    $menus = [
        'Home' => 'Home',
        'Men' => [
            'Polos',
            'T-shirts',
            'Sweaters',
            'Shoes'
        ],
        'Women' => [
            'T-shirts',
            'Dresses' => [
                'Long', 'Short', 'Trendy', 'Summer'
            ],
            'Skirts',
            'Shoes',
        ]
    ];
    echo '<ul>';

    foreach ($menus as $menu => $items) {
        echo '<li>';
        echo $menu;
        echo  '<ul>';

        foreach ($items as $item => $links) {
            echo '<li>';

            if (is_array($links)) {
                echo '<ul>';
                foreach ($links as $link) {
                    echo '<li>' . $link . '</li>';
                }
                echo '</ul>';
            } else {
                echo '<li>' . $links . '</li>';
            }
            echo '</li>';
        }

        echo '</ul></li>';
    }
    echo '</ul>';
    ?>
</div>
<br>
<hr>
<div class="task7">
    <?php
    echo 'Задание 7' . '</br>';

    for ($i = 0; $i <= 9; var_dump($i++) ) {

    }
    ?>
</div>
<br>
<hr>
<div class="task8">
    <?php
    echo 'Задание 8' . '</br>';

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
            if (mb_substr($town, 0, 1) === "К") {
                echo $town . ' ';
            } else {
                echo ' ';
            }

        }
    };
    ?>
</div>
<hr>
<br>
<div class="task11">
    <?php
    $menu = [
        'Главная' => 'Главная',
        'Новости' => [
            'Новости о спорте',
            'Новости о политике',
            'Новости о мире'
        ],
        'Контакты' => 'Контакты',
        'Справка' => 'Справка'
    ];
    echo '<nav>';
    foreach ($menu as $key => $value) {
        var_dump($value);
        if (is_array($value)) {
            echo '<div>' . '<a>' . '<span>' . $key . '</span>' . '</a>' . '<div>';
            foreach ($value as $news) {
                echo '<a>' . $news . '</a>';
            }
            echo '</div>';
            echo '</div>';
        } else {
            echo '<div>' . '<a>' . '<span>' . $key . '</span>' . '</a>' . '</div>';
        }
    }
    echo '</nav>';
    ?>
</div>
</body>
</html>
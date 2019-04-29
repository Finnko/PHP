<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="task_2">
<?php
    $a = 'Hello,';
    $b = 'world';

    $c = $a . $b;
    echo $c . '<br>';
    ?>
    <?php
    $a = 6;
    $b = 8;

    echo $a + $b . '<br>';    // сложение
    echo $a * $b . '<br>';    // умножение
    echo $a - $b . '<br>';    // вычитание
    echo $a / $b . '<br>';  // деление
    echo $a % $b . '<br>'; // остаток от деления
    echo $a ** $b . '<br>'; // возведение в степень
    ?>
    <?php
    $a = 6;
    $b = 8;

    $a += $b; //данное выражение увеличивает перменную a на величину переменной b.
    echo $a;
    $a = 0;
    echo $a++; //Возвращает значение $a, затем увеличивает $a на единицу. Выведет 0.
    echo ++$a; //Увеличивает $a на единицу, затем возвращает значение $a. Выведет 2, так как переменная $a равна 1.
    echo $a--; //Возвращает значение $a, затем уменьшает $a на единицу. Выведет 2.
    echo --$a; //Уменьшает $a на единицу, затем возвращает значение $a. Выведет 0, так как переменная $a равна 1.
    ?>
    <?php
    $a = 4;
    $b = 5;

    var_dump($a == $b);  // Выведет false
    var_dump($a === $b); // Выведет false
    var_dump($a > $b);    // Выведет false
    var_dump($a < $b);    // Выведет true
    var_dump($a <> $b);  // Выведет true
    var_dump($a != $b);   // Выведет true
    var_dump($a !== $b); // Выведет true
    var_dump($a <= $b);  // Выведет true
    var_dump($a >= $b);  // Выведет false
    ?>
</div>
<div class="task3">
    <?php
    $a = 5;
    $b = '05';

    var_dump($a == $b);                             // Почему true? Используется нестрогое сравнение без сравнения типов переменных, поэтому true
    var_dump((int)'012345');                        // Почему 12345? Приводится к числу, поэтому 0 отбрасывается
    var_dump((float)123.0 === (int)123.0); // Почему false? Используется строгое сравнение со сравнением типов, типы разные (дробь и число), поэтому ложь
    var_dump((int)0 === (int)'hello, world'); // Почему true? Int приводит строку к числовому типу, поскольку в строке нет цифр, она равна 0, слева также числовой тип равный 0, поэтому true
    ?>
</div>
<div class="task5">
    <?php
    $a = 10;
    $b = 2;

    $a = $a + $b; //12
    $b = $a - $b; //10
    $a = $a - $b; //2
    var_dump($a);
    var_dump($b);
    ?>
</div>
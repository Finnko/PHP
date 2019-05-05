<?php
$title = 'PHP урок 2';
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
       $a = -5;
       $b = 6;

       if ($a >= 0 && $b >= 0) {
           echo $a - $b;
       } else if ($a < 0 && $b < 0) {
           echo $a * $b;
       } else {
           echo $a + $b;
       }
       ?>
</div>
<div class="task2">
    <?php
    $c = rand(0, 15);
    echo 'Переменная c=' . $c . '</br>';
    switch ($c) {

        case 1:
        echo 1;

        case 2:
        echo 2;

        case 3:
        echo 3;

        case 4:
        echo 4;

        case 5:
        echo 5;

        case 6:
        echo 6;

        case 7:
        echo 7;

        case 8:
        echo 8;

        case 9:
        echo 9;

        case 10:
        echo 10;

        case 11:
        echo 11;

        case 12:
        echo 12;

        case 13:
        echo 13;

        case 14:
        echo 14;

        case 15:
        echo 15;
        break;
    }
    ?>
</div>
<div class="task3">
    <?php
    $a = rand(0, 30);
    $b = rand(0, 30);
    echo $a . "<br>" . $b . "<br>";

    function sum($arg1, $arg2){
        return $arg1 + $arg2;
    }

    function subtract($arg1, $arg2){
        return $arg1 - $arg2;
    }

    function multiply($arg1, $arg2){
        return $arg1 * $arg2;
    }

    function division($arg1, $arg2){
        if ($arg2 === 0) {
            return 'Делить на 0 нельзя';
        } else {
            return $arg1 / $arg2;
        }
    }

    echo 'Сумма чисел равна ' . sum($a, $b) . '</br>';
    echo 'Разность чисел равна ' . subtract($a, $b) . '</br>';
    echo 'Произведение чисел равно ' . multiply($a, $b) . '</br>';
    echo 'Деление чисел равно ' . division($a, $b) . '</br>';

    ?>
</div>
<div class="task4">
    <?php
    function mathOperation($arg1, $arg2, $operation){
        switch ($operation) {
            case '+':
            return ($arg1 + $arg2);
            break;

            case '-':
            return ($arg1 - $arg2);
            break;

            case '*':
            return ($arg1 * $arg2);
            break;

            case '/':
            return ($arg1 / $arg2);
            break;
        }
    }

    echo 'Сумма чисел равна ' . mathOperation($a, $b, '+') . '</br>';
    echo 'Разность чисел равна ' . mathOperation($a, $b, '-') . '</br>';
    echo 'Произведение чисел равно ' . mathOperation($a, $b, '*') . '</br>';
    echo 'Деление чисел равно ' . mathOperation($a, $b, '/') . '</br>';
    ?>
</div>
<div class="task6">
    <?php
    function power($val, $pow){
        if ($pow === 1) {
            return $val;
        } else if ($pow === 0) {
            return 1;
        } else {
            return ($val * power($val, $pow - 1));
        }
    }
    $val = 5;
    $pow = 6;
    echo 'Число ' . $val . ' в степени ' . $pow .  '<br/>' . power($val, $pow);
    ?>
</div>
<div class="task7">
    <?php

    function getTime() {
        $hourCurrent = (int)date('H');
        $minuteCurrent = (int)date('i');

        return $timeCurrent = getHour($hourCurrent) . ' ' . getMinutes($minuteCurrent);
    }

    function getHour($h) {
        $hour = $h % 10;

        if ($h == 1 && $h !=11) {
            echo $h . ' час ';
        } else if ($hour = 0 || $hour >= 5 && $hour <= 9 || $h >= 11 && $h <=20) {
            echo $h . ' часов ';
        } else {
            echo $h . ' часа ';
        }
        return;
    }

    function getMinutes($min) {
        $minutes = $min % 10;

        if ($min == 1 && $min !=11) {
            echo $min . ' минута ';
        } else if ($minutes = 0 || $minutes >= 5 && $minutes <= 9 || $min >= 11 && $min <=20) {
            echo $min . ' минут ';
        } else {
            echo $min . ' минуты ';
        }
        return;
    }

    echo getTime();

    ?>
</div>
</body>
</html>
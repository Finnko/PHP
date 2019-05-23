<?php
$num1 = (int)$_POST['num1'];
$num2 = (int)$_POST['num2'];
$operation = $_POST['operation'];

switch ($operation){
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        if ($num2 === 0){
            $result = 'Делить на 0 нельзя';
        } else {
            $result = $num1 / $num2;
        }
        break;
}
echo '<h3>' . 'Результат равен ' . $result . '</h3>';
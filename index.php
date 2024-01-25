<?php
// Function Signature - Сигрнатура функции
function sayHello()
{
    echo 'Hello!';
    echo 'lalala';
    $name = 'Petr';
    echo $name;
}

//sayHello();

// Sum Сумма
function getSum($a, $b)
{
    $sum = $a + $b;
    return $sum;
}

// subtraction function вычитание
function getSubtraction($a, $b)
{
    $sum = $a - $b;
    return $sum;
}

// multiplication function умножения
function getMultiplication($a, $b)
{
    $sum = $a * $b;
    return $sum;
}

// Fission Деление
function getFission($a, $b)
{
    $sum = $a / $b;
    return $sum;
}

$result = getSubtraction(50, 10);
echo $result + 5;

//echo $name . "\n";
//echo $age . "\n";
//echo $hobby . "\n";
//echo $isMarried . "\n";
//echo $pet . "\n";
//echo $petName . "\n";
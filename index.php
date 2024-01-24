<?php

$person = [
    'name' => 'Viktor',
    'age' => 20,
    'hobby' => 'swimming',
    'isMarried' => true,
    'pet' => 'cat',
    'pet_name' => 'Barsik'
];

$person2 = [
    'name' => 'Roma',
    'age' => 42,
    'hobby' => 'auto',
    'isMarried' => false,
    'pet' => 'dog',
    'pet_name' => 'Jesy'
];

$person3 = [
    'name' => 'Igor',
    'age' => 30,
    'hobby' => 'gym',
    'isMarried' => true,
    'pet' => 'no',
    'pet_name' => 'No name'
];

$name = 'Viktor';
$age = 20;
$hobby = 'swimming';
$isMarried = true;
$pet = 'cat';
$petName = 'Barsik';

$person['car'] = 'Toyota'; // add an item to the array
$person['hobby'] = 'gym'; // edit an item to the array
unset($person['car']); // delete an item to the array
print_r($person);

//echo $name . "\n";
//echo $age . "\n";
//echo $hobby . "\n";
//echo $isMarried . "\n";
//echo $pet . "\n";
//echo $petName . "\n";
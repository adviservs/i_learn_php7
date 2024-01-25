<?php

$persons = [
    [
        'name' => 'Viktor',
        'age' => 20,
        'hobby' => 'swimming',
        'isMarried' => false,
        'pet' => 'cat',
        'pet_name' => 'Barsik',
        'cars' => ['toyota', 'mazda', 'lexus']
    ],
    [
        'name' => 'Roma',
        'age' => 42,
        'hobby' => 'auto',
        'isMarried' => false,
        'pet' => 'dog',
        'pet_name' => 'Jesy'
    ],
    [
        'name' => 'Igor',
        'age' => 30,
        'hobby' => 'gym',
        'isMarried' => true,
        'pet' => 'no',
        'pet_name' => 'No name'
    ]
];

foreach ($persons as $person) {
    if ($person['isMarried']) {
        print_r($person['name'] . "\n");
    } else {
        echo 'Not married' . "\n";
    }
}

$name = 'Mark';
$age = 0;

if ($name) {
    echo 'Yes';
} else {
    echo 'No';
}

// add an item to the array
//$person['car'] = 'Toyota';
// edit an item to the array
//$person['hobby'] = 'gym';
// delete an item to the array
//unset($person['car']);

//foreach ($person as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}
//
//foreach ($person2 as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}
//
//foreach ($person3 as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}

//print_r($person3);

//echo $name . "\n";
//echo $age . "\n";
//echo $hobby . "\n";
//echo $isMarried . "\n";
//echo $pet . "\n";
//echo $petName . "\n";
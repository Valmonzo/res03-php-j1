<?php

/*$nb = 42;

echo $nb;

$str = '42';

echo $str;

$nbstr = "$nb Coucou !";

echo $nbstr;



$nb_tab = [
            12,
            13.1,
            17,
            21
            ];

print_r($nb_tab);


$str_tab = [
            "Coucou",
            "Hello",
            "Hi",
            "Comment ça va ?"
            ];

print_r($str_tab);


$animal = [
    "species" => "Felin",
    "name" => "Cat",
    "age" => 3
    ];

print_r($animal);

$data = 42;
$float = (float) $data;
$str = (string) $float;

echo $str;*/

//Exo

$animals = ["Chat", "Chien", "Lapin", "Souris"];

for($i = 0; $i < count($animals); $i++) {
    echo "$animals[$i] <br>";
};

//Exo

$numbers = [28, 32, 44, -67, 18, 24, -98];

for($i = 0; $i < count($numbers); $i++) {
    if($numbers[$i] < 0) {
        echo "$numbers[$i] <br>";
    };
};

//Exo

$user = [
    "firstName" => "Barack",
    "lastName" => "Obama"
    ];

echo "Je suis {$user["firstName"]}  {$user["lastName"]}, le 44 ème président des USA ... <br>";

// Exo

$users = [
    [
        "firstName" => "Mari",
        "lastName" => "Doucet"
    ],
    [
        "firstName" => "Hugues",
        "lastName" => "Froger"
    ]
];

foreach($users as $user) {
    echo "{$user["firstName"]}  {$user["lastName"]} <br>";

};

?>

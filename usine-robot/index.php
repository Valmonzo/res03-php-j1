<?php

function randomName():string {
    $alpha = ["A", "B", "C", "D", "E", "F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    $nb = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $randomAlpha = array_rand($alpha, 2);
    $randomNb = array_rand($nb, 4);
    return $alpha[$randomAlpha[0]] . $alpha[$randomAlpha[1]] . "-" . $nb[$randomNb[0]] . $nb[$randomNb[1]] . $nb[$randomNb[2]] . $nb[$randomNb[3]];

}


$randomRobot = randomName();
$reverseRobot = strrev($randomRobot);

$randomNb = rand(10, 99);

$rand1 = rand(0,9);
$rand2 = rand(0,9);
$rand3 = rand(0,9);
$rand4 = rand(0,9);

date_default_timezone_set('Europe/Paris');
$day = date("j F, Y");
$hour = date("H:i:s");
$nbMystere = rand(1, 30000);



function randCalc(int $nb): string {
    if($nb % 2 === 0) {
        return "J'ai choisi le nombre $nb, il est pair !";
    }
    else {
        return "J'ai choisi le nombre $nb, il est impair !";
    }
}

function killYourselfBro() :string {
    $nb = rand(1,3);

    if($nb < 3) {
       return "Vous voulez un café ?";
    }
    else{
        return "Extermination! Extermination!";
    }
}

function mysteriousNumberToFind(int $nb): string {
    for($i = 0; $i < 30000; $i++) {
        if($nb === $i) {
            return "J'ai trouvé ! Le nombre mystère est $i !";
        }
    }
}


echo "Salut, humain. Je suis $randomRobot";

echo "<br>";

echo "Nous sommes le $day, il est $hour";

echo "<br>";

echo randCalc($randomNb);

echo "<br>";

echo "Mon nom à l'envers s'écrit $reverseRobot . Ah. Ah. Ah";

echo "<br>";

echo killYourselfBro();

echo "<br>";

echo mysteriousNumberToFind($nbMystere);

echo "<br>";


?>


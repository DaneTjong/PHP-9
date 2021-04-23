<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdrachten 003</title>
    <link rel="stylesheet" href="./003/opdrachten3.css">

</head>
<body>

<br/>
<br/>
<p>10 apen</p>

<?php
$num_of_monkies = 10;
for($apen = 0; $apen < $num_of_monkies; $apen++) {
	echo "<img src=003/aap".$apen.".jpg width=\"250\" height=\"250\">";
    if ($apen % 5 == 4){
        echo "<br/>";
    };
}
?>
<br/>
<br/>
<br/>

<div class="boom">
<p>Kerstboom</p>
<?php
for ($i=0; $i <= 15; $i++) {
    for ($j=1; $j <= $i ; $j++) { 
     echo"*";
    }
echo"*<br/>";
}
?>

</div>
<br/>
<br/>
<br/>

<p>van while naar for loop</p>
<?php
for ($x = 35; $x >= 25; $x--) {
    echo "hoppelepee<br/>";
  }
?>

<br/>
<br/>
<br/>

<p>apen loop</p>
<?php
$style = "style=\"border: 2px solid #ff0000\"";
$num_of_monkies1 = 10;
for($apen1 = 0; $apen1 < $num_of_monkies1; $apen1++) {
	echo "<img src=003/aap".$apen1.".jpg width=\"250\" height=\"250\"".$style.">";
    if ($apen1 % 2 != 0){
        $style = "style=\"border: 2px solid #ff4444\""; 
    }else{
        $style = "style=\"border: 2px solid #44FF00\"";
    };
}
?>
<br/>
<br/>
<br/>

<p>busreis</p>
<form action="003.php" method="POST">
<label for="Age">Leeftijd bezoeker:</label><br>
<input type="number" id="Leeftijd" name="Leeftijd"><br>

</form>
<?php
 $basisprijs = 10;

 $leeftijd = $_POST["Leeftijd"];
if ($leeftijd <= 3) {
    $prijs = 0;
    echo "Voor kinderen onder en van 3 jaar oud is de entre gratis:".$prijs;
} elseif($leeftijd <= 12) {
    $prijs = ($basisprijs / 100) * 50;
    echo "De kinderen onder en van 12 jaar oud krijgen 50% korting is dus:".$prijs;
} elseif($leeftijd <= 65){
    $prijs =$basisprijs;
    echo"De prijs voor mensen vanaf 12 en tot 65 is:".$prijs;
} elseif ($leeftijd >= 66){
    $prijs =($basisprijs / 100) * 50;
    echo"onze lieve senioren krijgen 50% korting waardoor de prijs neer komt op:".$prijs;
}

?>
<br/>
<br/>
<br/>
<p>zwemclub</p>
<?php

//  image location
//  <img src="./003/swimming.png" height="50px" width="50px">

// $clubs = array(
// array ("De spartelkuikens",25),
// array ("De waterbuffels",23),
// array ("Plonsmderin",11),
// array ("Bommetje",23)
// );

//     foreach ($clubs as $club) {
//         echo"<tr>";
//         foreach ($club as $item) {
//             echo"<td>".$item."</td>";

            

//         }
//         for ($icl=0; $icl < count($clubs); $icl++) { 
//             $dividee = $clubs[$icl][1];
//             $divider = 5;
//             $swimmers = intdiv($dividee, $divider);
//             echo $swimmers;
//         }
//         echo"<td>";
//         for ($k=0; $k < $swimmers; $k++) { 
//             echo"<img src=\"./003/swimming.png\" height=\"50px\" width=\"50px\">";
//             echo $swimmers;
//         }
//         echo"</td>";
//     echo"</tr>";
// }


$clubs = [
    "De spartelkuikens" => 25,
    "De waterbuffels" => 32,
    "Plonsmderin" => 11,
    "Bommetje" => 23
];

echo"<table style=\"width:60%\" border=1px>";

foreach($clubs as $cnaam => $leden ){
    echo'<tr>';
    echo'<td>'.$cnaam.'</td>';
    echo'<td>'.$leden.'</td>';
    
    $plaatjes = floor($leden / 5);
    echo'<td>';
    for ($pl=0; $pl < $plaatjes; $pl++) { 
        echo '<img src="./003/swimming.png" height="50px" width="50px">';
    }
    echo'</td>';
    echo'</tr>';
}

echo"</table>";
?>
<br/>
<br/>
<br/>

<p>kappersagenda</p>
<?php


$agendadata = [
    "9:15" => "Mevr. Pietersen",
    "9:30" => "Mevr. Willems",
    "9:45" => "",
    "10:00" => "Paul van den Broek",
    "10:15" => "Karel de Meeuw",
    "10:30" => ""
];

print("De volgende momenten zijn nog beschikbaar:");
foreach ($agendadata as $tijd => $klant) {
    if($klant ==""){
        print("<li>".$tijd."</li>");
    }
}
echo"<br>";
?>

</body>
</html>
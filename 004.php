<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdrachten 004</title>
</head>
<body>


    <?php
    
// OPDRACHT 1
    $temperatuur = $_POST["temperatuur"];
    function button1($temperatuur) {
        $tempantwoord = ($temperatuur * 1.8) + 32;
        echo $_POST["temperatuur"]." Celcius = ".$tempantwoord."Fahrenheit";
    }
    function button2($temperatuur) {
        $tempantwoord = ($temperatuur - 32) / 1.8;
        echo $_POST["temperatuur"]." Fahrenheit = ".$tempantwoord."Celcius";
    }
    
    if(array_key_exists('CtoF', $_POST)) {
        button1($temperatuur);
    }
    else if(array_key_exists('FtoC', $_POST)) {
        button2($temperatuur);
    }

    echo'
    <div id="thermometer">

        <H1>Thermometer</H1>

        <form method="POST" action="004.php">
            <label for="temperatuur">Temperatuur:</label><br>
            <input type="number" id="temperatuur" name="temperatuur" step=".01"><br>
                <input type="submit" name="CtoF"
                    class="button" value="C to F" />
            
            <input type="submit" name="FtoC"
                    class="button" value="F to C" />
        </form>
    </div>

';

echo'<br/>';
echo'<br/>';
echo'<br/>';

$calcnum2 = 16;

function divby3($calcnum2){
    if ($calcnum2 % 3 == 0) {
        echo $calcnum2." is dividable by 3";
    }else{
        echo $calcnum2." is not dividable by 3";
    }
}

 echo'<br/>';
 echo'<br/>';
 echo'<br/>';

divby3($calcnum2);

echo'<br/>';
echo'<br/>';
echo'<br/>';


$string ="hoofdpijn is niet fijn";


echo "de originele string :".$string."<br/>";
echo "De omgedraaide string :".ReverseString($string)."<br/>";

function ReverseString($string){
    $stringsize = strlen($string);
    $ReverseString="";
    for ($i = $stringsize - 1 ; $i >= 0 ; $i--) { 
        $letters = substr($string, $i, 1);
        $ReverseString .= $letters;
    }
    return $ReverseString;
}


?>


</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $name = ["Marek", "Martin", "Jana"];
        $minumum = 3;
        $maximum = 10;
        echo $username;
        echo "<br>";
        echo $password;
        echo "<br>";
        
        if(strlen($username) <= $minumum){
            echo "Uzivatelske jmeno musi byt delsi nez: ".$minimum." znaky!";
        }
        
        if(strlen($username) >= $maximum){
            echo "Uzivatelske jmeno musi byt kratsi nez: ".$maximum. "znaků";
        }
        echo "<br>";
        if (in_array($username, $name)){
            echo "Jsi prihlasen.";
        } else {
            echo "Nejsi registrovany";
        }
    }
?>

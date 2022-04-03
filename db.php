<?php

// Funkce, ktera zajistuje pripojeni k databazi
function connection(){
    global $connection;
    $connection = mysqli_connect("localhost", "root","","logginapp");
    
    if ($connection){
        echo "Uspesne pripojeni do databaze";
    } else {
        die("Ou! Neco se pokazilo");
    }
}

// Funkce, ktera vklada data do databaze
function insert(){
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $query = "INSERT INTO users(username,password) VALUES('$username', '$password')";
    $result = mysqli_query($connection, $query);
    
    if (!$result){
        die("Dotaz do databaze selhal!".mysqli_error());
    } 
}

// Funkce, ktera aktializuje data v databazi
function update(){
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];
    
    $query_2 = "UPDATE users SET username='$username', password='$password' WHERE id = $id";
    $result_2 = mysqli_query($connection, $query_2);
        
    if (!$result_2){
        die("dotaz do databaze selhal".mysqli_error());
    }
}

// Funkce, ktera maze data z databaze
function delete(){
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];
    
    $query_3 = "DELETE FROM users WHERE id = '$id'";
    $result_3 = mysqli_query($connection, $query_3);
        
    if (!$result_3){
        die("dotaz do databaze selhal".mysqli_error());
    }
}

// Funkce, ktera vybere data z databaze
function selectData(){
    global $connection;
    global $result;
    
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    
    if (!$result){
        die("Nepodarilo se vybrat data z databaze".mysqli_error());
    }
}

?>
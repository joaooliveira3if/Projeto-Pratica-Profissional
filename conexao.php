<?php

$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = mysqli_connect($servername, $username, $password, $dbname); 

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$login = $_POST["login"];
$senha = $_POST["senha"];

if ($result = mysqli_query($conn, "INSERT INTO professor (login, senha) VALUES ('$login', '$senha')")) {
    header("Location: http://joaoliveira1.com/alunos.html");
    exit();
    mysqli_free_result($result);
    
} else {
    echo "Error: " . mysqli_error($conn);
}


    
?>

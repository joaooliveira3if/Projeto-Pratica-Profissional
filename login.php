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

$sql = "SELECT * FROM professor WHERE login = '$login' AND senha = '$senha'";

if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        header("Location: http://joaoliveira1.com/alunos.html");  
        exit();
    } else {
        echo "Login failed. Please check your credentials.";
    }
    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$nome = $_POST['nome'];
$turma = $_POST['turma'];
$data = $_POST['data'];
$presenca = $_POST['presenca'];

if ($result = mysqli_query($conn, "INSERT INTO alunos (nome, turma, data, presenca) VALUES ('$nome', '$turma', '$data', '$presenca')")) {
    header("Location: ");    
    exit();
    mysqli_free_result($result);
    
} else {
    echo "Error: " . mysqli_error($conn);
}
?>

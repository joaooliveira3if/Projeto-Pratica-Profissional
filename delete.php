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

if ($result = mysqli_query($conn, "DELETE FROM alunos WHERE nome = '$nome' AND turma = '$turma' AND data = '$data' AND presenca = '$presenca'")) {
    header("Location: http://joaoliveira1.com/alunos.html");  
    exit();
    mysqli_free_result($result);
    
} else {
    echo "Error: " . mysqli_error($conn);
}
?>

<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = mysqli_connect($servername, $username, $password, $dbname); // Changed $database to $dbname

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($result = mysqli_query($conn, "SELECT * FROM alunos")) {
 
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
      mysqli_free_result($result);

      mysqli_close($conn);

      $json_response = json_encode($data);
  
      header('Content-Type: application/json');
      echo $json_response;
} else {
    echo "Error: " . mysqli_error($conn);
}


    
?>

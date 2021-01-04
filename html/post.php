<?php
    //Get current date and time
    date_default_timezone_set('Europe/Lisbon');
    $data = date("Y-m-d");
    $horas = date("H:i:s");

if(!empty($_POST['message'])){
    $message = $_POST['message'];
    $split = explode(" ", $message);
    $id_hive = $split[0]; 
    $temperature = $split[1]; 
    $humidity = $split[2]; 
    $weight = $split[3]; 
}
$sql = "INSERT INTO medida (id_colmeia, data, horas, temperatura, humidade, peso) VALUES ('$id_hive', '$data', '$horas', '$temperature', '$humidity', '$weight')"; 

  echo $sql;


//Creates new record as per request
    //Connect to database
    $servername = "localhost";
    $username = "admin";
    $password = "123qweasd";
    $dbname = "test";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
    echo "good connection ";


    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

?>

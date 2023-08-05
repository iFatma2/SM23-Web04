<?php

// Connection to server & database
require "conn.php";



if(isset($_GET['Save'])){

// save value in $var
$Temperature = $_GET['Temperature'];
$Humidity = $_GET['Humidity'];



$sql = "INSERT INTO Weather VALUES ('',$Temperature ,$Humidity)";
mysqli_query($conn,$sql);
echo "<script>alert('Data Successfully Added in DataBase *-* '); window.location = 'index.html';</script>";
}

if(isset($_GET['Retrive'])){

    // Retrieve the Weather Data from the database
    $sql = "SELECT Temperature,Humidity FROM weather ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $Temperature = $row['Temperature'];
        $Humidity = $row['Humidity'];

        echo  "Temperature: ",$Temperature  ."<br>". "Humidity: ",$Humidity;
    } else {
        echo "<script>alert('There is no data in the database to recover. Try entering the data first'); window.location = 'index.html';</script>";
        
    }
}

$conn->close();     // Close the database connection


?>

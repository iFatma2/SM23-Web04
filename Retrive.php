<?php

// Connection to server & database
require "conn.php";


if(isset($_GET['Retrive'])){
    // Retrieve the direction from the database
    $sql = "SELECT Temperature FROM weather ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $weather = $row['Temperature'];
        echo $weather;
    } else {
        $weather = "";
        echo $weather;
    }
}


// Close the database connection
mysqli_close($conn);
?>

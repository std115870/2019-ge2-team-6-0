<?php
	$servername = "localhost";
    $username = "sdy60";
    $password = "sdy60_2019";
    $dbname = "quick_like_hermes";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
	}
    //echo "Connected successfully";
	$u_name = $_POST["u_name"]; 
	
	$result = $mysqli->query("SELECT u_id FROM users WHERE u_id = '".$u_name."'");
    if($result->num_rows == 0) {
         echo TRUE;
    } else {
        echo FALSE;
    }
    $mysqli->close();
?>
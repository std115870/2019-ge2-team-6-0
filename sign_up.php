<?php
$servername = "localhost";
$username = "sdy";
$password = "sdy_2019";
$dbname = "Quick_like_Hermes";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$f_name = $_POST["f_name"]; 
$email = $_POST["email"];
$u_name = $_POST["u_name"]; 
$u_psw = $_POST["u_psw"]; 
$u_bday = $_POST["u_bday"];
$nu_bday = substr($u_bday, 0, 10);
$u_mob_phone = $_POST["u_mob_phone"]; 
$u_fix_phone = $_POST["u_fix_phone"];

$sql = "INSERT INTO users (u_f_name, u_email, u_id, u_pwd, u_role, u_b_date, u_mob_phone, u_fix_phone)
VALUES ('".$f_name."','".$email."','".$u_name."','".$u_psw."','user','".$nu_bday."','".$u_mob_phone."','".$u_fix_phone."')";

if ($conn->query($sql) === TRUE) {
	echo "<script type='text/javascript'>alert('Επιτυχής Εγγραφή');</script>";
    include 'index.html';
} else {
    $error_code = $conn->error;
    #echo "Error: ".$error_code;
	echo "<script type='text/javascript'>alert('Ανεπιτυχής Εγγραφή');</script>";
	include 'index.html';
}


$conn->close();
?>
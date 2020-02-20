<?php
include 'connections/myfriends.php';
//$ID = $_POST['id'];
$Title = $_POST['title'];
$Fname = $_POST['fname'];
$Lname = $_POST['lname'];
$Address = $_POST['address'];
$Bdate = $_POST['bdate'];

$sql = "INSERT INTO friends (title, fname, lname, address, bdate)
VALUES ('$Title', '$Fname', '$Lname', '$Address', '$Bdate')";

if ($conn->query($sql) === TRUE) {
	header("Location: mysqltest.php");
	die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
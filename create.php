<?php

include 'db.php';

$name = $_POST["name"];
$lastname = $_POST["lastname"];
$dateofbirth = $_POST["dateofbirth"];

$sql = "insert into verjaardagen (name, last_name, date_of_birth) values ('$name', '$lastname','$dateofbirth')";

$conn->query($sql);
$conn->close();

header("location: index.php");

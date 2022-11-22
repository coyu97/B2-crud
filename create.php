<?php

include 'db.php';

$name = $_POST["name"];
$lastname = $_POST["lastname"];
$dateofbirth = $_POST["dateofbirth"];

$sql = "insert into demo_table (name, lastname,datofbirth) values ('$name', '$lastname','$dateofbirth')";

$conn->query($sql);
$conn->close();

header("location: index.php");

<?php

$conn = new mysqli('localhost', 'root', '', 'db_bola');

$data = $_GET['id'];
$conn->query("CALL deleteDataClub ($data)");
header("Location: http://localhost/club%20bola/");

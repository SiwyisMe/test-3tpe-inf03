<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baza";

$conn = new mysqli($servername, $username, $password, $dbname);

$stmt = $conn->prepare("INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES (?, ?, ?)");
$stmt->bind_param("sis", $data_rez, $liczba_osob, $telefon);

$data_rez = $_POST['data_rez'];
$liczba_osob = $_POST['liczba_osob'];
$telefon = $_POST['telefon'];
$stmt->execute();

echo "Dodano rezerwację do bazy";

$stmt->close();
$conn->close();
?>

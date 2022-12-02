<?php
require_once 'login.php';
$conn = new mysqli($dh, $du, $dp, $dd);
if ($conn->connect_error) die("błąd Krytyczny");

$query = "CREATE TABLE hotel (
    id_hotel SMALLINT NOT NULL AUTO_INCREMENT,
    id_miasta SMALLINT,
    id_foto SMALLINT,
    nazwa VARCHAR(15) NOT NULL DEFAULT '',
    PRIMARY KEY (id_hotel)
)";
$result = $conn->query($query);
if (!$result) die("błąd krytyczny");

$query = "CREATE TABLE foto (
    id_foto SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    foto VARCHAR(255)
)";
$result = $conn->query($query);
if (!$result) die("błąd krytyczny");

$query = "CREATE TABLE klient (
    id_klient SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(15),
    nazwisko VARCHAR(15),
    email VARCHAR(15),
    id_hotel SMALLINT,
    data_przyjazdu DATE,
    data_wyjazdu DATE
)";
$result = $conn->query($query);
if (!$result) die("błąd krytyczny");

$query= "CREATE TABLE miasta (
    id_miasto SMALLINT NOT NULL AUTO_INCREMENT,
    miasto VARCHAR(15) NOT NULL,
    PRIMARY KEY (id_miasto)
    )";
$result = $conn->query($query);
if (!$result) die("błąd krytyczny");

mysqli_close($conn);
?>
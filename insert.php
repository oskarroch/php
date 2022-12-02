<?php
require_once 'login.php';
$conn = new mysqli($dh, $du, $dp, $dd);
if ($conn->connect_error) die("błąd Krytyczny");

$query = "INSERT INTO foto VALUES
(NULL, '<img src=\"picture/lesna.jpg\" alt=\"lesna\">'),
(NULL, '<img src=\"picture/kostrzyn.jpg\" alt=\"kostrzyn\">'),
(NULL, '<img src=\"picture/jgora.jpg\" alt=\"jgora\">'),
(NULL, '<img src=\"picture/grudziadz.jpg\" alt=\"grudziadz\">'),
(NULL, '<img src=\"picture/gdynia.jpg\" alt=\"gdynia\">')";

$result = $conn->query($query);
if (!$result) die("błąd krytyczny");

$query = "INSERT INTO miasta VALUES
(NULL, 'Jelenia Góra'),
(NULL, 'Gdynia'),
(NULL, 'Grudziądz'),
(NULL, 'Kostrzyn'),
(NULL, 'Leśna')";

$result = $conn->query($query);
if (!$result) die("błąd krytyczny");

$query = "INSERT INTO hotel (id_hotel, id_miasta, nazwa) VALUES
(NULL, 1, 'Dom Marynarza'),
(NULL, 2, 'Leliwa'),
(NULL, 3, 'Kowalkowska'),
(NULL, 4, 'Feniks'),
(NULL, 5, 'Dom Turystyczny')";

$result = $conn->query($query);
if (!$result) die("błąd krytyczny");

mysqli_close($conn);

?>

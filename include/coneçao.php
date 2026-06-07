<?php
$servername = "127.0.0.1";  // como está tudo na mesma máquina por enquanto
$username = "root";
$password = "";              // deixe vazio se não colocou senha no XAMPP
$dbname = "thiagolanche";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
<?php
$servername = "192.168.56.101";  // como está tudo na mesma máquina por enquanto
$username = "lucas";
$password = "luna2803";              // deixe vazio se não colocou senha no XAMPP
$dbname = "thiago lanches";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
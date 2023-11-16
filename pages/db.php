<?php

$servername = "db-users-do-user-15116273-0.c.db.ondigitalocean.com";
$username = "doadmin";
$password = "AVNS_rMlMlB10GUZSxIJ5omj";
$database = "defaultdb";
$port = 25060;
$sslmode = "REQUIRED";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa";

?>
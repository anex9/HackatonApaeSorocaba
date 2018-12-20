<?php

function conectar()
{
    $conn = mysqli_connect("localhost","root","","usuarios");
    // Checar
    if (!$conn){
    echo "Conexão dom o banco de dados falhou";
    exit();
    }

    return $conn;
}
?>
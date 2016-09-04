<?php
$conn ='';
try {
    $conn = new PDO('mysql:host=localhost;dbname=BANCO_DE_DADOS', 'USUARIO', 'SENHA');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Foi";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


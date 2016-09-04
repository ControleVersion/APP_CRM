<?php
$conn ='';
try {
    $conn = new PDO('mysql:host=localhost;dbname=siswe908_ead_treinamentos', 'siswe908_roberto', '78rest65');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Foi";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


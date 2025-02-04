<?php
$host = 'localhost:3306';
$dbname = 'emile-lenain_user_recipes';
$username = 'Emile-Lenain';
$password = 'Aa15345678!';
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM recipes");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
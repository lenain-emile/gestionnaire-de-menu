<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_recipes";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM recipes");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
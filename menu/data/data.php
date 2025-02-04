<?php
$host = 'localhost:3306';
$dbname = 'emile-lenain_user_recipes';
$username = 'Emile-Lenain';
$password = 'Aa15345678!';


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $category = $_POST["category"];
        

        $stmt = $conn->prepare("INSERT INTO recipes (name, description, price, category) VALUES (:name, :description, :price, :category)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':category', $category);
        

        $stmt->execute();
        echo "New record created successfully";
        header("Location: recette.php");
        exit();
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
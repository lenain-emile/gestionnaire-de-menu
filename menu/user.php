<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_recipes";
//  require pour me permettre d'ajouter PDO a mes fichiers sans  retaper la requette

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

<!DOCTYPE html>
<html>
<head>
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form action="user.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Name"> <br>
    <textarea name="description" placeholder="Description" rows="4" cols="50"></textarea> <br>
    <input type="text" name="price" placeholder="Price"> <br>

    <select name="category">
        <option value="1">Entrée</option>
        <option value="2">Plat</option>
        <option value="3">Dessert</option>
    </select>
    
    <input type="submit" name="submit" value="Envoyer"> <br>
    <input type="reset" value="Réinitialiser">
   
</form>

</body>

</html>
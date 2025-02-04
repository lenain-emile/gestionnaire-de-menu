<?php
$host = 'localhost:3306';
$dbname = 'emile-lenain_user_recipes';
$username = 'Emile-Lenain';
$password = 'Aa15345678!';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipe_id = $_POST['recipe_id'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM recipes WHERE id = :id");
        $stmt->bindParam(':id', $recipe_id);
        $stmt->execute();
        $recipe = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($recipe) {
            echo "<h1>" . $recipe['name'] . "</h1>";
            echo "<section class= ><p>" . $recipe['description'] . "</p></section>";
            echo "<style>body { background-color:rgb(125, 20, 20); }</style>";
        } else {
            echo "Recette non trouvée.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Méthode de requête non valide.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Recette</title>
    <link rel="stylesheet" type="text/css" href="https://emile-lenain.students-laplateforme.io.iorecipe.css">
</html>

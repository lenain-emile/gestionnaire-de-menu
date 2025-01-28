<!DOCTYPE html>
<html>
<head>
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="recipe.css">
</head>
<body>
<h1>Recettes</h1>
<p>Bienvenue dans l’espace dédié à vos recettes ! Nous sommes ravis de vous accueillir parmi nous. <br> Ce lieu est conçu pour mettre en valeur votre savoir-faire culinaire et partager vos créations avec une communauté passionnée <br>
Que vous soyez un chef expérimenté ou un restaurateur innovant, cette page est le reflet de votre talent et de votre créativité. <br> Prenez le temps de découvrir, d’ajouter et de faire connaître vos plats afin d’inspirer et ravir vos clients. À vous de briller !.</p>

<form method="post" action="recipe_page.php">
    <select class="s1" name="recipe_id">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user_recipes";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM recipes");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $row) {
                echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </select>
    <button type="submit">Valider</button>
    
</form>
<img src="back.jpg" alt="couscous" class="img1">
</body>
</html>

<?php



?>

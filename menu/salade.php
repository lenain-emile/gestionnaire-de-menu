<?php
try {
    $host = 'localhost:3306';
    $dbname = 'emile-lenain_user_recipes';
    $username = 'Emile-Lenain';
    $password = 'Aa15345678!';
    

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Première requête
    $stmt1 = $conn->prepare("SELECT type_de_salades FROM salades");
    $stmt1->execute();
    $result1 = $stmt1->fetchAll();

    // Deuxième requête
    $stmt2 = $conn->prepare("SELECT Protéine FROM protéine");
    $stmt2->execute();
    $result2 = $stmt2->fetchAll();

    // Troisième requête
    $stmt3 = $conn->prepare("SELECT topping FROM topping");
    $stmt3->execute();
    $result3 = $stmt3->fetchAll();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Salades</title>
    <link rel="stylesheet" type="text/css" href=https://emile-lenain.students-laplateforme.io/style/user.css>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-logo">
                <img src="https://emile-lenain.students-laplateforme.io/img/logo_cuisine_du_monde.png" alt="Logo" class="logo">
            </div>
            <div class="nav-title">
                <h1>Cuisine du Monde</h1>
            </div>
            <div class="nav-user">
                <i class="fas fa-user-circle"></i>
            </div>

        </nav>
    </header>

<div class="form-container">
    <form action="submit_salade.php" method="post">
        <label for="type_de_salades">Type de Salades:</label>
        <select name="type_de_salades" id="type_de_salades">
            <?php foreach ($result1 as $row): ?>
                <option value="<?php echo htmlspecialchars($row['type_de_salades']); ?>">
                    <?php echo htmlspecialchars($row['type_de_salades']); ?>
                </option>
            <?php endforeach; ?>
        </select> <br>

        <label for="autre_champ">Les Protéines:</label>
        <select name="autre_champ" id="autre_champ">
            <?php foreach ($result2 as $row): ?>
                <option value="<?php echo htmlspecialchars($row['Protéine']); ?>">
                    <?php echo htmlspecialchars($row['Protéine']); ?>
                </option>
            <?php endforeach; ?>
        </select> <br>

        <label for="sauce">Les topping:</label>
        <select name="sauce" id="sauce">
            <?php foreach ($result3 as $row): ?>
                <option value="<?php echo htmlspecialchars($row['topping']); ?>">
                    <?php echo htmlspecialchars($row['topping']); ?>
                </option>
            <?php endforeach; ?>
        </select> <br>

        <input type="submit" value="Ajouter">
    </form>
</div>
</body>
</html>

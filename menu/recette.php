<!DOCTYPE html>
<html>
<head>
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Recettes</h1>

<select name="recipes">
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

</body>
</html>
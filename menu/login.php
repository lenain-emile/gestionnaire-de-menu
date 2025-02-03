<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=user_recipes', 'root', '',);

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $request = $pdo->prepare("SELECT * FROM user_management WHERE username = :username");
    $request->execute(['username' => $username]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    
    if ($password == $result['password']) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    } 
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Restaurant</title>
    <link rel="stylesheet" href="./connexion.css">
</head>

<body>
    <h1>Bienvenue</h1>
    <div class="container">
        <div class="logo">
            
            <img src="https://www.creativefabrica.com/wp-content/uploads/2018/10/Chef-restaurant-logo-by-DEEMKA-STUDIO-4.jpg" alt="Restaurant Logo">
        </div>
        <form method="POST">
            <div class="input-group">
                <input type="text" name="username" placeholder="Nom d'utilisateur" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Mot de passe" required>
            </div>
            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style>
        body {
            background-color: black;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: white;
            margin-bottom: 30px;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            width: 300px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color:black;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .error-message {
            color: red;
            text-align: center;
        }

        a {
            color: white;
            text-decoration: none;
            margin-top: 20px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php if (isset($_SESSION['username'])): ?>
        <h1>Bonjour <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
        <a href="deconnexion.php">Déconnexion</a>
    <?php else: ?>
        <h1>Bienvenue</h1>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
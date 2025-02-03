<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Restaurant</title>
    <link rel="stylesheet" href="https://emile-lenain.students-laplateforme.io/menu/index.css">
</head>
<body>
    <?php if (isset($_SESSION['username'])): ?>
        <div class="user-greeting">
            <div class="logo">
                <img src="https://www.creativefabrica.com/wp-content/uploads/2018/10/Chef-restaurant-logo-by-DEEMKA-STUDIO-4.jpg" alt="Restaurant Logo">
            </div>
            
            <h2>Bonjour <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
            <div class="button-group">
                <a href="https://emile-lenain.students-laplateforme.io/menu/user.php" class="btn">Recette</a>
                <a href="https://emile-lenain.students-laplateforme.io/menu/deconnexion.php" class="btn">Déconnexion</a>
            </div>
        </div>
    <?php else: ?>
        <h1>Bienvenue à notre Restaurant</h1>
        <div class="container">
            <div class="logo">
                <img src="https://www.creativefabrica.com/wp-content/uploads/2018/10/Chef-restaurant-logo-by-DEEMKA-STUDIO-4.jpg" alt="Restaurant Logo">
            </div>
            <form action="login.php" method="POST">
                <input type="text" name="username" placeholder="Nom d'utilisateur" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <button type="submit">Connexion</button>
            </form>
            <div class="button-group">
                <a href="user.php" class="btn">Accueil</a>
            </div>
        </div>
    <?php endif; ?>
</body>
</html>
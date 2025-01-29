<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Accueil</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo '<h1>Bonjour ' . $_SESSION['username'] . '</h1>';
        echo '<a href="deconnexion.php">Déconnexion</a>';
    } else {
        echo '<h1>Bienvenue</h1>';
        echo '<a href="login.php">Connexion</a>';
    }
    ?>
</body>

</html>
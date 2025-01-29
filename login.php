<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=user_management', 'root', '',);
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
    <title>Connexion</title>
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
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>Connexion</h1>
    <form method="POST">


        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>
    </form>

</body>

</html>
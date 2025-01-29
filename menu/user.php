<?php
include("data.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="user.css">
</head>
<body>
<header>
        <nav class="navbar">
            <div class="nav-logo">
                <img src="logo_cuisine_du_monde.png." alt="Logo" class="logo">
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
    
<form action="user.php" method="post" enctype="multipart/form-data">
    <label for="name">Nom du plat</label>
    <input type="text" name="name" placeholder="ex couscous"> <br>
    <label for="description">Description</label>
    <textarea name="description" placeholder="Description" rows="4" cols="50"></textarea> <br>
    <label for="prix">Prix</label>
    <input type="text" name="price" placeholder="15€"> <br>
    

    <select name="category">
        <option value="1">Entrée</option>
        <option value="2">Plat</option>
        <option value="3">Dessert</option>
    </select>
    
    <input type="submit" name="submit" value="Envoyer"> <br>
    <input type="reset" value="Réinitialiser">
   
</form>
</div>

</body>

</html>
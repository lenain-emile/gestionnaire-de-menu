<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type_de_salades = htmlspecialchars($_POST['type_de_salades']);
    $autre_champ = htmlspecialchars($_POST['autre_champ']);
    $sauce = htmlspecialchars($_POST['sauce']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Salades</title>
    <link rel="stylesheet"  href="emile-lenain.students-laplateforme.io/style/salade.css">
</head>
<body>
    <div class="center">
        <h1>Entrée</h1>
    
        <table>
            <tr>
                <th>Base</th>
                <td><?php echo $type_de_salades; ?></td>
            </tr>
            <tr>
                <th>Protéines</th>
                <td><?php echo $autre_champ; ?></td>
            </tr>
            <tr>
                <th>Topping</th>
                <td><?php echo $sauce; ?></td>
            </tr>
        </table>
       <?php if ($autre_champ == "crevette") echo '<emile-lenain.students-laplateforme.io/img src="img/salad2.png" alt="Salade" class="salade">'; ?>
    <?php if ($autre_champ == "crevette") echo 'Salade cocktail de crevettes'; ?>
       <?php if ($autre_champ == "Poulet rôti") echo '<emile-lenain.students-laplateforme.io/img src="img/salad1.png" alt="Salade" class="salade">'; ?>
       <?php if ($autre_champ == "Poulet rôti") echo 'Salade César'; ?>
       <?php if ($autre_champ == "Oeuf dur") echo '<emile-lenain.students-laplateforme.io/img src="img/salad3.png" alt="Salade" class="salade">'; ?>
       <?php if ($autre_champ == "Oeuf dur") echo 'Salade niçoise'; ?>
       <?php if ($autre_champ == "Jambon blanc") echo '<emile-lenain.students-laplateforme.io/img src="img/salad4.png" alt="Salade" class="salade">'; ?>
       <?php if ($autre_champ == "Jambon Blanc") echo 'Salade lyonnaise'; ?>

    </div>
</body>
</html>
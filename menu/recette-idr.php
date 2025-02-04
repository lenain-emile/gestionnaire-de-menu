<?php
// Configuration de la base de données
$host = 'localhost:3306';
$dbname = 'emile-lenain_user_recipes';
$username = 'Emile-Lenain';
$password = 'Aa15345678!';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    die();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipe_id = $_POST['recipe_id'];
//  POUR TEST AJOUTS RECETTE SUPPRIMER SI NECESSAIRE (31/01)
    
}

// Fonction pour récupérer toutes les recettes
function getAllRecipes($pdo) {
    $stmt = $pdo->query("SELECT * FROM recipes");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Récupération des recettes
$allRecipes = getAllRecipes($pdo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="idriss.css">
    <title>Food Website</title>
</head>
<body>
  

    <section class="details-foods">
        <div class="title"><h1 data-aos="fade-left" data-aos-duration="1000" >Nos meilleures recettes</h1></div>
        <div class="foods">
            <div class="card" data-aos="fade-up" data-aos-duration="1000">
                <img src="emile-lenain.students-laplateforme.io/images/salad.png" alt="">
                <div class="discription">
                    <h1> Red Spinach with Carrot</h1>
                    <p>A spinach salad features tender spinach leaves tossed with vibrant toppings like crisp bacon, sliced mushrooms, and hard-boiled eggs, all drizzled in a zesty vinaigrette, offering a flavorful and nutritious combination in every bite.</p>
                    <p class="price">Rs 90.00</p>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="emile-lenain.students-laplateforme.io/images/salad1.png" alt="">
                <div class="discription">
                    <h1>Spinach With Carrot</h1>
                    <p>Combining the leafy goodness of spinach with the vibrant crunch of carrots, this salad offers a harmonious balance of flavors and textures, making it a refreshing and healthful choice for any meal and burst of freshness in every mouthful.</p>
                    <p class="price">Rs 80.00</p>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <img src="emile-lenain.students-laplateforme.io/images/salad2.png" alt="">
                <div class="discription">
                    <h1>Green leave with Tomato</h1>
                    <p>Green leaf and tomato salad: A simple yet vibrant combination of crisp, leafy greens paired with juicy, ripe tomatoes, accented with a tangy dressing, offering a refreshing burst of flavors and creates a delightful salad that's both light and satisfying.</p>
                    <p class="price">Rs 95.00</p>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                <img src="emile-lenain.students-laplateforme.io/images/salad3.png" alt="">
                <div class="discription">
                    <h1>Mixed Salad</h1>
                    <p>A mixed salad is a delightful ensemble of assorted fresh vegetables, fruits, nuts, and sometimes cheese, combined with a flavorful dressing.for making it a satisfying and nutritious option for a wholesome meal or a refreshing side.</p>
                    <p class="price">Rs 85.00</p>
                </div>
            </div>
        </div>
    </section>

    <section class="recettes">
        <div class="title">
            <h1>Nos Recettes</h1>
        </div>
        <div class="foods">
            <?php foreach ($allRecipes as $recipe): ?>
                <div class="card">
                    <?php echo htmlspecialchars($recipe['image'] ?? 'images/default.png'); ?> 
                         <?php echo htmlspecialchars($recipe['name'] ?? 'Recette'); ?>
                        <img src="emile-lenain.students-laplateforme.io/images/salad.png" alt=""> 
                    <div class="discription">
                        <h1><?php echo htmlspecialchars($recipe['name'] ?? 'Sans nom'); ?></h1>
                        <p><?php echo htmlspecialchars($recipe['description'] ?? 'Aucune description disponible'); ?></p>
                        <p class="price">
                            <?php 
                            if (isset($recipe['price'])) {
                                echo '€' . number_format($recipe['price'], 2);
                            } else {
                                echo 'Prix non disponible';
                            }
                            ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <button class="modern-button" onclick="window.location.href='emile-lenain.students-laplateforme.iouser.php';"> retour</button>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
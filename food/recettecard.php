<?php
// Connexion à la base de données
$pdo = new PDO("mysql:host=localhost;dbname=jour08", "root", "");

// Requête pour récupérer toutes les recettes
$query = "SELECT * FROM recipes";
$stmt = $pdo->query($query);

// Vérifiez s'il y a des résultats
if ($stmt->rowCount() > 0) {
    while ($recette = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $recette_id = $recette['id'];
        $nom = $recette['nom'];
        $description = $recette['description'];
        $prix = $recette['prix'];

        // Afficher chaque recette dans une carte
        echo '
        <div class="card">
            <img src="image.jpg" alt="' . $nom . '">
            <div class="discription">
                <h1>' . $nom . '</h1>
                <p>' . $description . '</p>
                <div class="price">€' . $prix . '</div>
            </div>
            <div class="rating">
                <form method="POST" action="submit_review.php">
                    <input type="hidden" name="recette_id" value="' . $recette_id . '"> <!-- ID de la recette -->
                    <input type="radio" id="star5_' . $recette_id . '" name="rating" value="5" required onchange="this.form.submit()">
                    <label for="star5_' . $recette_id . '">★</label>

                    <input type="radio" id="star4_' . $recette_id . '" name="rating" value="4" required onchange="this.form.submit()">
                    <label for="star4_' . $recette_id . '">★</label>

                    <input type="radio" id="star3_' . $recette_id . '" name="rating" value="3" required onchange="this.form.submit()">
                    <label for="star3_' . $recette_id . '">★</label>

                    <input type="radio" id="star2_' . $recette_id . '" name="rating" value="2" required onchange="this.form.submit()">
                    <label for="star2_' . $recette_id . '">★</label>

                    <input type="radio" id="star1_' . $recette_id . '" name="rating" value="1" required onchange="this.form.submit()">
                    <label for="star1_' . $recette_id . '">★</label>
                </form>
            </div>
        </div>';
    }
} else {
    echo "<p>Aucune recette disponible.</p>";
}
?>

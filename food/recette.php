<?php
// Connexion à la base de données
$pdo = new PDO("mysql:host=localhost;dbname=jour08", "root", "");

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $recette_id = $_POST['recette_id'];
    $rating = $_POST['rating'];

    // Insérer la note dans la base de données
    $query = "INSERT INTO avis (recette_id, rating) VALUES (:recette_id, :rating)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':recette_id', $recette_id);
    $stmt->bindParam(':rating', $rating);

    if ($stmt->execute()) {
        // Rediriger vers la même page après la soumission
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        // Gérer l'erreur si l'insertion échoue
        echo "Erreur lors de l'enregistrement de votre note.";
    }
}
?>

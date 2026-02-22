<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats du Formulaire</title>
</head>
<body>
    <?php
        require '../config/database.php';

        $name = $_POST['name'];
        $service = intval($_POST['service-stars']);
        $ambiance = intval($_POST['ambiance-stars']);
        $food = intval($_POST['food-stars']);
        $situation = $_POST['situation'];
        $comment = $_POST['review'];

        if (empty($name) || empty($service) || empty($ambiance) || empty($food) || empty($situation)) {
            die("Veuillez remplir tous les champs obligatoires.");
        }

        $sql = "INSERT INTO review (review_name, review_service, review_ambiance, review_food, review_situation, review_comment) VALUES (:name, :service, :ambiance, :food, :situation, :comment)";

        try {
            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ':name' => $name,
                ':service' => $service,
                ':ambiance' => $ambiance,
                ':food' => $food,
                ':situation' => $situation,
                ':comment' => $comment
            ]);

            echo "<h2>Merci pour votre avis, $name !</h2>";
        
            echo '<b>Nom : </b>'.$name.'<br>';
            echo '<b>Service : </b>'.$service.'⭐<br>';
            echo '<b>Ambience : </b>'.$ambiance.'⭐<br>';
            echo '<b>Nourriture : </b>'.$food.'⭐<br>';
            echo '<b>Situation : </b>'.$situation.'<br>';
            echo '<b>Commentaire : </b>'.$comment; 

        }catch(PDOException $e) {
            die("Une erreur est survenue lors de l'insertion.");
        }

          
    ?>
</body>
</html>
<?php require '../../config/database.php'; ?>
<?php
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

    }catch(PDOException $e) {
        die("Une erreur est survenue lors de l'insertion.");
    }

    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats du Formulaire</title>
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
</head>
<body>
    <?php include '../../includes/header.php'; ?>

    <main class="flex-grow-1">
        <section class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 mx-auto ">
                        <h2 class="text-center mb-5 fw-bold">Votre avis a été enregistré <?php echo $name; ?> !</h2>
                        <div class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                            <?php
                                echo '<b>Nom : </b>'.$name.'<br>';
                                echo '<b>Service : </b>'.$service.'⭐<br>';
                                echo '<b>Ambience : </b>'.$ambiance.'⭐<br>';
                                echo '<b>Nourriture : </b>'.$food.'⭐<br>';
                                echo '<b>Situation : </b>'.$situation.'<br>';
                                echo '<b>Commentaire : </b>'.$comment; 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <?php include '../../includes/footer.php'; ?>

    
</body>
</html>
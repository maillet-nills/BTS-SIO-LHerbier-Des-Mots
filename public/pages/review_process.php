<?php
    session_start();
    require '../../config/database.php';

    if (isset($_SESSION['firstname']) && !isset($_SESSION['already_counted'])) {
        if (isset($_COOKIE['visit_count'])) {
            $visit_count = (int)$_COOKIE['visit_count'] + 1;
        } else {
            $visit_count = 1;
        }
        setcookie('visit_count', $visit_count, time() + 30 * 24 * 3600);
        $_SESSION['already_counted'] = true;
    } else {
        if (isset($_COOKIE['visit_count'])) {
            $visit_count = (int)$_COOKIE['visit_count'];
        } else {
            $visit_count = 0;
        }
    }

    $name      = trim($_POST['name'] ?? '');
    $service   = intval($_POST['service-stars'] ?? 0);
    $ambiance  = intval($_POST['ambiance-stars'] ?? 0);
    $food      = intval($_POST['food-stars'] ?? 0);
    $situation = trim($_POST['situation'] ?? '');
    $comment   = trim($_POST['review'] ?? '');

    if (empty($name) || empty($service) || empty($ambiance) || empty($food) || empty($situation)) {
        die("Veuillez remplir tous les champs obligatoires.");
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO review (review_name, review_service, review_ambiance, review_food, review_situation, review_comment) 
                            VALUES (:name, :service, :ambiance, :food, :situation, :comment)");
        $stmt->execute([
            ':name'      => $name,
            ':service'   => $service,
            ':ambiance'  => $ambiance,
            ':food'      => $food,
            ':situation' => $situation,
            ':comment'   => $comment,
        ]);
    } catch (PDOException $e) {
        die("Une erreur est survenue lors de l'insertion.");
    }

    try {
        $stats = $pdo->query("SELECT AVG(review_service) AS avg_service, 
                                    AVG(review_ambiance) AS avg_ambiance, 
                                    AVG(review_food) AS avg_food 
                            FROM review")->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Une erreur est survenue lors de la récupération des statistiques.");
    }

    try {
        $recent_reviews = $pdo->query("SELECT review_name, review_comment 
                                    FROM review 
                                    ORDER BY review_id DESC 
                                    LIMIT 10")->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Une erreur est survenue lors de la récupération des commentaires récents.");
    }

    $h_name      = htmlspecialchars($name);
    $h_situation = htmlspecialchars($situation);
    $h_comment   = nl2br(htmlspecialchars($comment));
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Résultats du Formulaire</title>
        <meta
        name="description"
        content="La page de résultats du formulaire d'avis du café littéraire 'l'Herbier des mots' localisé à Toulouse. Elle affiche un récapitulatif de l'avis laissé par l'utilisateur et des statistiques globales."
        />
        <link rel="stylesheet" href="../../assets/css/bootstrap.css" />
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        />
        <link rel="stylesheet" href="../../assets/css/global.css" />
        <link
        rel="shortcut icon"
        href="../../assets/images/main-logo-emblem.png"
        type="image/x-icon"
        />
        <meta name="robots" content="follow" />
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "LocalBusiness",
                "name": "L'Herbier des Mots",
                "address": {
                "@type": "PostalAddress",
                "streetAddress": "12 rue des Bouquinistes",
                "addressLocality": "Toulouse",
                "postalCode": "31000",
                "addressCountry": "FR"
                }
                "telephone" : +33123456789,
                "url" : "https://www.herbierdesmots.fr"
            }
        </script>
    </head>
    <body>
        <?php include '../../includes/header.php'; ?>

        <main class="flex-grow-1">
            <section class="py-5">
                <div class="container">
                    <h2 class="text-center mb-5 fw-bold">Votre avis a été enregistré <?php echo $h_name ?> !</h2>

                    <div class="row align-items-stretch">

                        <div class="col-md-6 d-flex">
                            <div class="border rounded-3 p-4 mb-4 bg-white shadow-sm w-100" style="max-height: 500px; overflow-y: auto;">
                                <h3 class="mb-3">Récapitulatif</h3>
                                <p><b>Nom :</b> <?php echo $h_name; ?></p>
                                <p><b>Service :</b> <?php echo $service; ?> ⭐</p>
                                <p><b>Ambiance :</b> <?php echo $ambiance; ?> ⭐</p>
                                <p><b>Nourriture :</b> <?php echo $food; ?> ⭐</p>
                                <p><b>Situation :</b> <?php echo $h_situation; ?></p>
                                <h3 class="mt-4">Commentaire :</h3>
                                <p><?php echo $h_comment ?></p>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex">
                            <div class="border rounded-3 p-4 mb-4 bg-white shadow-sm w-100" style="max-height: 500px; overflow-y: auto;">
                                <h3 class="mb-3">Statistiques</h3>
                                <p><b>Service moyen :</b> <?php echo round($stats['avg_service'], 1); ?> ⭐</p>
                                <p><b>Ambiance moyenne :</b> <?php echo round($stats['avg_ambiance'], 1); ?> ⭐</p>
                                <p><b>Nourriture moyenne :</b> <?php echo round($stats['avg_food'], 1); ?> ⭐</p>
                                <h3 class="mt-4">Commentaires récents :</h3>
                                <?php foreach ($recent_reviews as $review) { ?>
                                    <p>
                                        <b><?php echo htmlspecialchars($review['review_name']) ?> :</b>
                                        <?php echo htmlspecialchars($review['review_comment']) ?>
                                    </p>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <?php include '../../includes/footer.php'; ?>
    </body>
</html>
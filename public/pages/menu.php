<?php
  session_start();

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
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu - L'Herbier des Mots</title>
    <meta
      name="description"
      content="La page menu du café littéraire 'l'Herbier des mots' localisé à Toulouse. Elle contient la carte du café."
    />
    <link rel="stylesheet" href="../../assets/css/global.css" />
    <link rel="stylesheet" href="../../assets/css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
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
  <body class="d-flex flex-column">
    <?php include '../../includes/header.php'; ?>

    <main class="flex-grow-1" style="background: #fff0df">
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h1 class="display-5 fw-bold mb-4">
                Accompagnez votre lecture de douceurs
              </h1>
              <p>
                L'Herbier des Mots propose une sélection qui saura convenir au
                goûts des plus passionnés.
              </p>
            </div>

            <div class="col-md-6">
              <img
                src="../../assets/images/bar-picture3.jpg"
                class="img-fluid rounded shadow"
                alt="photo de cafés"
              />
            </div>
          </div>
        </div>
      </section>
      <section class="py-5 text-white" style="background: #163a14">
        <div class="container">
          <div class="row">
            <div>
              <h2 class="display-5 fw-bold mb-4 text-center">Notre Carte</h2>

              <table class="table border">
                <tr>
                  <th colspan="2">Boissons Chaudes</th>
                  <th colspan="2">Boissons Froides</th>
                </tr>
                <tr>
                  <td>Américano</td>
                  <td>3.00</td>
                  <td>Caramel</td>
                  <td>4.25</td>
                </tr>
                <tr>
                  <td>Cappuccino</td>
                  <td>3.00</td>
                  <td>Vanille</td>
                  <td>4.25</td>
                </tr>
                <tr>
                  <td>Expresso</td>
                  <td>3.50</td>
                  <td>Mocha Noisette</td>
                  <td>4.50</td>
                </tr>
                <tr>
                  <td>Macchiato</td>
                  <td>4.50</td>
                  <td>Matcha Latte</td>
                  <td>6.00</td>
                </tr>
                <tr>
                  <td>Macha Latte</td>
                  <td>5.25</td>
                  <td>Matcha Latte Fraise</td>
                  <td>6.50</td>
                </tr>
                <tr>
                  <td>Mocha</td>
                  <td>4.50</td>
                  <td>Américano Glacé</td>
                  <td>3.00</td>
                </tr>
                <tr>
                  <td>Chocolat Chaud</td>
                  <td>3.50</td>
                  <td>Chocolat Chaud</td>
                  <td>3.50</td>
                </tr>
                <tr></tr>

                <tr>
                  <th colspan="2">Collations</th>
                  <th colspan="2">Thés</th>
                </tr>
                <tr>
                  <td>Cookie 3 chocolats</td>
                  <td>3.50</td>
                  <td>Earl Grey</td>
                  <td>3.00</td>
                </tr>
                <tr>
                  <td>Cookie au Matcha</td>
                  <td>3.50</td>
                  <td>Thé au Jasmin</td>
                  <td>3.00</td>
                </tr>
                <tr>
                  <td>Muffin</td>
                  <td>3.50</td>
                  <td>Thé Vert</td>
                  <td>3.00</td>
                </tr>
                <tr>
                  <td>Banana Bread</td>
                  <td>3.75</td>
                  <td>Thé Glacé Pêche</td>
                  <td>3.00</td>
                </tr>
                <tr>
                  <td>Red Velvet</td>
                  <td>4.00</td>
                  <td>Thé Oolong</td>
                  <td>3.00</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php include '../../includes/footer.php'; ?>

    <style>
      h4 {
        color: orange;
      }
    </style>
  </body>
</html>

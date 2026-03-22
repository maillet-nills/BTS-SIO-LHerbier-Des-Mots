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
    <title>À propos de nous - L'Herbier des Mots</title>
    <meta
      name="description"
      content="La page à propos de nous du café littéraire 'l'Herbier des mots' localisé à Toulouse. Elle contient l'histoire du café."
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
              <h2 class="display-5 fw-bold mb-4">Le Burn-out</h2>
              <p class="lead fw-bold">
                Le point de départ d’une nouvelle histoire
              </p>
              <p>
                La fatigue s’est installée, jusqu’à rendre le changement
                inévitable.
              </p>
            </div>

            <div class="col-md-6">
              <img
                src="../../assets/images/burnout.jpg"
                width="100%"
                height="auto"
                alt="photo burnout"
                class="img-fluid rounded shadow"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="py-5 text-white" style="background: #163a14">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <img
                src="../../assets/images/Spring Reading Under Blooming Trees.jpg"
                width="100%"
                height="auto"
                alt="photo de plantes et de livres"
                class="img-fluid rounded shadow"
              />
            </div>
            <div class="col-md-6">
              <h2 class="display-5 fw-bold mb-4">À propos de nous</h2>
              <p class="lead fw-bold">
                <i>L’Herbier des Mots</i> est né d’un besoin simple : ralentir
              </p>
              <p>
                Derrière ce café littéraire se cache l’histoire d’un ancien
                bureaucrate, longtemps happé par une carrière professionnelle
                exigeante.
              </p>
              <p>
                Peu à peu dépassé par ce quotidien, il trouve refuge dans deux
                passions essentielles : la littérature et les plantes. L’idée
                germe alors de créer un lieu où l’on pourrait lire, se détendre
                et partager.
              </p>
              <p>
                Ainsi naît <i>L’Herbier des Mots</i>, un café chaleureux à
                Toulouse, pensé comme un abri hors du temps, loin du
                métro-boulot-dodo.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h2 class="display-5 fw-bold mb-4">
                Un refuge littéraire et végétal
              </h2>
              <p class="lead fw-bold">
                Ici, chaque détail est conçu pour inviter à la lecture, à la
                détente et à la contemplation
              </p>
              <p>
                Les plantes envahissent l’espace et créent une atmosphère
                apaisante, tandis que les étagères accueillent une sélection de
                livres d’occasion, offerts à la curiositédes visiteurs.
              </p>
              <p>
                Romans, essais, poésie ou récits plus fantastiques : les
                ouvrages sont mis à la disposition des visiteurs, qu’ils soient
                lecteurs aguerris ou simples curieux. <i>L’Herbier des Mots</i>
                se veut un lieu culturel accessible, où l’on peut feuilleter
                quelques pages, savourer un café, ou simplement se laisser
                porter par l’ambiance.
              </p>
            </div>
            <div class="col-md-6">
              <img
                src="../../assets/images/bar-picture2.jpg"
                width="100%"
                height="auto"
                alt="photo du bar"
                class="img-fluid rounded shadow"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="py-5 text-white" style="background: #163a14">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <img
                src="../../assets/images/opened-book.jpg"
                width="100%"
                height="auto"
                alt="photo d'un livre ouvert"
                class="img-fluid rounded shadow"
              />
            </div>
            <div class="col-md-6">
              <h2 class="display-5 fw-bold mb-4">
                Suspendre le temps, entre deux pages
              </h2>
              <p class="lead fw-bold">
                Notre ambition est simple : faire oublier, ne serait-ce qu’un
                instant, le bruit du monde extérieur
              </p>
              <p>
                À <i>L’Herbier des Mots</i>, le temps ralentit. On s’y installe
                pour lire, écrire, parler littérature, ou simplement profiter
                d’un moment de détente autour d’un café.
              </p>
              <p>
                Plus qu’un lieu pour boire ou manger, c’est un espace de partage
                et d’évasion. Que vous veniez seul, entre amis ou pour réserver
                une pause hors du temps, <i>L’Herbier des Mots</i> vous
                accueille comme chez vous.
              </p>
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

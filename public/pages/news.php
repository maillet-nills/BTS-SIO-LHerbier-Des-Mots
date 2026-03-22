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
    <title>Actualités - L'Herbier des Mots</title>
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
          <div class="row align-items-center text-center">
            <h2 class="display-5 fw-bold mb-4">L'auteur de la semaine</h2>
            <p class="lead fw-bold">Plongez dans son univers</p>
          </div>
        </div>
      </section>

      <section class="py-5 text-white" style="background: #163a14">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <img
                src="../../assets/images/stephen-king-news.jpg"
                width="100%"
                height="auto"
                alt="photo de plantes et de livres"
                class="img-fluid rounded shadow"
              />
            </div>
            <div class="col-md-6">
              <h2 class="display-5 fw-bold mb-4">Stephen King</h2>
              <p>
                Maître incontesté du suspense et de l’horreur contemporaine,
                Stephen King explore depuis plus de quarante ans les zones
                d’ombre de l’âme humaine. Derrière ses histoires de monstres, de
                villes inquiétantes ou de phénomènes surnaturels, se cache avant
                tout une écriture profondément humaine, ancrée dans le
                quotidien.
              </p>
              <p>
                Ses romans parlent de peur, bien sûr, mais aussi d’enfance, de
                solitude, de mémoire et de résilience. De <i>Shining</i> à
                <i>Ça</i>, en passant par <i>Misery</i> ou
                <i>La Ligne verte</i>, Stephen King transforme l’ordinaire en
                source d’angoisse, rappelant que l’horreur naît souvent là où on
                ne l’attend pas.
              </p>
              <p>
                Cette semaine, L’Herbier des Mots vous invite à (re)découvrir
                ses œuvres autour d’un café, et à feuilleter quelques pages où
                le fantastique sert surtout à mieux comprendre l’humain.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h2 class="display-5 fw-bold mb-4">Qui est-t-il ?</h2>
              <p class="lead fw-bold">Le conteur de l’ombre</p>
              <p>
                Figure majeure de la littérature contemporaine, Stephen King est
                l’un des auteurs les plus lus au monde. Né en 1947 aux
                États-Unis, il s’est imposé par une écriture accessible, directe
                et profondément humaine. Derrière le fantastique et l’horreur,
                il raconte surtout des histoires de gens ordinaires confrontés à
                l’extraordinaire.
              </p>
            </div>
            <div class="col-md-6">
              <img
                src="../../assets/images/stephen-king-news-interview.webp"
                width="100%"
                height="auto"
                alt="photo d'une bibliothèque"
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
                src="../../assets/images/dim-library.webp"
                width="100%"
                height="auto"
                alt="photo d'un livre ouvert"
                class="img-fluid rounded shadow"
              />
            </div>
            <div class="col-md-6">
              <h2 class="display-5 fw-bold mb-4">Un univers reconnaissable</h2>
              <p class="lead fw-bold">Quand le quotidien bascule</p>
              <p>
                Villes tranquilles, maisons familières, personnages ordinaires :
                Stephen King part toujours du réel. La peur naît
                progressivement, souvent là où on ne l’attend pas. Un détail
                anodin, une tension silencieuse, et l’équilibre se rompt.
              </p>
              <p>
                Ses récits explorent la psychologie, les peurs enfouies et les
                liens humains, bien au-delà du simple frisson. L’horreur devient
                alors un miroir, révélant les fragilités, les choix et les
                failles de ses personnages.
              </p>
              <p>
                Lire Stephen King, c’est accepter de s’aventurer dans un univers
                où l’étrange surgit sans prévenir, mais où l’humain reste
                toujours au centre du récit. Une expérience de lecture
                immersive, troublante et profondément marquante.
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

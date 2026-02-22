<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Réservation - L'Herbier des Mots</title>
    <meta
      name="description"
      content="La page de réservation du café littéraire 'l'Herbier des mots' localisé à Toulouse. Elle contient un formulaire de réservation."
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

    <main class="flex-grow-1">
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 mx-auto">
              <h2 class="text-center mb-5 fw-bold">Prendre une réservation</h2>
              <?php if ($message): ?>
                <div class="alert alert-success"><?= $alert ?></div>
              <?php endif; ?>
              <form action="../../includes/reservation_process.php" method="POST">
                <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                  <div class="row g-1 mb-1">
                    <div class="col-md">
                      <label for="name" class="form-label fw-semibold d-block">Nom</label>
                      <input type="text" name="name" class="form-control" required>
                    </div>
                  </div>

                  <div class="row g-1 mb-1">
                    <div class="col-md">
                      <label for="email" class="form-label fw-semibold d-block">Email</label>
                      <input type="email" name="email" class="form-control" required>
                    </div>
                  </div>

                  <div class="row g-1 mb-1">
                    <div class="col-md">
                      <label for="reservation-date" class="form-label fw-semibold d-block">Date</label>
                      <input type="date" name="reservation-date" class="form-control" required>
                    </div>
                  </div>

                  <div class="row g-1 mb-1">
                    <div class="col-md">
                      <label for="reservation-time" class="form-label fw-semibold d-block">Horaire</label>
                      <select class="form-select" name="reservation-time" required>
                        <option value="">-- Choisissez un horaire --</option>
                        <option value="12:00">12:00</option>
                        <option value="12:30">12:30</option>
                        <option value="13:00">13:00</option>
                        <option value="13:30">13:30</option>
                        <option value="14:00">14:00</option>
                        <option value="14:30">14:30</option>
                        <option value="15:00">15:00</option>
                        <option value="15:30">15:30</option>
                        <option value="16:00">16:00</option>
                        <option value="16:30">16:30</option>
                        <option value="17:00">17:00</option>
                        <option value="17:30">17:30</option>
                        <option value="18:00">18:00</option>
                      </select>
                    </div>
                  </div>

                  <div class="row g-1 mb-1">
                    <div class="col-md">
                      <label for="guests" class="form-label fw-semibold d-block">Nombre de personnes</label>
                      <select class="form-select" name="guests" required>
                        <option value="">-- Choisissez le nombre de personnes --</option>
                        <option value="1">1 personne</option>
                        <option value="2">2 personnes</option>
                        <option value="3">3 personnes</option>
                        <option value="4">4 personnes</option>
                        <option value="5">5 personnes</option>
                      </select>
                    </div>
                  </div>

                  <div class="row g-1 mb-1">
                    <div class="col-md">
                      <label for="message" class="form-label fw-semibold d-block">Message (optionnel)</label>
                      <textarea name="message" class="form-control" rows="3" style="resize:none"></textarea>
                    </div>
                  </div>

                  <div class="row g-1 mb-1">
                    <div class="col-md">
                      <button type="submit" class="btn btn-success btn-lg px-5 shadow">Réserver</button>
                    </div>
                  </div>
                </fieldset>
              </form>
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

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
    <title>Quiz - L'Herbier des Mots</title>
    <meta
      name="description"
      content="La page quiz du café littéraire 'l'Herbier des mots' localisé à Toulouse. Elle contient des jeux."
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
    <script src="../js/script.js"></script>
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

    <main>
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <form name="form" id="quizz" class="container py-4">
              <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                <legend class="float-none w-auto px-3 fw-bold text-success">
                  <h2 class="d-inline">Le Quizz Littéraire !</h2>
                  <a
                    href="javascript:stepTwo()"
                    id="second-step"
                    style="display: none; text-decoration: none"
                    class="ms-2"
                    >👁️</a
                  >
                </legend>

                <div class="mb-4">
                  Nous vous proposons un petit quizz à remplir afin d'évaluer
                  votre culture littéraire ! <br />
                  <span class="text-muted small"
                    >Répondez aux 10 questions et découvrez votre résultat
                    !</span
                  >
                </div>

                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="input-group">
                      <label for="name" class="input-group-text">Nom</label>
                      <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <label for="forename" class="input-group-text"
                        >Prénom</label
                      >
                      <input
                        type="text"
                        name="forename"
                        id="forename"
                        class="form-control"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <label for="email" class="input-group-text">Email</label>
                      <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <label for="tel" class="input-group-text"
                        >Téléphone</label
                      >
                      <input
                        type="tel"
                        name="tel"
                        id="tel"
                        class="form-control"
                      />
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                <legend
                  class="float-none w-auto px-3 fw-bold fs-5 text-secondary"
                >
                  Question 1
                </legend>
                <label class="form-label fw-bold mb-3 d-block"
                  >Quel est l'auteur de "1984" ?</label
                >
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q1"
                    id="george-orwell"
                  />
                  <label
                    class="form-check-label"
                    for="george-orwell"
                    id="correct-label-q1"
                    >George Orwell</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q1"
                    id="isaac-asimov"
                  />
                  <label
                    class="form-check-label"
                    for="isaac-asimov"
                    id="wrong-label-q1a"
                    >Isaac Asimov</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q1"
                    id="jk-rowling"
                  />
                  <label
                    class="form-check-label"
                    for="jk-rowling"
                    id="wrong-label-q1b"
                    >JK Rowling</label
                  >
                </div>
              </fieldset>

              <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                <legend
                  class="float-none w-auto px-3 fw-bold fs-5 text-secondary"
                >
                  Question 2
                </legend>
                <label class="form-label fw-bold mb-3 d-block"
                  >De quelle nationalité est Franz Kafka ?</label
                >
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q2"
                    id="autrichienne"
                  />
                  <label
                    class="form-check-label"
                    for="autrichienne"
                    id="correct-label-q2"
                    >Autrichienne</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q2"
                    id="hongroise"
                  />
                  <label
                    class="form-check-label"
                    for="hongroise"
                    id="wrong-label-q2a"
                    >Hongroise</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q2"
                    id="allemande"
                  />
                  <label
                    class="form-check-label"
                    for="allemande"
                    id="wrong-label-q2b"
                    >Allemande</label
                  >
                </div>
              </fieldset>

              <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                <legend
                  class="float-none w-auto px-3 fw-bold fs-5 text-secondary"
                >
                  Question 3
                </legend>
                <label class="form-label fw-bold mb-3 d-block"
                  >Comment s'appellent les deux petits protagonistes du Seigneur
                  des Anneaux ?</label
                >
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    name="q3"
                    id="aragorn"
                  />
                  <label
                    class="form-check-label"
                    for="aragorn"
                    id="wrong-label-q3a"
                    >Aragorn</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    name="q3"
                    id="frodon-sacquet"
                  />
                  <label
                    class="form-check-label"
                    for="frodon-sacquet"
                    id="correct-label-q3-1"
                    >Frodon Sacquet</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    name="q3"
                    id="legolas"
                  />
                  <label
                    class="form-check-label"
                    for="legolas"
                    id="wrong-label-q3b"
                    >Legolas</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    name="q3"
                    id="sam-gamegie"
                  />
                  <label
                    class="form-check-label"
                    for="sam-gamegie"
                    id="correct-label-q3-2"
                    >Sam Gamegie</label
                  >
                </div>
              </fieldset>

              <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                <legend
                  class="float-none w-auto px-3 fw-bold fs-5 text-secondary"
                >
                  Question 4
                </legend>
                <label class="form-label fw-bold mb-3 d-block"
                  >Combien de romans Stephen King a-t-il écrit ?</label
                >
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q4"
                    id="85"
                  />
                  <label class="form-check-label" for="85" id="wrong-label-q4a"
                    >85</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q4"
                    id="28"
                  />
                  <label class="form-check-label" for="28" id="wrong-label-q4b"
                    >28</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q4"
                    id="65"
                  />
                  <label class="form-check-label" for="65" id="correct-label-q4"
                    >65</label
                  >
                </div>
              </fieldset>

              <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                <legend
                  class="float-none w-auto px-3 fw-bold fs-5 text-secondary"
                >
                  Question 5
                </legend>
                <label class="form-label fw-bold mb-3 d-block"
                  >Dans quelle œuvre trouve-t-on le personnage de Sherlock
                  Holmes ?</label
                >
                <div class="form-check mb-2 d-flex align-items-center">
                  <input
                    class="form-check-input me-2"
                    type="radio"
                    name="q5"
                    id="orient-express"
                  />
                  <label
                    class="form-check-label"
                    for="orient-express"
                    id="wrong-label-q5a"
                    >Le crime de l'Orient-Express</label
                  >
                  <a
                    href="javascript:stepThree()"
                    id="third-step"
                    style="display: none; text-decoration: none"
                    class="ms-2"
                    >👁️</a
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q5"
                    id="dracula"
                  />
                  <label
                    class="form-check-label"
                    for="dracula"
                    id="wrong-label-q5b"
                    >Dracula</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q5"
                    id="une-etude-en-rouge"
                  />
                  <label
                    class="form-check-label"
                    for="une-etude-en-rouge"
                    id="correct-label-q5"
                    >Une étude en rouge</label
                  >
                </div>
              </fieldset>

              <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                <legend
                  class="float-none w-auto px-3 fw-bold fs-5 text-secondary"
                >
                  Question 6
                </legend>
                <label class="form-label fw-bold mb-3 d-block"
                  >Quel personnage est un mousquetaire dans le roman d'Alexandre
                  Dumas ?</label
                >
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q6"
                    id="jean-valjean"
                  />
                  <label
                    class="form-check-label"
                    for="jean-valjean"
                    id="wrong-label-q6a"
                    >Jean Valjean</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q6"
                    id="d-artagnan"
                  />
                  <label
                    class="form-check-label"
                    for="d-artagnan"
                    id="correct-label-q6"
                    >D'Artagnan</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q6"
                    id="meursault"
                  />
                  <label
                    class="form-check-label"
                    for="meursault"
                    id="wrong-label-q6b"
                    >Meursault</label
                  >
                </div>
              </fieldset>

              <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                <legend
                  class="float-none w-auto px-3 fw-bold fs-5 text-secondary"
                >
                  Question 7
                </legend>
                <label class="form-label fw-bold mb-3 d-block"
                  >Quel écrivain est connu pour avoir développé le naturalisme
                  ?</label
                >
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q7"
                    id="emile-zola"
                  />
                  <label
                    class="form-check-label"
                    for="emile-zola"
                    id="correct-label-q7"
                    >Emile Zola</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q7"
                    id="moliere"
                  />
                  <label
                    class="form-check-label"
                    for="moliere"
                    id="wrong-label-q7a"
                    >Molière</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q7"
                    id="jean-paul-sartre"
                  />
                  <label
                    class="form-check-label"
                    for="jean-paul-sartre"
                    id="wrong-label-q7b"
                    >Jean-Paul Sartre</label
                  >
                </div>
              </fieldset>

              <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                <legend
                  class="float-none w-auto px-3 fw-bold fs-5 text-secondary"
                >
                  Question 8
                </legend>
                <label class="form-label fw-bold mb-3 d-block"
                  >Lesquels de ces genres appartiennent à la littérature
                  narrative ?</label
                >
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    name="q8"
                    id="roman"
                  />
                  <label
                    class="form-check-label"
                    for="roman"
                    id="correct-label-q8-1"
                    >Roman</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    name="q8"
                    id="poesie"
                  />
                  <label
                    class="form-check-label"
                    for="poesie"
                    id="wrong-label-q8a"
                    >Poésie</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    name="q8"
                    id="nouvelle"
                  />
                  <label
                    class="form-check-label"
                    for="nouvelle"
                    id="correct-label-q8-2"
                    >Nouvelle</label
                  >
                </div>
              </fieldset>

              <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                <legend
                  class="float-none w-auto px-3 fw-bold fs-5 text-secondary"
                >
                  Question 9
                </legend>
                <label class="form-label fw-bold mb-3 d-block"
                  >Quel est l'auteur de "Vingt mille lieues sous les mers"
                  ?</label
                >
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q9"
                    id="jules-vernes-1"
                  />
                  <label
                    class="form-check-label"
                    for="jules-vernes-1"
                    id="correct-label-q9"
                    >Jules Verne</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q9"
                    id="alexandre-dumas"
                  />
                  <label
                    class="form-check-label"
                    for="alexandre-dumas"
                    id="wrong-label-q9a"
                    >Alexandre Dumas</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q9"
                    id="albert-camus"
                  />
                  <label
                    class="form-check-label"
                    for="albert-camus"
                    id="wrong-label-q9b"
                    >Albert Camus</label
                  >
                </div>
              </fieldset>

              <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                <legend
                  class="float-none w-auto px-3 fw-bold fs-5 text-secondary"
                >
                  Question 10
                </legend>
                <label class="form-label fw-bold mb-3 d-block"
                  >Qui a écrit "Le Petit Prince" ?</label
                >
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q10"
                    id="victor-hugo"
                  />
                  <label
                    class="form-check-label"
                    for="victor-hugo"
                    id="wrong-label-q10a"
                    >Victor Hugo</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q10"
                    id="antoine-saint-exupery"
                  />
                  <label
                    class="form-check-label"
                    for="antoine-saint-exupery"
                    id="correct-label-q10"
                    >Antoine de Saint-Exupéry</label
                  >
                </div>
                <div class="form-check mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="q10"
                    id="jules-vernes-2"
                  />
                  <label
                    class="form-check-label"
                    for="jules-vernes-2"
                    id="wrong-label-q10b"
                    >Jules Verne</label
                  >
                </div>
              </fieldset>

              <fieldset
                class="border rounded-3 p-4 mb-4 bg-white shadow-sm text-center"
              >
                <legend
                  class="float-none w-auto px-3 fw-bold fs-5 text-secondary"
                >
                  Terminé !
                </legend>

                <div class="mb-4">
                  <label for="choice" class="form-label fw-bold"
                    >Comment vous qualifieriez-vous en tant que lecteur ?</label
                  >
                  <select
                    id="choice"
                    class="form-select mx-auto"
                    style="max-width: 400px"
                  >
                    <option value="empty">Veuillez choisir une option</option>
                    <option value="choice1">Amateur de lecture</option>
                    <option value="choice2">Nouveau lecteur</option>
                    <option value="choice3">Ancien lecteur</option>
                  </select>
                </div>
                <input
                  type="button"
                  name="send"
                  id="send"
                  value="Découvrir mon score !"
                  class="btn btn-success btn-lg px-5 shadow"
                  onclick="submitQuizz()"
                />
              </fieldset>
            </form>
          </div>
        </div>
      </section>

      <section class="py-5" style="background: #163a14">
        <div class="container">
          <div class="row align-items-center">
            <form id="img-quizz-container" class="container py-4">
              <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                <legend class="float-none w-auto px-3 fw-bold text-success">
                  <h2 class="d-inline">Trouvez le bon auteur !</h2>
                </legend>
                <div class="text-muted">
                  Cliquez sur l'auteur écrivant de la dystopie bradburienne !
                  <br />
                  Ensuite, entrez son nom (prénom & nom) dans la boîte de saisie
                  ci-dessous.
                </div>
              </fieldset>

              <fieldset class="border rounded-3 p-4 mb-4 bg-white shadow-sm">
                <legend
                  class="float-none w-auto px-3 fw-bold fs-5 text-secondary"
                >
                  Choisissez une photo
                </legend>

                <div class="row g-4 text-center">
                  <div class="col-6 col-md-4">
                    <input
                      type="radio"
                      name="img-guess"
                      id="aldous-huxley-img"
                      class="img-radio"
                    />
                    <label for="aldous-huxley-img" class="img-radio-label">
                      <img
                        src="../../assets/images/quizz/aldous-huxley.jpg"
                        alt="Aldous Huxley"
                        title="Ald..?"
                        class="img-radio-picture shadow-sm w-50 d-block mx-auto"
                      />
                    </label>
                  </div>

                  <div class="col-6 col-md-4">
                    <input
                      type="radio"
                      name="img-guess"
                      id="philip-k-dick-img"
                      class="img-radio"
                    />
                    <label for="philip-k-dick-img" class="img-radio-label">
                      <img
                        src="../../assets/images/quizz/philip-k-dick.jpg"
                        alt="Philip K. Dick"
                        title="Phil..?"
                        class="img-radio-picture shadow-sm w-50 d-block mx-auto"
                      />
                    </label>
                  </div>

                  <div class="col-6 col-md-4">
                    <input
                      type="radio"
                      name="img-guess"
                      id="george-orwell-img"
                      class="img-radio"
                    />
                    <label for="george-orwell-img" class="img-radio-label">
                      <img
                        src="../../assets/images/quizz/george-orwell.jpg"
                        alt="George Orwell"
                        title="Geo..?"
                        class="img-radio-picture shadow-sm w-50 d-block mx-auto"
                      />
                    </label>
                  </div>

                  <div class="col-6 col-md-4">
                    <input
                      type="radio"
                      name="img-guess"
                      id="ray-bradbury-img"
                      class="img-radio"
                    />
                    <label for="ray-bradbury-img" class="img-radio-label">
                      <img
                        src="../../assets/images/quizz/ray-bradbury.png"
                        alt="Ray Bradbury"
                        title="Ray..?"
                        class="img-radio-picture shadow-sm w-50 d-block mx-auto"
                      />
                    </label>
                  </div>

                  <div class="col-6 col-md-4">
                    <input
                      type="radio"
                      name="img-guess"
                      id="franz-kafka-img"
                      class="img-radio"
                    />
                    <label for="franz-kafka-img" class="img-radio-label">
                      <img
                        src="../../assets/images/quizz/franz-kafka.jpg"
                        alt="Franz Kafka"
                        title="Fra..?"
                        class="img-radio-picture shadow-sm w-50 d-block mx-auto"
                      />
                    </label>
                  </div>

                  <div class="col-6 col-md-4">
                    <input
                      type="radio"
                      name="img-guess"
                      id="isaac-asimov-img"
                      class="img-radio"
                    />
                    <label for="isaac-asimov-img" class="img-radio-label">
                      <img
                        src="../../assets/images/quizz/isaac-asimov.png"
                        alt="Isaac Asimov"
                        title="Isa..?"
                        class="img-radio-picture shadow-sm w-50 d-block mx-auto"
                      />
                    </label>
                  </div>
                </div>
              </fieldset>

              <fieldset class="border rounded-3 p-4 bg-white shadow-sm">
                <legend
                  class="float-none w-auto px-3 fw-bold fs-5 text-secondary"
                >
                  Votre réponse
                </legend>
                <div class="row justify-content-center">
                  <div class="col-md-8 col-lg-6">
                    <div class="input-group">
                      <label for="author-name" class="input-group-text"
                        >Prénom & Nom :</label
                      >
                      <input
                        type="text"
                        name="author-name"
                        id="author-name"
                        class="form-control"
                        placeholder="Entrez votre réponse ici"
                      />
                      <button
                        type="button"
                        class="btn btn-success px-4"
                        onclick="submitImgQuizz()"
                      >
                        Valider !
                      </button>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </section>

      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <form class="form"></form>
            <fieldset class="border rounded-3 p-4 bg-white shadow-sm">
              <legend class="float-none w-auto px-3 fw-bold text-success">
                <h2>Jeu de piste !</h2>
              </legend>
              <div>
                Il y a un jeu de piste dans cette page ! Essaie de le suivre
                pour faire apparaître une image juste en dessous ! Un indice :
                dystopie orwelienne... 💡
              </div>
            </fieldset>
            <fieldset class="border rounded-3 p-4 bg-white shadow-sm">
              <legend class="float-none w-auto px-3">-></legend>
              <div style="width: 500px; height: 500px">
                <img
                  src="../../assets/images/quizz/1984-book-cover.jpg"
                  alt="1984 couverture"
                  style="border-radius: 20px; display: none"
                  id="secret-img"
                  class="img-fluid rounded shadow"
                />
              </div>
            </fieldset>
            <fieldset
              class="border rounded-3 p-4 bg-white shadow-sm"
              style="display: none"
              id="secret-fieldset"
            >
              <legend class="float-none w-auto px-3">-></legend>
              <div class="content" style="font-size: 2em">
                🎉🎉🎉 BRAVO 🎉🎉🎉
              </div>
            </fieldset>
          </div>
        </div>
      </section>

      <section class="py-5" style="background: #163a14">
        <div class="container">
          <div class="row align-items-center">
            <form>
              <fieldset class="border rounded-3 p-4 bg-white shadow-sm">
                <legend class="float-none w-auto px-3">
                  <h2>Question bonus !</h2>
                </legend>
                <div>
                  Comment s'appelle le sorcier dans le Seigneur des Anneaux ?
                  Écris son nom et fait le apparaître !🔮
                </div>

                <div class="input-group mb3">
                  <label for="gandalf-field" class="input-group-text"
                    >Écris-le ici :</label
                  ><input type="text" name="gandalf-field" id="gandalf-field" />
                  <input
                    type="button"
                    name="send"
                    id=""
                    value="Valider !"
                    class="btn btn-success"
                    onclick="easyGuess()"
                  />
                </div>
              </fieldset>
              <fieldset class="border rounded-3 p-4 bg-white shadow-sm">
                <legend class="float-none w-auto px-3">-></legend>
                <div style="width: 500px; height: 500px">
                  <img
                    src="../../assets/images/quizz/gandalf.jpg"
                    alt="Gandalf"
                    style="border-radius: 20px; display: none"
                    id="gandalf-img"
                    class="img-fluid rounded shadow"
                  />
                </div>
              </fieldset>
              <fieldset
                class="border rounded-3 p-4 bg-white shadow-sm"
                style="display: none"
                id="secret-gandalf-fieldset"
              >
                <legend class="float-none w-auto px-3">-></legend>
                <div class="content" style="font-size: 3em">🔮Gandalf🔮</div>
              </fieldset>
            </form>
          </div>
        </div>
      </section>
    </main>

    <footer class="py-5 text-white" style="background-color: #164a13">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-5">
            <h4 class="mb-3">L'Herbier des Mots</h4>
            <p class="small text-white-50">
              Un espace unique où la littérature rencontre l'art du café. Venez
              découvrir, lire et savourer dans une atmosphère chaleureuse.
            </p>
            <div class="d-flex gap-3 fs-4 mt-3">
              <a
                href="#"
                class="text-white text-decoration-none d-flex align-items-center justify-content-center"
                style="width: 40px; height: 40px"
              >
                <i class="bi bi-facebook"></i>
              </a>
              <a
                href="#"
                class="text-white text-decoration-none d-flex align-items-center justify-content-center"
                style="width: 40px; height: 40px"
              >
                <i class="bi bi-instagram"></i>
              </a>
              <a
                href="mailto:contact@lherbierdesmots.fr"
                class="text-white text-decoration-none d-flex align-items-center justify-content-center"
                style="width: 40px; height: 40px"
              >
                <i class="bi bi-envelope"></i>
              </a>
            </div>
          </div>

          <div class="col-md-4">
            <h4 class="mb-3">Contact</h4>
            <ul class="list-unstyled">
              <li class="mb-2">
                📍 7 impasse des Pages Silencieuses, 31000 Toulouse
              </li>
              <li class="mb-2">📞 01 23 45 67 89</li>
              <li class="mb-2">✉️ contact@lherbierdesmots.fr</li>
            </ul>
          </div>

          <div class="col-md-3">
            <h4 class="mb-3">Horaires</h4>
            <ul class="list-unstyled">
              <li class="mb-2">Lundi - Vendredi : <strong>12h-19h</strong></li>
              <li class="mb-2">Dimanche : <strong>9h-17h</strong></li>
            </ul>
          </div>
        </div>

        <hr class="my-4 border-light opacity-25" />

        <div class="text-center small text-white-50">
          © 2025 L'Herbier des Mots. Tous droits réservés.
          <a
            href="javascript:stepOne()"
            id="first-step"
            style="text-decoration: none"
            class="ms-2"
            >👁️</a
          >
        </div>
      </div>
    </footer>

    <style>
      h4 {
        color: orange;
      }
    </style>
  </body>
</html>

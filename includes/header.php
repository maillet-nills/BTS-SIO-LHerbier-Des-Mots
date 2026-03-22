<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
       
    $root = '';
    if (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) {
        $root = '../';
    }
?>

<header class="py-3" style="background-color: #164a13">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <a href="<?= $root ?>index.php" class="col-md">
                <img src="<?= $root ?>../assets/images/main-logo.png" style="height: 100px"
            /></a>
            

            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="<?= $root ?>index.php" class="nav-link text-white fs-5">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $root ?>pages/about.php" class="nav-link text-white fs-5"
                            >À propos de nous</a
                        >
                    </li>
                    <li class="nav-item">
                        <a href="<?= $root ?>pages/quiz.php" class="nav-link text-white fs-5"
                            >Quiz</a
                        >
                    </li>
                    <li class="nav-item">
                        <a href="<?= $root ?>pages/menu.php" class="nav-link text-white fs-5"
                            >Notre Carte</a
                        >
                    </li>
                    <li class="nav-item">
                        <a href="<?= $root ?>pages/news.php" class="nav-link text-white fs-5"
                            >Actualités</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            href="<?= $root ?>pages/reservation.php"
                            class="nav-link text-white fs-5"
                            >Réserver</a
                        >
                    </li>
                </ul>
            </nav>
            <?php if (isset($_SESSION['firstname'])){ ?>
                <span class="badge rounded-pill text-bg-light fs-5 px-4 py-2">
                    <i class="bi bi-person-circle me-2"></i><?php echo $_SESSION['firstname'] ?>
                </span>
            <?php } else { ?>
                <span class="badge rounded-pill text-bg-light fs-5 px-4 py-2">
                    <i class="bi bi-person-circle me-2"></i><?php echo "Guest" ?>
                </span>
            <?php } ?>
        </div> 
    </div>
</header>
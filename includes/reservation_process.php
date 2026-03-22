<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation de la réservation</title>
</head>
<body>
    <?php
        require '../config/database.php';

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $reservation_date = $_POST['reservation-date'];
        $reservation_time = $_POST['reservation-time'];
        $guests = intval($_POST['guests']);
        $message = htmlspecialchars($_POST['message']);

        $sql = "INSERT INTO reservation(name, email, reservation_date, reservation_time, guests, message) 
        VALUES (:name, :email, :reservation_date, :reservation_time, :guests, :message)";

        try {
            $stmt = $pdo->prepare($sql);

            $stmt-> execute([
                ':name' => $name,
                ':email'=> $email,
                ':reservation_date' => $reservation_date,
                ':reservation_time' => $reservation_time,
                ':guests' => $guests,
                ':message'=> $message
            ]);

            echo "<h2>Merci pour votre réservation, ".$name." !</h2>";
        
            echo '<b>Nom : </b>'.$name.'<br>';
            echo '<b>Mail : </b>'.$email.'<br>';
            echo '<b>Date : </b>'.$reservation_date.'<br>';
            echo '<b>Horaire : </b>'.$reservation_time.'<br>';
            echo '<b>Nombre de personnes : </b>'.$guests.'<br>';
            echo '<b>Message (optionnel) : </b>'.$message; 

        }catch(PDOException $e) {
            die("Une erreur est survenue lors de la réservation.");
        }

        
    ?>
</body>
</html>


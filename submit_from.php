<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $projekt = $_POST['projectt'];
    $email = $_POST['mail'];

    $sql = "INSERT INTO projekty (project_name, email) VALUES (:project_name, :email)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':project_name', $projekt);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()) {
        echo "Wysłano";
    } else {
        echo "Nie udało się wysłać: BŁĄD";
    }
}
?>

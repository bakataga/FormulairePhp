<?php

include "header.php";


session_start();

// Vérifier si les données de l'utilisateur sont disponibles en session
if (isset($_SESSION['nom'], $_SESSION['email'], $_SESSION['genre'], $_SESSION['sujet'], $_SESSION['message'])) {
    $nom = $_SESSION['nom'];
    $email = $_SESSION['email'];
    $genre = $_SESSION['genre'];
    $sujet = $_SESSION['sujet'];
    $message = $_SESSION['message'];

    // Afficher les informations dans un format lisible
    echo "<h2>Vos informations</h2>";
    echo "<p><strong>Nom :</strong> $nom</p>";
    echo "<p><strong>Email :</strong> $email</p>";
    echo "<p><strong>Genre :</strong> $genre</p>";
    echo "<p><strong>Sujet :</strong> $sujet</p>";
    echo "<p><strong>Message :</strong> $message</p>";
} else {
    echo "<p>Aucune information disponible.</p>";
}

include "footer.php";
?>